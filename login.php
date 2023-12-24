<?php
require 'dbmsConfig.php';



    if(!empty($_SESSION["StudentID"])){
        header("login.php");
      }
    if(isset($_POST["submit"]))
    {

        $StudentID = $_POST["StudentID"];
        $Password = $_POST["Password"];

      

        if(preg_match('/^[A-Za-z]+$/', $StudentID)) {

        
            $result =  mysqli_query($conn, "SELECT * FROM facultytab WHERE ID = '$StudentID'");
            $row = mysqli_fetch_assoc($result);
        
            if(mysqli_num_rows($result)>0){
                if($Password == $row["Password"]){
        
                $_SESSION["login"] = true;
                $_SESSION["ID"] = $row["ID"];
                header("Location: TeachersDashboard.php");
                }
                else{
                    echo "Wrong Password";
                }
                
            }
            else{
                echo "User not registered";
            }
        } 





    if(is_numeric($StudentID)) {

    
        $result =  mysqli_query($conn, "SELECT * FROM logininfo WHERE StudentID = '$StudentID'");
        $row = mysqli_fetch_assoc($result);
    
        if(mysqli_num_rows($result)>0){
            if($Password == $row["Password"]){
    
            $_SESSION["login"] = true;
            $_SESSION["StudentID"] = $row["StudentID"];
            header("Location: stdDashboard.php");
            }
            else{
                echo "Wrong Password";
            }
            
        }
        else{
            echo "User not registered";
        }
    } 




    
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="IMGS/lmslogo.png" type="image/x-icon">

    <style>
        body{
            font-family: 'Montserrat', sans-serif;
        }
        #loginBody{
            background-image: url('IMGS/calc.png');
            background-size: 110px;
            background-repeat: no-repeat;
            background-position-x: left;
;
            
        }
    </style>




    <title>UIU eLearning Management System Extended</title>
</head>
<body class="bg-[#ececec]" >
    <div class="w-full h-full ">
        <div class="flex justify-center mt-10 scale-90">
            <div class=" ">
                <img src="IMGS/UIU.png" alt="" class="w-28  mt-16 bg-white rounded-full">
            </div>
            <img src="IMGS/lmslogo.png" alt="" class="w-56 ">
        </div>
        <div class="w-full flex justify-center mt-4">
            <div class=" bg-[#ff8001]  text-white p-20 rounded-l-xl shadow-2xl" id="loginBody">
                
                <h1 class="text-2xl ">UIU eLearning Management System <br> <label class="font-semibold">EXTENDED</label></h1><br>
                <h1 class="text-sm">Extended Features</h1>

                <div class="flex mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                      </svg>
                      <h1 class="">Emergency Button</h1>
                </div>

                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                      </svg>
                      
                    <h1>Conference System</h1>
                </div>


                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                      </svg>
                      
                      
                    <h1>Library Facilities</h1>
                </div>


                <div class="flex mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                      
                      
                    <h1>Bookshop Facilities</h1>
                </div>
                
            </div>


            <div class="bg-white grid rounded-r-xl shadow-2xl">

                <div class="pt-20 pl-5 pr-20">
                    <h1 class=" text-2xl font-mediu">Already Have an Account?</h1>
                    <form action="" method="POST"  class="mt-10">

                        <div class="mt-5 w-full flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                              
                              <input type="text" name="StudentID" id="" class="border w-full ml-1 p-0.5 rounded-md">
                              
                        </div>
                        <div class="mt-5 w-full flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-orange-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                              </svg>
                              
                              
                              <input type="password" name="Password" id="" class="border w-full ml-1 p-0.5 rounded-md">
                              
                        </div>
                        <div class="mt-5 flex">
                            <input type="checkbox" name="Remember me" id="">
                            <label for="" class="ml-1 text-sm font-medium">Remember username </label>
                        </div>

                        <div class="flex justify-center mt-5"  >
                            <input type="submit" name="submit" value="Login" class="border w-full bg-[#ff8001] text-white rounded-lg p-2 hover:bg-[#ff860eea] focus:bg-[#ff860eea]"></div>
                    </form>
                </div>


            </div>
            
        </div>
    </div>
</body>
</html>