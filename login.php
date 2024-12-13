<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous"> 
  <script src="https://cdn.tailwindcss.com"></script> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    *{
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
      background-image: url(streetart2.jpg);
      font-family: 'Poppins', sans-serif; 
    }
    .backgr {
      position: absolute;
      width: 900px;
      height: 550px;
      background: url(streetart2.jpg);
      background-size: cover;
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
      padding: 70px 30px;
      backdrop-filter: blur(20px);
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
    .img-text {
      z-index: 2;
      position: absolute;
      left: 0;
      top: 50px;
      width: 100%;
      padding: 0 20px;
      text-align: center;
      color: #fff;
    }
    .img-text h2 {
      margin-bottom: 10px;
      font-weight: normal;
    }
    .img-text p {
      font-size: 14px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
    <nav class="md:flex md:justify-around md:gap-[10rem] md:items-center bg-opacity-80 md:h-[4rem] fixed top-0 left-0 z-50 w-full bg-transparent">
        <a class="md:h-[14rem] md:w-[14rem] md:ml-[-5.8rem] md:mt-3" href="#"><img src="Travel Paths.png" alt="logo"></a>
        <ul class="flex justify-around items-center gap-[10rem] text-lg font-serif">
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="index.php">HOME</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="tours.php">TOURS</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="client.php">CLIENT</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="login.php">LOGIN</a></li>
        </ul>
    </nav>
    <div class="cont">
      <div class="backgr"></div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <form method="POST">
          <div class="flex">
            <label>
              <span>Name</span>
              <input type="text" name="name">
            </label>
            <label>
              <span>Prenom</span>
              <input type="text" name="prenom">
            </label>
          </div>
          <div class="flex">
            <label>
              <span>Email</span>
              <input type="email" name="email">
            </label>
            <label>
              <span>Telephone</span>
              <input type="number" name="telephone">
            </label>
          </div>
          <div class="flex">
            <label>
              <span>Address</span>
              <input type="text" name="address">
            </label>
            <label>
              <span>Data Naissance</span>
              <input type="date" name="data_naissance">
            </label>
          </div>
          <button type="submit" class="submit">Sign Up Now</button>
        </form>
      </div>
    </div>


  <?php
  include'/xampp/htdocs/voyage/conect.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $address = $_POST["address"];
    $data_naissance = $_POST["data_naissance"];
    $sql = "INSERT INTO client (nom, prenom, email, telephone, address, data_naissance) VALUES (
    '$name', '$prenom', '$email', '$telephone', '$address', '$data_naissance')";
    $sqlquery = mysqli_prepare($connect, $sql);
    $sqlexcute = mysqli_stmt_execute($sqlquery);
    if ($sqlexcute) {
      echo'<script type="text/javascript">
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
        </script>';
    }else {
      echo 'error' . mysqli_stmt_error($sqlquery);
    }
  }

  ?>

</body>
</html>
