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

            $selectAll = "SELECT * FROM client";
            $data = mysqli_query($connect, $selectAll);
          
            if ($data) {
              echo'<div class="overflow-x-auto shadow-md mx-2 sm:rounded-lg">';
              echo'<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">';
                  echo'<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                         <th scope="col" class="px-6 py-3">Name</th>
                         <th scope="col" class="px-6 py-3">Prenom</th>
                         <th scope="col" class="px-6 py-3">E-mail</th>
                         <th scope="col" class="px-6 py-3">Telephone</th>
                         <th scope="col" class="px-6 py-3">Address</th>
                         <th scope="col" class="px-6 py-3">Date de naissance</th>
                         <th scope="col" class="px-6 py-3">Action </th>
                     </tr>
                 </thead>';
              while ($row = $data -> fetch_assoc()) {
                  echo'<tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $row["nom"] . '</th>
                      <td class="px-6 py-4">' . $row["prenom"] . '</td>
                      <td class="px-6 py-4">' . $row["email"] . '</td>
                      <td class="px-6 py-4">' . $row["telephone"] . '</td>
                      <td class="px-6 py-4">' . $row["address"] . '</td>
                      <td class="px-6 py-4">' . $row["data_naissance"] . '</td>
                  </tr>
                </tbody>';
              }
              echo'</table>';
              echo'</div>';
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