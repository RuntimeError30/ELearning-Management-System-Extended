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

//Generel Settings

if (isset($_POST["generelBtn"])) {
    $Mobile = $_POST['Mobile'];
    $updateQuery = mysqli_query($conn, "UPDATE facultytab SET Mobile = '$Mobile' WHERE ID = '$ID'");
}


//Password Change Section

if (isset($_POST["PasswordChange"])) {
    $Password = $row['Password'];
    $OldPass = $_POST['OldPassword'];
    $NewPassword = $_POST['NewPassword'];
    $ReTypeNewPassword = $_POST['RetypeNewPassword'];


    if(($Password==$OldPass) && ($NewPassword == $ReTypeNewPassword)){
        $updateQuery = mysqli_query($conn, "UPDATE facultytab SET `Password` = '$NewPassword' WHERE StudentID = '$StudentID'");
    }

}


// PROFILE PICTURE
if (isset($_POST["ProfilePic"])) {
    $uploadDir = 'folder2/';
    $propicPath = $uploadDir . basename($_FILES['Propic']['name']);

    if (empty($row['profilePictureSection'])) {

        $insertQuery = mysqli_query($conn, "UPDATE facultytab SET profilePicture= '$propicPath' WHERE ID = '$ID'");
    } else {

        $updateQuery = mysqli_query($conn, "UPDATE facultytab SET profilePicture= '$propicPath' WHERE ID = '$ID'");
    }

    if (move_uploaded_file($_FILES['Propic']['tmp_name'], $propicPath)) {
        // Image uploaded successfully
    } else {
        // Handle upload error
        echo "Error uploading image.";
    }
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

.typewriter{
  color: #fff;
  width: fit-content;
  overflow: hidden; 

  white-space: nowrap; 
  margin: 0 px; 
  animation: 
    typing 4.5s steps(100, end),
    blink-caret .1s step-end infinite;
}


@keyframes typing {
  from { width: 0% }
  to { width: 200% }
}


@keyframes blink-caret {
  from, to { border-color: transparent }
    100% { border-color: orange }
}





/*  */

.progress-bar {
  position: relative;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background-color: #e0e0e0;
  overflow: hidden;
}

.progress-bar__fill {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #4caf50;
  transform-origin: center center;
  animation: progress-animation 2s linear forwards;
}

@keyframes progress-animation {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.progress-bar__text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 24px;
  color: #000;
}






/*  */












.logo-1 {


  color: #fff;
 
  text-shadow: 0 0 50px #fff, 
  0 0px 20px #fff, 
  110px 0 90px #E55523, 
  90px 0 40px #E55523,
  100px 0 70px #E55523;

}



    </style>
    <title>Dashboard | eLearning Management System Extended</title>
</head>
<!-- background: linear-gradient(-45deg, #21176c95,#9d4ef86d,#e07726df); -->
<!-- #E55523 -->
<body class=" text-white " style="background: url('IMGS/doodle.jpg');"  >
    <div class="w-full h-full " >

        <div class="flex h-full w-full" >
            <div class="grid mt-96  w-fit h-fit shadow-xl  ml-5 rounded-xl " style="background:  #00000090;
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);">
                <ul class=" w-fit  h-fit ">



                <a href="stdDashboard.php">
                <li class="mt-2 flex border-r border-r-orange-600 w-full px-5 pt-4 pb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6 transition-all hover:text-orange-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                          </svg>
                          
                        <h1 class="text-sm ml-2 hidden">Dashboard</h1>
                    </li>
                </a>




                <a href="privateFiles.php">
                <li class="mt-4 flex px-5 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                         h-6 hover:text-orange-600 transition-all">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13.5H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                          </svg>
                          
                          
                        <h1 class="text-sm ml-2 hidden">Private Files</h1>
                    </li>
                </a>



                <a href="calander.php">
                <li class="mt-4 flex px-5 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                         h-6 hover:text-orange-600 transition-all">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                          </svg>
                          
                          
                          
                        <h1 class="text-sm ml-2 hidden">Calender</h1>
                    </li>
                </a>






                <a href="logout.php">
                <li class="mt-4 flex px-5 pt-3 pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>

                          
                          
                          
                          
                        <h1 class="text-sm ml-2 hidden">My Courses</h1>
                    </li>
                </a>
                </ul>
    
                
            </div>

    
            <div class=" ml-10 h-full w-full mr-10">
                <div class="flex justify-between mt-10 p-5  rounded-2xl h-fit w-full" style="background: #00000090">
                    <div class="w-32">
                        <img src="IMGS/lmslogo.png" class="w-32" alt="">
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
                        <button class="mr-10">
                        <div class="flex">
                                <?php
                                    if ($row["profilePicture"] != null) {
        
                                        echo '<img src="' .$row["profilePicture"] . '" alt="Profile Picture" class="w-10 h-10 rounded-full">';
                                    } else {

                                         echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">\<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>';
                                    }
                                ?>
                                <h1 class="mt-2 ml-1">
                                <?php
                                    echo $row["ID"];
                                ?>
                                </h1>
    
                            </div>

                        </button>
                        <div>
                            
                        </div>
                    </div>

                </div>
                

                <div class=" flex w-full h-full overflow-scroll ">
                
                    


                    <div class="flex flex-col w-96 h-full mt-20 ml-5 mb-20 mr-10 rounded-2xl shadow-xl bg-orange-500">
                        <div class="w-full h-[66rem] p-5  mb-6"  >
                            <h1 class="text-xs pl-5 tracking-wide mb-12">YOUR INFORMATION</h1>
                            <div class=" justify-between pl-5">
                                <div class="">
                                    <img src="IMGS/me.jpg" class="w-72 rounded-full" alt="" >
                                    <form action="propicChange.php" method="post">



                                            <?php
                                                if ($row["profilePicture"] != null) {
        
                                                    echo '<img src="' . $row["profilePicture"] . '" alt="Profile Picture" class="w-72 rounded-xl">';
                                                } else {

                                                echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">\<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>';
                                                }
                                            ?>
                                        
                                    </form>
                                </div>
                                <div class="mt-20">
                                    <h1 class="typewriter text-3xl uppercase"><?php echo $row["Name"]; ?></h1>
                                    <h1 class="text-xs uppercase"><?php echo $row["ID"]; ?></h1>
                                    <h1 class="text-xs uppercase mt-2"><?php echo $row["Department"]; ?></h1>
                                    <h1 class="text-sm mt-2 uppercase"><?php echo $row["Email"]; ?></h1>
                                    <h1 class="text-sm  uppercase"><?php echo $row["Mobile"]; ?></h1>

                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="flex flex-col w-[80rem] h-fit mt-20 ml-5 mb-20 mr-10 text-orange-500 bg-[#ffffff] shadow-xl rounded-2xl">
                        <h1 class="text-xs pl-5 mt-5 tracking-wide mb-12">PROFILE SETTINGS</h1>
                        <div class="w-full h-fit p-5   mb-6"  >
                            <button class="flex"><h1 class="uppercase text-xl">General Settings</h1></button>

                            <div class="" id="">
                                <form action="" method="post" >

                                    <div class="flex">

                                        <div class="w-full mr-5 mt-5 ">
                                            <label for="" class="text-gray-900"> Name</label>
                                            <input type="text" name="Stdname" id="" placeholder="<?php echo $row["Name"]; ?>" class=" w-full p-3 border border-orange-500  rounded-xl bg-transparent" disabled >
                                        </div>


                                        <div class="w-full mr-5 mt-5 ">
                                            <label for="" class="text-gray-900"> ID</label>
                                            <input type="text" name="ID" id="" placeholder="<?php echo $row["ID"]; ?>" class=" w-full p-3 border border-orange-500  rounded-xl bg-transparent" disabled >
                                        </div>
                                    </div>

                                    <div class="flex">

                                        <div class="w-full mr-5 mt-5 ">
                                            <label for="" class="text-gray-900">Email</label>
                                            <input type="text" name="Email" id="" placeholder="<?php echo $row["Email"]; ?>" class=" w-full p-3 border border-orange-500  rounded-xl bg-transparent" disabled >
                                        </div>


                                        <div class="w-full mr-5 mt-5 ">
                                            <label for="" class="text-gray-900">Mobile Number</label>
                                            <input type="text" name="Mobile" id="" placeholder="<?php echo $row["Mobile"]; ?>" class="text-gray-950 w-full p-3 border border-orange-500  rounded-xl bg-transparent" >
                                        </div>
                                    </div>

                                    <input type="submit" name="generelBtn" value="Save Changes" class="mt-2 w-56 rounded-xl  h-fit border p-4 bg-orange-500 text-white uppercase hover:shadow-xl transition-all">
                                </form>




                            </div>
                            

                        </div>





                        <div class="w-full h-fit p-5   mb-6"  >
                            <button class="flex"><h1 class="uppercase text-xl">Change Password</h1></button>

                            <div class="" id="">
                                <form action="" method="post" >

                                    <div class="flex">

                                        <div class="w-full mr-5 mt-5 ">
                                            <label for="" class="text-gray-900">Current Password</label>
                                            <input type="password" name="OldPassword" id=""  class=" w-full p-3 border border-orange-500  rounded-xl bg-transparent" >
                                        </div>
                                    </div>

                                    <div class="flex">


                                        <div class="w-full mr-5 mt-5 ">
                                            <label for="" class="text-gray-900">New Password</label>
                                            <input type="password" name="NewPassword" id=""  class="text-gray-950 w-full p-3 border border-orange-500  rounded-xl bg-transparent" >
                                        </div>
                                    </div>

                                    <div class="flex">


                                        <div class="w-full mr-5 mt-5 ">
                                            <label for="" class="text-gray-900">Re-Type New Password</label>
                                            <input type="password" name="RetypeNewPassword" id=""  class="text-gray-950 w-full p-3 border border-orange-500  rounded-xl bg-transparent" >
                                        </div>
                                    </div>


                                    <input type="submit" name="PasswordChange" value="Save Changes" class="mt-2 w-56 rounded-xl  h-fit border p-4 bg-orange-500 text-white uppercase hover:shadow-xl transition-all">
                                </form>




                            </div>
                            

                        </div>











                        <div class="w-full h-fit p-5   mb-6"  >
                            <button class="flex"><h1 class="uppercase text-xl">Change Profile Picture</h1></button>

                            <div class="" id="">
                                <form action="" method="post" enctype="multipart/form-data">


                                    <div class="flex">


                                        <div class="w-full mr-5 mt-5 ">
                                            <label for="" class="text-gray-900">Upload or change your profile picture here</label>
                                            <input type="file" name="Propic" id="">
                                        </div>
                                    </div>


                                    <input type="submit" name="ProfilePic" value="Save Changes" class="mt-2 w-56 rounded-xl  h-fit border p-4 bg-orange-500 text-white uppercase hover:shadow-xl transition-all">
                                </form>




                            </div>
                            

                        </div>
                    </div>




                    
                    

                    
                </div>
                
                
            </div>
            
            

        </div>
        <footer class="mt-10 bg-orange-500 text-white h-80">
            <div class="  relative top-20 w-full grid align-middle justify-center">
                <h1 class="uppercase text-lg">Made by</h1>
                <img src="IMGS/teamlogo.png" class="w-96" alt="">
            </div>
        </footer>


    </div>


    
    
<script>
    function setProgress(percent) {
  const fill = document.querySelector('.progress-bar__fill');
  const text = document.querySelector('.progress-bar__text');

  fill.style.transform = `rotate(${percent * 3.6}deg)`; // 3.6 degrees per percent
  text.textContent = `${percent}%`;
}

// Example usage: setProgress(75);

</script>





</body>
</html>