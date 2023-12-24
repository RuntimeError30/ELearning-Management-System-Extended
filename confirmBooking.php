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


$Bname= $_GET["Bname"];
$Edition= $_GET["edition"];
$dept= $_GET["dept"];
$Category= $_GET["Category"];
$bookid= $_GET["bookid"];
$thumb= $_GET["Thumbnail"];

$token = bin2hex(random_bytes(4));

$currentDate = date('Y-m-d');

$stdName = $row["StudentName"];
$ID = $row["StudentID"];
$Email = $row["Email"];
$Mob = $row["Mobile Number"];

$Status = 'Pending';

    if(isset($_POST["booking"])){


      


        $daysToAdd = (int)$_POST["daysToAdd"];



        $newDate = date('Y-m-d', strtotime($currentDate . ' + ' . $daysToAdd . ' days'));
        


        $dbookingQ = mysqli_query($conn, "INSERT INTO librarybookbooking VALUES ('$stdName','$ID','$Email','$token','$Mob','$Bname','$bookid','$currentDate','$newDate','$Status')");
        








        


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
        #popupmsg{
            display: none;
        }
    </style>
        <script>
        window.onload = function() {
            <?php
            session_start();
            if (isset($_SESSION["bookingSuccess"]) && $_SESSION["bookingSuccess"]) {
                echo 'popup();';
                $_SESSION["bookingSuccess"] = false; // Reset the session variable
            }
            ?>

            function popup() {
                document.getElementById("popupmsg").style.display = "block";
                document.getElementById("bgfull").style.filter = "blur(8px)";
                document.getElementById("bgfull").style.webkitFilter = "blur(8px)";
            }

            function closebtn() {
                document.getElementById("popupmsg").style.display = "none";
                document.getElementById("bgfull").style.filter = "none";
                document.getElementById("bgfull").style.webkitFilter = "none";
            }
        };
    </script>

    <title>Library Facilities</title>
</head>
<body style="background: url('IMGS/doodle.jpg');" >
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
            <div class="flex justify-between p-5  rounded-2xl h-fit w-full" style="background: #00000090">
                <div class="w-1/2 flex">
                    <img src="IMGS/lmslogo.png" class="w-20 scale-150" alt="">
                    <h1 class="text-lg ml-5  hover:text-orange-500 hover:font-semibold transition-all uppercase text-white mt-4 ">LIBRARY <br> FACILITIES</h1>
    
                </div>
    
                <div class="flex">
                    <button class="mr-10 ">
                        <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">chat</h1>
    
                    </button>
    
                    <button class="mr-10 ">
                        <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">Bookshop</h1>
    
                    </button>
                    <button class="mr-10 ">
                        <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-orange-500 font-semibold">Library Facilities</h1>
    
                    </button>
                    <button class="mr-10">
                        <img src="IMGS/me.jpg" class="w-10 rounded-full" alt="">
    
                    </button>
                    <div>
                        
                    </div>
                </div>
    
            </div >



            <!-- Search -->
            <div class="w-full h-fit bg-white p-5 rounded-xl shadow-xl mt-10 flex justify-start">
                <div class="bg-white w-72 border border-orange-100 shadow-2xl rounded-xl" style="background: url('IMGS/doodle.jpg'); ">
                    <img src="folder2/<?php echo $thumb; ?>" alt="">
                </div>

                <div class=" ml-10 mt-24">
                    <h1 class=" text-3xl font-semibold text-orange-500 uppercase">Fundamental Calculus</h1>
                    <h1 class=" text-md  text-black uppercase">Category: Circuit</h1>
                    <h1 class=" text-md  text-black uppercase">Edition: 3rd</h1>
                    <h1 class=" text-md  text-black uppercase">Department: Department of CSE</h1>


                    <form action="" method="post">

                        <div class="mt-5">
                            <label for="" class="uppercase">After How Many days you will return the book:</label>

                            <input type="text" name="daysToAdd" id="HowManyDays" class="w-full h-14 rounded-xl border border-orange-500">
                            
                        </div>
                        <input type="submit" onclick="popup()" name="booking" value="Create Booking" class="w-full rounded-2xl uppercase bg-orange-500 mt-5 h-20 p-5  hover:text-white hover:text-lg transition-all">
                    </form>
                </div>
                <div class="h-fit w-fit absolute top-1/2 left-[50rem] bg-white p-10 text-center border border-orange-100 shadow-2xl" id="popupmsg">
            <h1 class="text-xl text-orange-500 text-center font-semibold">Booking Placed</h1>
            <h1 class="text-4xl font-bold">Your Token Number</h1>
            <h1 class="text-4xl text-orange-600 font-bold">' . $token . '</h1>
            <h1 class="text-xs">Show this to librarian while borrowing the book</h1>
            <button class="mt-4 text-orange-500" onclick="closebtn()" id="cls">close</button>
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

<?php
if (isset($_POST["bookingSuccess"])) {
    session_start();
    $_SESSION["bookingSuccess"] = true;
    header("Location: index.php");
    exit();
}
?>