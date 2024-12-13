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
        <a class="md:h-[14rem] md:w-[14rem] md:ml-[-5.8rem] md:mt-3" href="#"><img src="Travel Paths.png" alt="loogo"></a>
        <ul class="flex justify-around items-center gap-[10rem] text-lg font-serif">
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="index.php">HOME</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="tours.php">TOURS</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="dashbord.php">CLIENT</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="reservation.php">RESERVATION</a></li>
            <li class="hover:bg-blue-400 hover:bg-opacity-20 hover:text-white transition duration-300 cursor-pointer h-[2.5rem] pt-1.5 w-[6rem] text-center rounded-lg"><a href="login.php">LOGIN</a></li>
        </ul>
    </nav>

    <div class="h-[100vh]">
    <?php
            include '/xampp/htdocs/voyage/conect.php';

            $selectAll = "SELECT * FROM client";
            $data = mysqli_query($connect, $selectAll);
            if (isset($_POST['delete_id_c'])) {
              $delete_id = $_POST['delete_id_c'];
              $delete_sql = "DELETE FROM client WHERE id_client = $delete_id";
              $result = mysqli_query($connect, $delete_sql);
              
                if ($result) {
                  echo '<script type="text/javascript">
                      if (window.history.replaceState) {
                          window.history.replaceState(null, null, window.location.href);
                      }
                  </script>';
              }
          } 
            if ($data) {
              echo'<div class="overflow-x-auto shadow-md mt-4 mx-2 sm:rounded-lg">';
              echo'<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">';
                  echo'<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                         <th scope="col" class="px-6 py-3">Prenom</th>
                         <th scope="col" class="px-6 py-3">Telephone</th>
                         <th scope="col" class="px-6 py-3">E-mail</th>
                         <th scope="col" class="px-6 py-3">Address</th>
                         <th scope="col" class="px-6 py-3">Date de naissance</th>
                        <th scope="col" class="px-6 py-3">-</th>

                     </tr>
                 </thead>';
              while ($fetch = $data -> fetch_assoc()) {
                  echo'<tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                      <th scope="ro
                      w" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $fetch["nom"] . '</th>
                      <td class="px-6 py-4">' . $fetch["prenom"] . '</td>
                      <td class="px-6 py-4">' . $fetch["telephone"] . '</td>
                      <td class="px-6 py-4">' . $fetch["email"] . '</td>
                      <td class="px-6 py-4">' . $fetch["address"] . '</td>
                      <td class="px-6 py-4">' . $fetch["data_naissance"] . '</td>
                      <td class="px-6 py-4">  <form method="POST" action="">
                <button type="submit" class="bg-red-700 p-1 rounded-lg text-center text-[12px] w-[16rem] text-white transition-all duration-300">
                    Delete
                <input type="hidden" name="delete_id_c" value="' . $fetch['id_client'] . '">
                </button>
            </form></td>
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