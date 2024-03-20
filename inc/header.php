


<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><?php echo $settings_r['site_title'] ?></a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-2 " href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="about.php">About</a>
        </li>
       
      </ul>
      <div class="d-flex">
        <?php 
          if (isset($_SESSION['login']) && $_SESSION['login']== true)
          {
            $path = USERS_IMG_PATH;
            echo<<<data
                <div class="btn-group">
                <button type="button" class="btn btn-outline-dark shadow-none dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                  <img src ='$path$_SESSION[uPic]' style="width: 25px; height: 25px;" class="me-1">
                  $_SESSION[uName]
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                  <li><a class="dropdown-item" href="bookings.php">Bookings</a></li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </div>
            data;
          }
          else {
            echo<<<data
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
              </button>
              <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
              </button>
            data;
          }
        ?>
      </div>
    </div>
  </div>
</nav>

  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="login-form">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" >
        <i class="bi bi-person-circle fs-3 me-2"></i> User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="text" name="email_mob" class="form-control shadow-none">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="pass" class="form-control shadow-none">
        </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
          <button type="submit" class="btn btn-dark shadow-none">Login</button>
          <a href="javascript: void(0)" class="text-seceondary text-decoration-none"> Forgot Password?</a>        
        </div>
      </div>
      </form>
    </div>
  </div>
  </div>

  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="register-form">
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" >
        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
        User Registration
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
        Thông tin của bạn phải khớp với ID của bạn (CCCD, CMND, GPLX,...)Điều này sẽ được xác nhận lại khi bạn nhận phòng.
      </span>
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control shadow-none "require>
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Email</label>
                <input name="email" type="email" class="form-control shadow-none "require>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Phone Number</label>
                <input name="phonenum" type="number" class="form-control shadow-none "require>
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Picture</label>
                <input name="profile" type="file" accept=".jpg, .jpeg, .png, .webp" class="form-control shadow-none " require>
              </div>
              <div class="col-md-12 p-0 mb-3">
                <label class="form-label">Address</label>
                <textarea name="address" class="form-control shadow-none " require  rows="1"></textarea>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Date of birth</label>
                <input name="dob" type="date" class="form-control shadow-none "require>
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">CCCD(CMND,...)</label>
                <input name="pincode" type="number" class="form-control shadow-none"require>
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label class="form-label">Password</label>
                <input name="pass" type="password" class="form-control shadow-none"require>
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label class="form-label">Confirm Password</label>
                <input name="cpass" type="password" class="form-control shadow-none"require>
              </div>
          </div>
        </div>
        <div class="text-center my-1">
        <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  </div>

  <script>
    function alert(type,msg,position='body')
    {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element =document.createElement('div');
        element.innerHTML =`
            <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
            <strong class="me-3">${msg}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

        if(position=='body'){
          document.body.append(element);
          element.classList.add('custom-alert');
        }

        else{
          document.getElementById(position).appendChild(element);
        }
        setTimeout(remAlert,2000);
    }

    function remAlert(){
        document.getElementsByClassName('alert')[0].remove();
    }

    function setActive()
      {
        let navbar = document.getElementById('nav-bar');
        let a_tags = navbar.getElementsByTagName('a');

        for(i=0;i<a_tags.length;i++){
          let file =a_tags[i].href.split('/').pop();
          let file_name = file.split('.')[0];

          if(document.location.href.indexOf(file_name) >= 0){
            a_tags[i].classList.add('active');
          }
        }
      }
    
      let register_form=document.getElementById('register-form');
      register_form.addEventListener('submit', (e)=>{
        e.preventDefault();

        let data = new FormData();

        data.append('name',register_form.elements['name'].value);
        data.append('email',register_form.elements['email'].value);
        data.append('phonenum',register_form.elements['phonenum'].value);
        data.append('address',register_form.elements['address'].value);
        data.append('pincode',register_form.elements['pincode'].value);
        data.append('dob',register_form.elements['dob'].value);
        data.append('pass',register_form.elements['pass'].value);
        data.append('cpass',register_form.elements['cpass'].value);
        data.append('profile',register_form.elements['profile'].files[0]);
        data.append('register','');

        var myModalEl = document.getElementById('registerModal');
            var modal = bootstrap.Modal.getInstance(myModalEl);
            modal.hide(); 

            let xhr = new XMLHttpRequest();
              xhr.open("POST","ajax/login_register.php",true);
              
              
              xhr.onload = function(){   
                  if(this.responseText == 'pass_mismatch'){
                    alert('error',"Password Mismatch");
                  }
                  else if (this.responseText == 'email_already'){
                    alert('error',"Email is already registered!");
                  }
                  else if (this.responseText == 'phone_already'){
                    alert('error',"Phone number is already registered!");
                  }
                  else if (this.responseText == 'email_already'){
                    alert('error',"Email is already registered!");
                  }
                  else if (this.responseText == 'inv_img'){
                    alert('error',"Only JPG, WEBP & PNG images are allowed!");
                  }
                  else if (this.responseText == 'upd_failed'){
                    alert('error',"Image upload failed!");
                  }
                  else if (this.responseText == 'ins_failed'){
                    alert('error',"Registration failed! Server down!");
                  }
                  else {
                    alert('success',"Registraion successful.");
                    register_form.reset();
                  }
              }
              

              xhr.send(data);    



      });

      let login_form=document.getElementById('login-form');
      login_form.addEventListener('submit', (e)=>{
        e.preventDefault();

        let data = new FormData();

        data.append('email_mob',login_form.elements['email_mob'].value);
        data.append('pass',login_form.elements['pass'].value);
        data.append('login','');

        var myModalEl = document.getElementById('loginModal');
            var modal = bootstrap.Modal.getInstance(myModalEl);
            modal.hide(); 

            let xhr = new XMLHttpRequest();
              xhr.open("POST","ajax/login_register.php",true);
              
              
              xhr.onload = function() {   
                  if (this.responseText.trim() === 'inv_email_mob') {
                      alert('error', "Invalid Email or Mobile Number!");
                  } else if (this.responseText.trim() === 'inactive') {
                      alert('error', "Account Suspended! Please contact Admin!");
                  } else if (this.responseText.trim() === 'invalid_pass') {
                      alert('error', "Incorrect Password!");
                  } else if (this.responseText.trim() === 'true') { // Kiểm tra phản hồi trả về true
                      window.location.reload();
                  }
}
              

              xhr.send(data);    



      });

      setActive();
   </script>

