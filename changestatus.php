<?php
require 'dbmsConfig.php';




    $Token = $_GET["Token"];
    $Q = mysqli_query($conn, "UPDATE librarybookbooking SET Status ='Gave Back' WHERE Token = '$Token'");
    header('Location:LibrarianDashboard.php');
    

?>