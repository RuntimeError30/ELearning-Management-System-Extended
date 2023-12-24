
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











if(isset($_POST["submit"])) {
    $filess = $_FILES["privateFiles"]["tmp_name"];
    $FileName = $_FILES["privateFiles"]["name"];

    $target = 'folder2/' . $FileName;
    move_uploaded_file($filess, $target);

    $fileNameOnly = basename($target); // Extract the file name

    $uploadQ = mysqli_query($conn, "INSERT INTO studentprivatefiles VALUES ('$StudentID', '$fileNameOnly')"); 
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
<body style="background: url('IMGS/doodle.jpg');">
    <div class="h-full w-full flex" >
    <div class="grid mt-96  w-fit h-fit shadow-xl  ml-5 rounded-xl " style="background:  #00000090;
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);">
                <ul class=" w-fit  h-fit ">
                    <li class="mt-2 flex border-r border-r-orange-600 w-full px-5 pt-4 pb-2">

                    <a href="stdDashboard.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6 transition-all hover:text-orange-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                          </svg>
                    </a>
                          
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

                    <a href="calander.php">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                         h-6 hover:text-orange-600 transition-all">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                    </a>
                          
                          
                          
                        <h1 class="text-sm ml-2 hidden">Calender</h1>
                    </li>

                    <a href="logout.php">
                <li class="mt-4 flex px-5 pt-3 pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>

                          
                          
                          
                          
                        <h1 class="text-sm ml-2 hidden">Logout</h1>
                    </li>
                </a>
                </ul>
    
                
            </div>

        <div class="w-full h-full mr-20 grid">
        <div class="flex justify-between mt-10 text-white p-5 ml-5 rounded-2xl h-fit w-full" style="background: #00000090">
        <div class="w-32 flex">
                        <img src="IMGS/lmslogo.png" class="w-32" alt="">
                         <h1 class="text-3xl mt-12 ml-2 border-l pl-2">PRIVATE FILES</h1>
                    </div>

                    <div class="flex">
                        <button class="mr-10 ">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">chat</h1>

                        </button>

                        <button class="mr-10 ">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">Bookshop</h1>

                        </button>
                        <button class="mr-10 ">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">Library Facilities</h1>

                        </button>
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


            <div class="bg-white p-5 shadow-xl ml-5 w-full mt-10 rounded-xl">
                <div>
                    
                <h1 class="uppercase text-sm">Your Files</h1>
                <div class="border w-full h-44 p-2 mt-10 mb-10">


                    <div class="p-5 h-40 w-full  overflow-x-scroll ">
                        <?php

                            $FilesQuery = "SELECT * FROM studentprivatefiles WHERE StudentID = '$StudentID'";
                            $FileFetch = $conn->query($FilesQuery);

                        while($FileRow = $FileFetch->fetch_assoc()){
                        ?>
                            <div class="flex w-full">
                            <a href="download.php?Fname=<?php echo urlencode($FileRow["AllFiles"]); ?>&ID=<?php echo urlencode($FileRow["StudentID"]); ?>" class="flex">

                                <h1 class="uppercase text-md w-full mb-5 font-semibold border-b"><?php echo $FileRow["AllFiles"]; ?></h1>
                            </a>


                            <a href="deleteFile.php?Fname=<?php echo urlencode($FileRow["AllFiles"]); ?>&ID=<?php echo urlencode($FileRow["StudentID"]); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            </a>
                            </div>


                        <?php
                         }
                        ?>
                    </div>
                </div>
                </div>

                <h1 class="uppercase text-sm">Upload your files here</h1>

                <div class="w-full h-fit">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="file" name="privateFiles" id="" class="mt-10 file:border-none file:w-full file:bg-orange-500 file:p-5 file:rounded-xl " >
                        <input type="submit" name="submit" value="Save" class="w-10 h-10 bg-orange-500 rounded-xl text-white hover:scale-110 shadow-xl">
                    </form>

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



