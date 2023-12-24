<?php
require 'dbmsConfig.php';
if(isset($_POST['Upload']))
{


    $thumb = $_FILES["thumb"]["tmp_name"];
    $ThumbName =  $_FILES["thumb"]["name"];

    $Productname = $_POST["name"];
    $Category = $_POST["Category"];
    $Price = $_POST["Price"];
    $description = $_POST["Description"];


    

    $thumbtarget = 'folder2/'.$ThumbName;
    move_uploaded_file($thumb, $thumbtarget);

    

    $shortUniqueId = substr(uniqid(), 0, 8);

    $uploadQ = mysqli_query($conn,"INSERT INTO bookshop VALUES('$Productname', '$Category','$shortUniqueId', '$Price','$description','$ThumbName')"); 




}
$sq = "SELECT COUNT(*) AS completedcount FROM librarybooks";

// Total Books
$resd = $conn->query($sq);

if ($resd !== false && $resd->num_rows > 0) {
    $rowd = $resd->fetch_assoc();
    $completed_count = $rowd["completedcount"];
} else {
    $completed_count = 0;
}


//Borrowed Books
$boro = 'Pending';
$sq2 = "SELECT COUNT(*) AS borrowed FROM librarybookbooking WHERE Status = '$boro'";
$resd2 = $conn->query($sq2);

if ($resd2 !== false && $resd2->num_rows > 0) {
    $rowd2 = $resd2->fetch_assoc();
    $completed_count2 = $rowd2["borrowed"];
} else {
    $completed_count2 = 0;
}

//Returned Books 
$boro1 = 'Gave Back';
$sq3 = "SELECT COUNT(*) AS borrowed FROM librarybookbooking WHERE Status = '$boro1'";
$resd3 = $conn->query($sq3);

