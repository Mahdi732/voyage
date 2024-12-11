<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<nav class="md:flex md:justify-around md:gap-[10rem] md:items-center bg-opacity-80 md:h-[4rem] w-full bg-black">
        <a class="md:h-[14rem] md:w-[14rem] md:ml-[-5.8rem] md:mt-3" href="index.php"><img src="Travel Paths.png" alt="loogo"></a>
        <ul class="flex justify-around items-center gap-[15rem] text-lg font-serif">
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="index.php">HOME</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="tours.php">TOURS</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="dashbord.php"></a>ABOUT US</li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="login.php">LOGIN</a></li>
        </ul>
    </nav>

    <div class="h-[100vh]">
        <?php
            include '/xampp/htdocs/voyage/conect.php';

          $selectall = "SELECT * FROM client";
          $data = mysqli_query($connect, $selectall);
          if($data){
              while($fetch = mysqli_fetch_assoc($data)){
                  echo '<div class="flex flex-col gap-4 bg-white rounded-lg shadow-lg  h-[9rem] w-full">
                  <div class="flex ml-4 gap-[13rem]">
                  <p class="text-lg font-medium text-gray-600"><strong>nom:</strong> </p>
                  <p class="text-lg font-medium text-gray-600"><strong>prenom:</strong> </p>
                  <p class="text-lg font-medium text-gray-600"><strong>email:</strong></p>
                  <p class="text-lg font-medium text-gray-600"><strong>telephone:</strong> </p>
                  <p class="text-lg font-medium text-gray-600"><strong>address:</strong> </p>
                  <p class="text-lg font-medium text-gray-600"><strong>data naissance:</strong></p>
                  </div>  
                  <div class="flex gap-[9.5rem] ml-4">
                  <p class="text-lg font-medium text-gray-600">' . $fetch['nom'] . '</p>
                  <p class="text-lg font-medium text-gray-600"> ' . $fetch["prenom"] . '</p>
                  <p class="text-lg font-medium text-gray-600"> ' . $fetch["email"] . '</p>
                  <p class="text-lg font-medium text-gray-600"> ' . $fetch["telephone"] . '</p>
                  <p class="text-lg font-medium text-gray-600">' . $fetch["address"] . '</p>
                  <p class="text-lg font-medium text-gray-600"> ' . $fetch["data_naissance"] . '</p>
                  </div>  
                  </div>';       
              }
            }
        ?>
    </div>

    <footer class="bg-gray-900 text-gray-400">
        <div class=" flex flex-col md:flex-row justify-between items-center">
            <img src="Travel Paths.png" class="h-[4rem] w-[4rem]" alt="Logo">
            <div class="mb-4 md:mb-0 flex gap-10">
                <a href="#" class="hover:text-white transition duration-300">Privacy Policy</a>
                <a href="#" class="hover:text-white transition duration-300">Terms of Service</a>
                <a href="#" class="hover:text-white transition duration-300">Help Center</a>
            </div>
            <p class="text-sm">© 2024 Fut Champion. All rights reserved.</p>
        </div>
    </footer>
    
</body>
</html>