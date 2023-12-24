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

                          
                          
                          
                          
                        <h1 class="text-sm ml-2 hidden">Logout</h1>
                    </li>
                </a>
                </ul>
    
                
            </div>
            <!-- shadow-2xl shadow-[#fe4f14cc] -->
    
            <div class=" ml-10 h-full w-full mr-10">
                <div class="flex justify-between mt-10 p-5  rounded-2xl h-fit w-full" style="background: #00000090">
                    <div class="w-32 flex">
                        <img src="IMGS/lmslogo.png" class="w-32" alt="">
                        
                    </div>

                    <div class="flex">
                        <button class="mr-10 ">
                            <h1 class="text-sm hover:text-orange-500 hover:font-semibold transition-all uppercase text-stone-100">chat</h1>

                        </button>

                        <a href="BookShopMain.php" class="mr-10 mt-14">
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
                

                <div class="fixed flex w-full h-full overflow-scroll">
                    <div class=" overflow-scroll mt-20 p-5 rounded-2xl h-5/6 w-1/2 bg-[#00000090]">
                        <h1 class="text-xs pl-5  tracking-wide">YOUR COURSES</h1>
                        <div class=" flex flex-col p-5 w-full h-full ">
                        <?php


                            $stdid = $row['StudentID'];
                            $query1 = "SELECT * FROM studentcoursetab WHERE ID = '$stdid'";
                            $r = $conn->query($query1);
                            
                            while($CourseRow = $r->fetch_assoc()){
                            ?>
                            <div class="border border-[#E55523]  w-full  shadow-2xl mt-5  h-fit p-5 rounded-xl" style="background: #00000090;">
                                <a href="courseDetailsmain.php?coursename=<?php echo urlencode($CourseRow["CourseName"]); ?>&trimester=<?php echo urlencode($CourseRow["Trimester"]); ?>&coursecode=<?php echo urlencode($CourseRow["CourseCode"]);?>&section=<?php echo urlencode($CourseRow["Section"]); ?>&Department=<?php echo urlencode($CourseRow["Department"]);?>" class="w-full">
                                    <div class="">
                                        <h1 class=" text-xs" ><?php echo $CourseRow["Department"]; ?></h1>
                                    
                                        <h1 class="logo-1 font-bold text-lg mt-5"><?php echo $CourseRow["CourseName"]; ?></h1>
                                        <h1 class="text-sm text-stone-400">TRIMESTER: <?php echo $CourseRow["Trimester"]; ?></h1>
                                        <h1 class="text-sm text-stone-400">COURSE CODE: <?php echo $CourseRow["CourseCode"]; ?></h1>
                                        <h1 class="text-sm text-stone-400">Section: <?php echo $CourseRow["Section"]; ?></h1>
        
                                    </div>
                                </a>
                            </div>
     
                    
                            
                        <?php
                         }
                        ?>
        
        
                        
                        </div>
                        
                    
                        
                    </div>
                    <div class="flex flex-col w-2/5 h-full mt-20 ml-5 mb-20 mr-10">
                        <div class="w-full h-fit p-5 rounded-2xl  bg-[#00000090] mb-6"  >
                            <h1 class="text-xs pl-5 tracking-wide mb-12">YOUR INFORMATION</h1>
                            <div class="flex justify-between pl-5">
                                <div class="mt-20">
                                    <h1 class="typewriter text-3xl uppercase"><?php echo $row["StudentName"]; ?></h1>
                                    <h1 class="text-xs uppercase"><?php echo $row["StudentID"]; ?></h1>
                                    <h1 class="text-xs uppercase mt-2">Department of <?php echo $row["Department"]; ?></h1>
                                    <h1 class="text-sm mt-2 uppercase"><?php echo $row["DOB"]; ?></h1>
                                    <h1 class="text-sm uppercase"><?php echo $row["Mobile Number"]; ?></h1>

                                </div>

                                <div class="w-72">
                                <?php
                                    if ($row["profilePictureSection"] != null) {
        
                                        echo '<img src="' . $row["profilePictureSection"] . '" alt="Profile Picture" class="w-52 rounded-xl">';
                                    } else {

                                         echo '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">\<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>';
                                    }
                                ?>
                                </div>

                            </div>
                        </div>





                        <div class=" p-5 rounded-2xl h-ful w-full  bg-[#141416]">
                            <h1 class="text-xs pl-5 tracking-wide mb-12">ACTIVITY & PROGRESS</h1>
    
                            <div class="flex flex-col">

    
                                <div class="mt-5 mb-5">
                                    
                                    <div class="w-full px-5  lg:w-5/12">
                                        <h1 class="text-xs">WEB PROGRAMMING</h1>
                                        <div class="mb-12">
                                          <div class="bg-white relative h-[2px] w-[500px] rounded-2xl">
                                            <div class="bg-orange-500 absolute top-0 left-0 h-full w-1/2 rounded-2xl">
                                              <span
                                                class="bg-primary absolute -right-4 bottom-full mb-2 rounded-sm py-1 px-2 text-xs font-semibold text-white">
        
                                            </span>50%</span>
                                            </div>
                                          </div>
                                    </div>
                                </div>
    
    
                                <div class="mt-5 mb-5">
                                    
                                    <div class="w-full px-5  lg:w-5/12">
                                        <h1 class="text-xs">ARTIFICIAL INTELLIGENCE</h1>
                                        <div class="mb-12">
                                          <div class="bg-white relative h-[2px] w-[500px] rounded-2xl">
                                            <div class="bg-orange-500 absolute top-0 left-0 h-full w-[75%] rounded-2xl">
                                              <span
                                                class="bg-primary absolute -right-4 bottom-full mb-2 rounded-sm py-1 px-2 text-xs font-semibold text-white">
        
                                            </span>75%</span>
                                            </div>
                                          </div>
                                    </div>
                                </div>
    
                                <div class="mt-5 mb-5">
                                    
                                    <div class="w-full px-5  lg:w-5/12">
                                        <h1 class="text-xs">DATA STRUCTURES & ALGORITHMS II</h1>
                                        <div class="mb-12">
                                          <div class="bg-white relative h-[2px] w-[500px] rounded-2xl">
                                            <div class="bg-orange-500 absolute top-0 left-0 h-full w-[100%] rounded-2xl">
                                              <span
                                                class="bg-primary absolute -right-4 bottom-full mb-2 rounded-sm py-1 px-2 text-xs font-semibold text-white">
        
                                            </span>100%</span>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                
                                <div class="mt-5 mb-5">
                                    
                                    <div class="w-full px-5  lg:w-5/12">
                                        <h1 class="text-xs uppercase">Probablity and Statistics</h1>
                                        <div class="">
                                          <div class="bg-white relative h-[2px] w-[500px] rounded-2xl">
                                            <div class="bg-orange-500 absolute top-0 left-0 h-full w-[%] rounded-2xl">
                                              <span
                                                class="bg-primary absolute -right-4 bottom-full mb-2 rounded-sm py-1 px-2 text-xs font-semibold text-white">
        
                                            </span>10%</span>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                  
                                  
                                  
                                
                            </div>
                        </div>

                    </div>
                    
                    

                    
                </div>
                
            </div>
            

        </div>



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











<!-- <?php


$stdid = $row['StudentID'];
                    
$query1 = "SELECT * FROM studentcoursetab WHERE ID = '$stdid'";
$r = $conn->query($query1);

                   
 while($CourseRow = $r->fetch_assoc()){
     ?>
     <div class="border border-[#E55523]  w-full  shadow-2xl mt-5  h-fit p-5 rounded-xl" style="background: #00000090;">
                                <a href="" class="w-full">
                                    <div class="">
                                        <h1 class=" text-xs" ><?php echo CourseRow[" CourseName"]; ?></h1>
                                    
                                        <h1 class="logo-1 font-bold text-lg mt-5">WEB PROGRAMMING</h1>
                                        <h1 class="text-sm text-stone-400">TRIMESTER: SUMMER 2023</h1>
                                        <h1 class="text-sm text-stone-400">COURSE CODE: Summer 2023</h1>
                                        <h1 class="text-sm text-stone-400">Section: B</h1>
        
                                    </div>
                                </a>
                            </div>
     
                    
                            
     <?php
        }
    ?> -->
                    