if ($resd3 !== false && $resd3->num_rows > 0) {
    $rowd3 = $resd3->fetch_assoc();
    $completed_count3 = $rowd3["borrowed"];
} else {
    $completed_count3 = 0;
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
        <div class="grid mt-96  w-fit h-fit shadow-xl  ml-5 rounded-xl " style="background:  #00000090;">
            <ul class=" w-fit  h-fit ">
                <li class="mt-2 flex border-r border-r-orange-600 w-full px-5 pt-4 pb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-6 h-6 transition-all hover:text-orange-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                      </svg>
                      
                    <h1 class="text-sm ml-2 text-white">Dashboard</h1>
                </li>

                <li class="mt-4 flex px-5 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                      </svg>
                      
                      
                      
                      
                    <h1 class="text-sm ml-2 text-white">Settings</h1>
                </li>

                <li class="mt-4 flex px-5 pt-3 pb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                      </svg>
                      
                    <h1 class="text-sm ml-2 text-white">Logout</h1>
                </li>
            </ul>

            
        </div>

        <div class="w-full h-full mr-20 grid">
            <div class="flex justify-between mt-10 p-5 ml-5 rounded-2xl h-fit w-full" style="background: #00000090">
                <div class="w-full flex">
                    <img src="IMGS/lmslogo.png" class="w-28 scale-125" alt="">
                    <h1 class="text-2xl mt-12 ml-3 uppercase text-white">UIU BOOKSHOP </h1>
                </div>

                <div class="flex ">
                    <h1 class="text-3xl mt-6 ml-3 text-right uppercase text-white">DASHBOARD HOME </h1>
                    
                </div>

            </div>

            <div class="ml-5 mt-10 w-full flex">
                <div class="grid w-1/3 bg-white p-5 border-orange-500 border rounded-xl shadow-xl">
                    <h1 class="text-sm text-right uppercase text-orange-500">Total Order</h1>
                    <h1 class="text-2xl font-semibold text-right"><?php echo $completed_count; ?></h1>

                </div>

                <div class="grid ml-3 w-1/3 bg-white p-5 border-orange-500 border rounded-xl shadow-xl">
                    <h1 class="text-sm text-right uppercase text-orange-500">Delivered</h1>
                    <h1 class="text-2xl font-semibold text-right"><?php echo $completed_count2; ?></h1>

                </div> 

                <div class="grid ml-3 w-1/3 bg-white p-5 border-orange-500 border rounded-xl shadow-xl">
                    <h1 class="text-sm text-right uppercase text-orange-500">NEW ORDER</h1>
                    <h1 class="text-2xl font-semibold text-right"><?php echo $completed_count3; ?></h1>

                </div> 
                
            </div>


            <div class="ml-5 mt-10 w-full flex">
                <div class=" w-full bg-white p-5 border-orange-500 border rounded-xl shadow-xl">
                    <h1 class="text-sm font-semibold text-right uppercase">Add Book to the library</h1>
 
                    <form action="" method="post" enctype="multipart/form-data" class="w-full h-fit">
                        <div class="w-full h-fit mt-5 flex ">

                            <div class="grid w-1/2 h-fit">
                                <label for="" class="uppercase text-sm">PRODUCT NAME</label>
                                <input type="text" class="p-2 border border-orange-500 rounded-lg " name="name" id="">
                            </div>

                            <div class="grid w-1/2 h-fit ml-2">
                                <label for="" class="uppercase text-sm">PRICE</label>
                                <input type="text" class="p-2 border border-orange-500 rounded-lg " name="Price" id="">
                            </div>
                            

                        </div>

                        <div class="w-full h-fit mt-5 flex ">

                            <div class="grid w-1/2 h-fit">
                                <label for="" class="uppercase text-sm">CATEGORY</label>
                                <select name="Category" class="border border-orange-500 rounded-lg h-10" id="">
                                    <option value="">Select Category</option>
                                    <option value="STATIONARIES">STATIONARIES</option>
                                    <option value="BOOKS">BOOKS</option>
   
                                </select>
                            </div>


                            <div class="grid ml-2 w-1/2 h-fit ">
                                <label for="" class="uppercase text-sm">Upload Product Picture Here</label>


                                <input type="file" class="p-2 border border-orange-500 rounded-lg file:hidden" name="thumb">
                            </div>

                            
                        </div>

                        <div class="w-full h-fit mt-5 flex ">

                            <div class="grid w-full h-fit">
                                <label for="" class="uppercase text-sm">Description</label>
                                <textarea name="Description" id="" cols="200" rows="10"  class="p-2 border border-orange-500 rounded-lg "></textarea>
                            </div>



                        </div>


                        

                        <input type="submit" value="Upload" id="Upload" name="Upload" class="w-56 rounded-xl uppercase bg-orange-500 mt-5 h-16 hover:text-white hover:text-lg transition-all" >




                    </form>



                    

                </div>
                
            </div>


            <div class="ml-5 mt-10 w-full bg-white p-5  border border-orange-500 rounded-xl shadow-2xl mb-20">
                <h1 class="text-sm mb-10  uppercase">All Orders</h1>
                <table>
                    <thead class="border  border-1 p-5">
                        <th  class="ml-5 border border-black px-8 py-2" >Name</th>
                        <th class="ml-5 border border-black px-5 py-2" >ID</th>
                        <th class="ml-5 border border-black px-5 py-2" >Mobile</th>
                        <th class="ml-5 border border-black px-5 py-2" >Product</th>
                        <th class="ml-5 border border-black px-5 py-2" >Price</th>
                        <th class="ml-5 border border-black px-5 py-2" >Quantity</th>
                        <th class="ml-5 border border-black px-5 py-2" >ProductID</th>
                        <th class="ml-5 border border-black px-5 py-2" >Delivery Time</th>
                    </thead>


                    <tbody>
                    <?php
                        $query1 = "SELECT * FROM bookshoporders";
                        $result = $conn->query($query1);



                   
                        while($row = $result->fetch_assoc()){


                        ?>
                        <tr>
                            <td class="border border-black px-5 py-6"><?php echo $row['Name']?> </td>
                            <td class="border border-black px-5 py-6"><?php echo $row['ID']?> </td>
                            <td class="border border-black px-5 py-6"><?php echo $row['Mobile']?> </td>
                            <td class="border border-black px-5 py-6"><?php echo $row['OrderedProduct']?> </td>
                            <td class="border border-black px-5 py-6"><?php echo $row['Price']?> </td>
                            <td class="border border-black px-5 py-6"><?php echo $row['Quantity']?> </td>
                            <td class="border border-black px-5 py-6"><?php echo $row['ProdID']?> </td>
                            
                            <td class="border border-black px-5 py-6"><?php echo $row['TimeGap']?> </td>

                           

                            
                        </tr>
                    <?php
                    }
                    ?>


                        

                    </tbody>
                </table>
                
    
    
            </div>



            <div class="ml-5 mt-10 w-full bg-white p-5  border border-orange-500 rounded-xl shadow-2xl mb-20">
                <h1 class="text-sm mb-10  uppercase">Recently added items</h1>
                <table>
                    <thead class="border  border-1 p-5">
                        <th  class="ml-5 border border-black px-8 py-2" >Product Image</th>
                        <th  class="ml-5 border border-black px-8 py-2" >Product Name</th>
                        <th  class="ml-5 border border-black px-8 py-2" >Product ID</th>
                        <th class="ml-5 border border-black px-5 py-2" >Category</th>
                        <th class="ml-5 border border-black px-5 py-2" >Price</th>
                        <th class="ml-5 border border-black px-5 py-2" >Description</th>

                    </thead>


                    <tbody>
                    <?php
                        $query1 = "SELECT * FROM bookshop";
                        $result = $conn->query($query1);

                   
                        while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                        <td class="border border-black px-16 py-6">
   
                            <img src="folder2/<?php echo $row['pic']; ?>" width="100">
                            <td class="border border-black px-16 py-6"><?php echo $row['Productname']?> </td>
                            <td class="border border-black px-16 py-6"><?php echo $row['productID']?> </td>
                            <td class="border border-black px-16 py-6"><?php echo $row['Category']?> </td>
                            <td class="border border-black px-16 py-6"><?php echo $row['Price']?> </td>
                            <td class="border border-black px-16 py-6"><?php echo $row['description']?> </td>

                            
                        </tr>
                    <?php
                    }
                    ?>


                        

                    </tbody>
                </table>
                
    
    
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









