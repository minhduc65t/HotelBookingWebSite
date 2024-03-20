
<?php 
    require('../admin/inc/db_config.php');
    require('../admin/inc/essentials.php');

    if(isset($_POST['register']))
    {
        $data = filteration($_POST);

        // match password and confirm password field

        if($data['pass'] != $data['cpass'])
        {
            echo 'pass_mismatch';
            exit;

        }

        // check user exits or not

        $u_exist = select("SELECT * FROM `user_cred` WHERE `email` =? AND `phonenum`=?",
            [$data['email'],$data['phonenum']],"ss");

        if(mysqli_num_rows($u_exist)!=0){
            $u_exist_fetch = mysqli_fetch_assoc($u_exist);
            echo ($u_exist_fetch['email']== $data['email']) ? 'email_already' : 'phone_already';
            exit;
        }

        //upload user image to server

        $image = $_FILES['profile'];

        $result = uploadImage($image, USERS_FOLDER);

        if ($result === 'inv_img') {
            echo 'inv_img';
            exit;
        } else if ($result === 'inv_size') {
            echo 'inv_size';
            exit;
        } else if ($result === 'upd_failed') {
            echo 'upd_failed';
            exit;
        }


        // register and write php_admin
        $enc_pass= password_hash($data['pass'],PASSWORD_BCRYPT);

        $query = "INSERT INTO `user_cred`(`name`,`email`,`address`,`phonenum`,`pincode`,`dob`,`profile`,`password`) VALUES (?,?,?,?,?,?,?,?)";

        $values = [$data['name'],$data['email'],$data['address'],$data['phonenum'],$data['pincode'],$data['dob'],$result,$enc_pass];

        if(insert($query,$values,'ssssssss')){
            echo 1;
        }
        else{
            echo 'ins_failed';
        }


    } 

    if(isset($_POST['login'])){
        $data = filteration($_POST);

        $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? OR `phonenum` = ? LIMIT 1", [$data['email_mob'], $data['email_mob']], "ss");

        if(mysqli_num_rows($u_exist) != 0) {
            $u_fetch = mysqli_fetch_assoc($u_exist);
            if(password_verify($data['pass'], $u_fetch['password'])) {
                if($u_fetch['status'] == 0) {
                    echo 'inactive';
                } else {
                    session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['uId'] = $u_fetch['id'];
                    $_SESSION['uName'] = $u_fetch['name'];
                    $_SESSION['uPic'] = $u_fetch['profile'];
                    $_SESSION['uPhone'] = $u_fetch['phonenum'];
                    echo 1;
                }
            } else {
                echo 'invalid_pass';
            }
        } else {
            echo 'inv_email_mob';
        }

    }
     
?>