<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link id="pagestyle" href="<?= base_url('/public/login/assets/css/style.css'); ?>" rel="stylesheet" />
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="<?= base_url('/public/login/assets/img/1.jpg'); ?>" alt="">
        <div class="text">
          <span class="text-1">BOUTIQUE HELEN GIRL  <br> S.A.C</span>
          <span class="text-2">Login</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="<?= base_url('/public/login/assets/img/6.jpg'); ?>"alt="">
        <div class="text">
          <span class="text-1"><br> </span>
          <span class="text-2"></span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Usuario" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input  href="<?= base_url('login'); ?>" type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">!Aun no tienes cuenta! <label for="flip">Sign up</label></div>
            </div>
        </form>

        <li class="nav-item"><a class="nav-link" href="<?= base_url('admin'); ?>"><span class="sidenav-normal">Categorias</span></a></li>
                              
      
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Usuario" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder=" Repit Password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">¿Ya tienes cuenta? <label for="flip">Login</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
