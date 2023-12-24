
<?php
require 'dbmsConfig.php';
if(!empty($_SESSION["ID"])){
  $ID = $_SESSION["ID"];
  $result = mysqli_query($conn, "SELECT * FROM facultytab WHERE ID = '$ID'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}





if (isset($_GET["coursecode"]) && isset($_GET["coursename"]) && isset($_GET["section"]) && isset($_GET["trimester"]) && isset($_GET["Department"])) {
    $coursecode= $_GET["coursecode"];
    $coursename= $_GET["coursename"];
    $Section= $_GET["section"];



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

        #formPrb{
            display:none;
        }
    </style>
</head>
<body style="background: url('IMGS/doodle.jpg');">
    <div class="flex w-full h-full " id="bodyfull">
        <div class="grid mt-96  w-fit h-fit shadow-xl  ml-5 rounded-xl " style="background:  #00000090;">
                <ul class=" w-fit  h-fit ">
                    <li class="mt-2 flex border-r border-r-orange-600 w-full px-5 pt-4 pb-2">

                    <a href="stdDashboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6 transition-all hover:text-orange-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                          </svg>
                          
                        <h1 class="text-sm ml-2 hidden">Dashboard</h1>
                    </a>
                    </li>
                    <li class="mt-4 flex px-5 py-2">
                        <a href="participants.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>


                          
                          
                        <h1 class="text-sm ml-2 hidden">Private Files</h1>
                        </a>

                    </li>
                    <li class="mt-4 flex px-5 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                         h-6 hover:text-orange-600 transition-all">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                          </svg>
                          
                          
                          
                        <h1 class="text-sm ml-2 hidden">Calender</h1>
                    </li>


                    <a href="logout.php">
                    <li class="mt-5 flex px-5 pt-3 pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-orange-600 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>

                        <h1 class="text-sm ml-2 hidden">My Courses</h1>
                    </li>
                    </a>
                </ul>
    
                
            </div>

            <div class="w-full mr-10 ">
                <div class="flex justify-between mt-10 p-5 ml-5 rounded-2xl h-fit w-full" style="background: #00000090">
                    <div class="w-20">
                        <img src="IMGS/lmslogo.png" class="w-20 scale-125" alt="">
                    </div>

                    <div class="flex  mt-5">
                        <a class="mr-10 ">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">chat</h1>

                        </a>

                        <a class="mr-10 ">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">Bookshop</h1>

                        </a>
                        <a href="LibraryStudentside.php" class="mr-10 ">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">Library Facilities</h1>

                        </a>
                        <a class="mr-10">
                            <img src="IMGS/me.jpg" class="w-10 rounded-full" alt="">

                        </a>

                    </div>

                </div>

                <div class="w-full ml-5">
                    <div class="mt-10 w-full shadow-[#8c483a8c] shadow-2xl rounded-xl">
                        <div class="bg-white  p-5 rounded-xl border-orange-500">
                            <h1>participants in <?php ?></h1>






                            <table>
                    <thead class="border  border-1 p-5">
                        <th  class="ml-5 border border-black px-8 py-2" >Student ID</th>
                        <th class="ml-5 border border-black px-5 py-2" >Course Name</th>
                        <th class="ml-5 border border-black px-5 py-2" >Section</th>

                    </thead>


                    <tbody>
                    <?php
                        if (isset($_GET["coursecode"]) && isset($_GET["coursename"]) && isset($_GET["section"]) ) {

                            $coursecode= $_GET["coursecode"];
                            $coursename= $_GET["coursename"];
                            $Section= $_GET["section"];



                            $query2 = "SELECT * FROM studentcoursetab WHERE CourseCode='$coursecode' AND Section='$Section' ";
                            $r = $conn->query($query2);


                            while($StdRow = $r->fetch_assoc()){
                                ?>

                        <tr>
                            <td class="border border-black px-5 py-6"><?php echo $StdRow["ID"]?> </td>
                            <td class="border border-black px-5 py-6"><?php echo $StdRow["CourseName"]?> </td>
                            <td class="border border-black px-5 py-6"><?php echo $StdRow["Section"]?> </td>


                            
                        </tr>
                    <?php
                    }
                    ?>

                    <?php
                    }
                    ?>


                        

                    </tbody>
                </table>
                        </div>


                        
    
                    <div class="mt-5 w-full flex   ">
                        

                        
                    </div>


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

