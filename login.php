<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"> 
<script src="https://cdn.tailwindcss.com"></script> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    *, *:before, *:after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to left, #7be3ff, #a8bdf5 );
      font-family: 'Poppins', sans-serif; 

    }
    .backgr {
      position: absolute;
      width: 900px;
      height: 550px;
      background:url(streetart2.jpg);
      background-size: cover;
    }
    .backgr:after {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(10px);
    }
    input, button {
      border: none;
      outline: none;
      background: none;
    }
    .cont {
      overflow: hidden;
      position: relative;
      right: 0;
      top: 0;
      width: 900px;
      height: 550px;
      background: transparent;
    }
    .form {
      position: relative;
      width: 640px;
      height: 100%;
      padding: 50px 30px;
      backdrop-filter: blur(20px);
      -webkit-transition: -webkit-transform 1.2s ease-in-out;
      transition: -webkit-transform 1.2s ease-in-out;
      transition: transform 1.2s ease-in-out;
      transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
    }
    h2 {
      width: 100%;
      font-size: 30px;
      text-align: center;
    }
    label {
      display: block;
      width: 260px;
      margin: 25px auto;
      text-align: center;
    }
    label span {
      font-size: 14px;
      font-weight: 600;
      color: #eae1e1;
      text-transform: uppercase;
    }
    input {
      display: block;
      width: 100%;
      margin-top: 5px;
      font-size: 16px;
      padding-bottom: 5px;
      border-bottom: 1px solid #ffeb3b;
      text-align: center;
    }
    button {
      display: block;
      margin: 0 auto;
      width: 260px;
      height: 36px;
      border-radius: 30px;
      color: #fff;
      font-size: 15px;
      cursor: pointer;
    }
    .submit {
      margin-top: 40px;
      margin-bottom: 30px;
      text-transform: uppercase;
      margin-left: 10rem;
      font-weight: 600;
      background: linear-gradient(to left, #f44336, #ffeb3b);
    }
    .submit:hover {
      background: linear-gradient(to left, #ffeb3b, #f44336);
    }
    .forgot-pass {
      margin-top: 15px;
      text-align: center;
      font-size: 14px;
      font-weight: 600;
      color: #0c0101;
      cursor: pointer;
    }
    .forgot-pass:hover {
      color: red; 
    }
    .middle {
        position: absolute;
        margin-top: 60px;
        left: 0%; 
        transform: translateY(-50%);
        width: 100%;
        text-align: center;
    }   
    .btn {
        display: inline-block;
        width: 50px;
        height: 50px;
        background: #f1f1f1;
        margin: 8px;
        border-radius: 30%;
        box-shadow: 0 5px 15px -5px #00000070;
        background: #f1f1f1; 
        color: #f44336;
        overflow: hidden;
        position: relative;
    }  
    .btn i {
        line-height: 50px;
        font-size: 26px;
        transition: 0.2s linear;
    }   
    .sub-cont {
      overflow: hidden;
      position: absolute;
      left: 640px;
      top: 0;
      width: 900px;
      height: 100%;
      padding-left: 260px;
      background: transparent;
      backdrop-filter: blur(20px);
      -webkit-transition: -webkit-transform 1.2s ease-in-out;
      transition: -webkit-transform 1.2s ease-in-out;
      transition: transform 1.2s ease-in-out;
    }
    .cont.s-signup .sub-cont {
      -webkit-transform: translate3d(-640px, 0, 0);
              transform: translate3d(-640px, 0, 0);
    }
    .img {
      overflow: hidden;
      z-index: 2;
      position: absolute;
      left: 0;
      top: 0;
      width: 260px;
      height: 100%;
      padding-top: 360px;
    }
    .img:before {
      content: '';
      position: absolute;
      right: 0;
      top: 0;
      width: 900px;
      height: 100%;
      background-image: url(streetart2.jpg);
      background-size: cover;
      transition: -webkit-transform 1.2s ease-in-out;
      transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out; 
    }
    .img:after {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.3);
    }
    .cont.s-signup .img:before {
      -webkit-transform: translate3d(640px, 0, 0);
              transform: translate3d(640px, 0, 0);
    }
    .img-text {
      z-index: 2;
      position: absolute;
      left: 0;
      top: 50px;
      width: 100%;
      padding: 0 20px;
      text-align: center;
      color: #fff;
      -webkit-transition: -webkit-transform 1.2s ease-in-out;
      transition: -webkit-transform 1.2s ease-in-out;
      transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;  
    }
    .img-text h2 {
      margin-bottom: 10px;
      font-weight: normal;
    }
    .img-text p {
      font-size: 14px;
      line-height: 1.5;
    }
    .cont.s-signup .img-text.m-up{
      -webkit-transform: translateX(520px);
              transform: translateX(520px);
    }
    .img-text.m-in {
      -webkit-transform: translateX(-520px);
              transform: translateX(-520px);
    }
    .cont.s-signup .img-text.m-in{
      -webkit-transform: translateX(0);
              transform: translateX(0);
    }
    .sign-in {
      padding-top: 65px;
      -webkit-transition-timing-function: ease-out;
              transition-timing-function: ease-out;
    }
    .cont.s-signup .sign-in {
      -webkit-transition-timing-function: ease-in-out;
              transition-timing-function: ease-in-out;
      -webkit-transition-duration: 1.2s;
              transition-duration: 1.2s;
      -webkit-transform: translate3d(640px, 0, 0);
              transform: translate3d(640px, 0, 0);
    }
    .img-btn {
      overflow: hidden;
      z-index: 2;
      position: relative;
      width: 100px;
      height: 36px;
      margin: 0 auto;
      background: transparent;
      color: #fff;
      text-transform: uppercase;
      font-size: 15px;
      cursor: pointer;
    }
    .img-btn:after {
      content: '';
      z-index: 2;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      border: 2px solid #fff;
      border-radius: 30px;
    }
    .img-btn span {
      position: absolute;
      left: 0;
      top: 0;
      display: -webkit-box;
      display: flex;
      -webkit-box-pack: center;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
      -webkit-transition: -webkit-transform 1.2s;
      transition: -webkit-transform 1.2s;
      transition: transform 1.2s;
      transition: transform 1.2s, -webkit-transform 1.2s;
    }
    .img-btn span.m-in {
      -webkit-transform: translateY(-72px);
              transform: translateY(-72px);
    }
    .cont.s-signup .img-btn span.m-in{
      -webkit-transform:translateY(0);
              transform:translateY(0);
    }
    
    .cont.s-signup .img-btn span.m-up{
      -webkit-transform:translateY(72px);
              transform:translateY(72px);
    }

    .sign-up {
      -webkit-transform: translate3d(-900px, 0, 0);
              transform: translate3d(-900px, 0, 0);
    }
    .cont.s-signup .sign-up {
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0); 
    }
  </style>
