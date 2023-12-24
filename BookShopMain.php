<?php
require 'dbmsConfig.php';
if(!empty($_SESSION["StudentID"])){
  $StudentID = $_SESSION["StudentID"];
  $result = mysqli_query($conn, "SELECT * FROM logininfo WHERE StudentID = '$StudentID'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <style>
        *{
            font-family: 'Montserrat', sans-serif;
        }
        ::-webkit-scrollbar {
        display: none;
        }
    </style>

    <title>Library Facilities</title>
</head>
<body style="background: url('IMGS/doodle.jpg');">
    <div class="w-full h-full flex">
        <div class="grid mt-96  w-fit h-fit shadow-xl  ml-5 rounded-xl " style="background:  #00000090;">
            <ul class=" w-fit  h-fit ">
                <li class="mt-2 flex border-r border-r-orange-600 w-full px-5 pt-4 pb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6 transition-all hover:text-orange-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                      </svg>
                      
                    <h1 class="text-sm ml-2 hidden">Dashboard</h1>
                </li>
                <li class="mt-4 flex px-5 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                     h-6 hover:text-orange-600 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13.5H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                      </svg>
                      
                      
                    <h1 class="text-sm ml-2 hidden">Private Files</h1>
                </li>
                <li class="mt-4 flex px-5 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                     h-6 hover:text-orange-600 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                      </svg>
                      
                      
                      
                    <h1 class="text-sm ml-2 hidden">Calender</h1>
                </li>

                <li class="mt-4 flex px-5 pt-3 pb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                     h-6 hover:text-orange-600 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h1 class="text-sm ml-2 hidden">My Courses</h1>
                </li>
            </ul>

        </div>



        <div class="w-full h-full mr-10 ml-10 mt-10 grid">
        <div class="flex justify-between mt-10 p-5  rounded-2xl h-fit w-full" style="background: #00000090">
                    <div class="w-32 flex">
                        <img src="IMGS/lmslogo.png" class="w-32" alt="">
                        <h1 class="border-l text-white pt-6 pl-2  text-3xl">UIU BOOKSHOP</h1>
                    </div>

                    <div class="flex">
                        <button class="mr-10 ">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">chat</h1>

                        </button>

                        <a class="mr-10 mt-14">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">Bookshop</h1>

                        </a>
                        <a href="LibraryStudentside.php" class="mr-10 mt-14">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">Library Facilities</h1>

                        </a>
                        <a href="ProfileSettings.php" class="mr-10 mt-11">


                            <div class="flex">
                                <?php
                                    if ($row["profilePictureSection"] != null) {
        
                                        echo '<img src="' . $row["profilePictureSection"] . '" alt="Profile Picture" class="w-10 h-10 rounded-full">';
                                    } else {

                                         echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">\<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>';
                                    }
                                ?>
                                <h1 class="mt-2 ml-1">
                                <?php
                                    $fullName = $row["StudentName"];
                                    $nameParts = explode(" ", $fullName);
                                    $middleName = "";

                                    $numParts = count($nameParts);
                                    if ($numParts > 1) {
                                        $middleIndex = floor($numParts / 2);
                                        $middleName = $nameParts[$middleIndex];
                                    }

                                    echo $middleName;
                                ?>
                                </h1>
    
                            </div>

                        </a>
                        <div>
                            
                        </div>
                    </div>

                </div>



            <!-- Search -->
            <div class="w-full h-fit bg-white p-5 rounded-xl shadow-xl mt-10">
                <h1 class="uppercase text-sm font-semibold">SEARCH BOOKS</h1>

                <form action="" method="post" autocomplete="off">
                    <div class="w-full h-fit flex">
                        <input type="text" name="search" class="w-full border border-orange-500 mt-3 p-1 h-10 rounded-lg " placeholder="Enter Book Name To Search... ">
                        <input type="submit" value="Search" name="Search" id="Search" class="bg-orange-500 h-fit ml-3 p-2 mt-3 rounded-md ">

                    </div>
                </form>
            </div>

            <div class="w-full h-full bg-white p-5 rounded-xl shadow-xl mt-10">
                <h1 class="uppercase text-sm font-semibold">Available Items in the bookshop</h1>




                <h1 class="uppercase text-sm font-semibold mt-10">ALL ITEMS</h1>
                <div class="w-full h-full flex flex-wrap overflow-x-scroll">



                    <?php

                        $BookQuery = "SELECT * FROM  bookshop";
                        $BookQueryFetch = $conn->query($BookQuery);

                        while($BookRow = $BookQueryFetch->fetch_assoc()){
                        ?>
                                <a href="BookShopBooking.php?productID=<?php echo urlencode($BookRow["productID"]); ?>">



                        <div class="p-5 bg-white h-fit rounded-2xl shadow-xl" style="background: url('IMGS/doodle.jpg');">
                                <div class="bg-orange-500 h-[27rem] rounded-xl mr-5">
                                    <img src="folder2/<?php echo $BookRow['pic']; ?>" class="w-72 h-72">
                                    <div class="text-white grid w-full justify-center text-center">
                                        <h1 class="uppercase text-md w-64 mb-5 font-semibold"><?php echo $BookRow["Productname"]; ?></h1>
                                        <h1 class="uppercase text-md font-light"><?php echo $BookRow["productID"]; ?> Edition</h1>
                                        <h1 class="uppercase text-md font-light">Category:  <?php echo $BookRow["Category"]; ?> </h1>

                                        <h1 class="uppercase text-md font-light">description  <?php echo $BookRow["Category"]; ?> </h1>
                                        <h1 class="uppercase text-md font-light"><?php echo $BookRow["Price"]; ?> TAKA</h1>
                                </div>
                        
                            </div>
                            </div>

                        </a>

                        
                        <?php
                        }
                        ?>

                    

                    


                </div>






                

            </div>




        </div>

    </div>
    <footer class="mt-20 bg-orange-500 text-white h-80">
        <div class="  relative top-20 w-full grid align-middle justify-center">
            <h1 class="uppercase text-lg">Made by</h1>
            <img src="IMGS/teamlogo.png" class="w-96" alt="">
        </div>
    </footer>
</body>
</html>