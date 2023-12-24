
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





if (isset($_GET["coursecode"]) && isset($_GET["coursename"]) && isset($_GET["section"]) && isset($_GET["trimester"]) && isset($_GET["Department"])) {
    $coursecode= $_GET["coursecode"];
    $coursename= $_GET["coursename"];
    $Section= $_GET["section"];
    $Trimester= $_GET["trimester"];
    $department= $_GET["Department"];


$facultyQ = mysqli_query($conn, "SELECT * FROM facultycoursetab WHERE CourseCode = '$coursecode' AND Section = '$Section'");
$facultyFetch = mysqli_fetch_assoc($facultyQ);


$ID = $facultyFetch["FacultyID"];


$facultyQ2 = mysqli_query($conn, "SELECT * FROM facultytab WHERE ID = '$ID'");
$ff = mysqli_fetch_assoc($facultyQ2);

$FName = $ff["Name"];
$FMail = $ff["Email"];


if(isset($_POST["submit"]))
{
    $message = $_POST["message"];
    $category = $_POST["category"];

    $Stdname = $row["StudentName"];
    $stdid = $_SESSION["StudentID"];



    $ComplainQ = mysqli_query($conn,"INSERT INTO courseemergencynotices VALUES('$message', '$Stdname','$stdid', '$FMail', '$coursename','$coursecode','$category','$Section')"); 
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
                        <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                         h-6 hover:text-orange-600 transition-all">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13.5H9m4.06-7.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
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

                    <li class="mt-4 flex px-5 pt-3 pb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 mt-3 
                         h-6 hover:text-orange-600 transition-all">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h1 class="text-sm ml-2 hidden">My Courses</h1>
                    </li>
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
                    <div class="mt-10 w-full shadow-[#8c483a8c] shadow-2xl rounded-xl ">
                        <div class="bg-white  p-5 rounded-xl border-orange-500">
                            <h1> <?php echo $coursecode; ?></h1>

                            <div class="flex">
                            <h1 class="text-5xl font-bold uppercase text-orange-500"><?php echo $coursename; ?></h1>
                            <br>
                            <h1 class="text-5xl font-bold uppercase text-orange-500"> (<?php echo $Section; ?>)</h1>
                            </div>
                            <h1 class="uppercase"><?php echo $Trimester; ?></h1>
                            <h1 class="uppercase"><?php echo $department; ?></h1>
                        </div>
                    </div>
    
                    <div class="mt-5 w-full flex   ">
                        <div class="shadow-[#8c483a8c] shadow-2xl bg-white w-[1/2] h-[35rem] p-5 rounded-xl border-orange-500">
                            
                            <h1 class="text-sm font-base uppercase text-orange-500">Course Contents</h1>

                            <div class="w-full h-[32rem] overflow-scroll pb-10">
                                <div class="border-t border-t-orange-500 mt-10 w-full">
                                    <h1 class="text-3xl mt-1 font-semibold text-orange-700">June 1 - June 7</h1>
                                    <h1>Dear Students, <br>
    
                                        Please welcome your new Undergraduate Instructor, Syed Eftasum Alam. You can contact him via the following email address - salam201133@bscse.uiu.ac.bd.
                                        
                                        Also, there will be an exam on recursion next class (11 June 2023). The exam will be 20 marks and it will be held for one hour.
                                        
                                        An assignment on recursion is given to you as well. The deadline for that assignment will be upto the date of the exam. There will be no postponing of the deadline, so prepare yourself beforehand.
                                        
                                        Best of luck to all of you.
                                        
                                     
                                    </h1>
    
                                    <div class="mt-4">
                                        
                                        
    
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                              </svg>
                                              <a href="" class="text-orange-500  font-semibold text-lg ml-2">Assignment 1- Recursion and Recursive Functions</a>
                                              
                                        </div>
                                        <h1>Deadline: 11 June 8:30 am
    
                                            Late submission Deadline: 15 June 8:30 am</h1>
                                    </div>
    
    
                                </div>
    
    
    
    
    
                                <div class="border-t border-t-orange-500 mt-10 w-2/3">
                                    <h1 class="text-3xl mt-1 font-semibold text-orange-700">June 8 - June 15</h1>
    
    
                                    <div class="mt-4">
                                        
                                        
    
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                              </svg>
                                              <a href="" class="text-orange-500  font-semibold text-lg ml-2">CT-01 Question</a>
                                              
                                        </div>
    
                                    </div>
    
    
                                </div>
    
    
                                <div class="border-t border-t-orange-500 mt-10 w-2/3">
                                    <h1 class="text-3xl mt-1 font-semibold text-orange-700">June 16 - June 23</h1>
    
    
                                    <div class="mt-4">
                                        
                                        
    
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                              </svg>
                                              <a href="" class="text-orange-500  font-semibold text-lg ml-2">CT-01 Question</a>
                                              
                                        </div>
    
                                    </div>
    
    
                                </div>
                            </div>
                            
                        </div>
                        

                        <div class="h-full w-full">
                        <div class="ml-10 rounded-xl  shadow-[#8c483a8c] shadow-2xl bg-white w-[70vh] h-fit p-5">
                            <h1 class="text-sm font-base uppercase text-orange-500">Faculty Profile </h1>
                            <div class="flex mt-10">
                                <img src="IMGS/avatar.png" class="w-56 h-56" alt="">

                                <div class="ml-5 mt-20">
                                    <h1 class="text-3xl uppercase font-semibold text-orange-500 "><?php echo $FName; ?></h1>
                                    <h1>Lecturer, Department of Computer Science and Engineering</h1>


                                    
                                <div class="mt-5">
                                    <h1 class="text-sm text-orange-500 uppercase font-semibold">Email</h1>
                                    <h1><?php echo $FMail; ?></h1>

                                </div>
                                </div>

                            </div>
                        </div>

                        <div class="ml-10 mt-5 bg-white w-[70vh] h-fit p-5 rounded-xl  shadow-[#8c483a8c] shadow-2xl">
                            <h1 class="text-sm font-base uppercase text-orange-500">Urgent Button </h1>
                            <button onclick="opnbtn()" class="h-36 mt-5 w-full bg-orange-500 text-white font-semibold text-xl hover:rounded-3xl hover:bg-white hover:border hover:border-orange-500 hover:text-orange-500 transition-all">URGENT</button>
                            
                        
                        </div>

                        <div class="absolute w-1/2 top-56 left-80 border border-orange-500 bg-white p-5 rounded-xl" id="formPrb">
                            <form action="" method="post" >
                                <div class="mb-6 w-full flex justify-between">
                                    <h1 class="text-sm uppercase text-orange-500"> PLEASE FILLUP THE FORM</h1>


                                    <div>


                                        <a href="javascript:void(0)" onclick="closebtn()">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        </a>

                                    </div>
                                </div>
                                <div>
                                    <div class="grid">
                                        <label for="" class="uppercase text-lg text-orange-500">Your Issue</label>
                                        <textarea name="message" class="border rounded-xl border-orange-500 resize-none p-5" id="" cols="30" rows="10"></textarea>

                                    </div>
                                    <div class="mt-2 grid">
                                        <label for="" class="uppercase text-lg text-orange-500">Send this message to</label>
                                        
                                        <select name="category" id="" class="w-full h-5 border border-orange-500 p-2 rounded-md">
                                            <option value="Wholeclass">Class</option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Students"> Students</option>
                                        </select>
                                    </div>

                                    
                                        <input type="submit" class="h-20 mt-5 w-full bg-orange-500 text-white font-semibold text-xl hover:rounded-3xl hover:bg-white hover:border hover:border-orange-500 hover:text-orange-500 transition-all" name="submit" id="submit" value="submit">
                                    


                                    </div>
                                </div>

                            </form>
                        </div>
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



    <script>
        function opnbtn(){
            document.getElementById('formPrb').style.display="block"; 
            

        }

        function closebtn(){
            document.getElementById('formPrb').style.display="none"; 

        }
    </script>
    
</body>
</html>