</head>
<body>
<nav class="md:flex md:justify-around md:gap-[10rem] md:items-center bg-opacity-80 md:h-[4rem] fixed top-0 left-0 z-50 w-full bg-transparent">
        <a class="md:h-[14rem] md:w-[14rem] md:ml-[-5.8rem] md:mt-3" href="#"><img src="Travel Paths.png" alt="loogo"></a>
        <ul class="flex justify-around items-center gap-[15rem] text-lg font-serif">
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="index.php">HOME</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="#">TRAVEL</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="#"></a>ABOUT US</li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="login.php">LOGIN</a></li>
        </ul>
    </nav>
    <div class="absolute inset-0">
    <video autoplay muted loop class="w-full h-full object-cover">
      <source src="b.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="absolute inset-0 bg-black bg-opacity-30"></div> <!-- Overlay -->
  </div>
<div class="cont">

  <div class="backgr"></div>
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="Password" name="password">
      </label>
      <button class="submit" type="button">Sign In</button>
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="middle">
        <a class="btn" href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn" href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="btn" href="#">
          <i class="fab fa-google"></i>
        </a>
        <a class="btn" href="#">
          <i class="fab fa-instagram"></i>
        </a>
        <a class="btn" href="#">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here ?</h2>
          <p>Sign up and dicover great amount of new opportunities !</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. Weve missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>        
        </div>  
      </div>
      <div class="form sign-up">
        <h2>Sign up</h2>
        <label>
          <span>Name</span>
          <input type="text">
        </label>
        <label>
          <span>Email</span>
          <input type="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password">
        </label>
        <button type="button" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>

  <script>
    document.querySelector('.img-btn').addEventListener('click', function()
    {
      document.querySelector('.cont').classList.toggle('s-signup')
    });
  </script>
      
</body>
</html>
