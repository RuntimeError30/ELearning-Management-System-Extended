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











if (isset($_GET["Fname"]) && isset($_GET["ID"])) {
    $fileName = $_GET["Fname"];
    $StudentID = $_GET["ID"];
    

    
    $FilesQuery = "SELECT * FROM studentprivatefiles WHERE StudentID = '$StudentID' AND AllFiles = '$fileName'";
    $FileFetch = $conn->query($FilesQuery);

    if ($FileFetch->num_rows > 0) {
        $FileRow = $FileFetch->fetch_assoc();
        $filePath = "folder2/" . $FileRow["AllFiles"];

        if (file_exists($filePath)) {
            // Delete the file from the server
            unlink($filePath);
            
            // Delete the record from the database
            $DeleteQuery = "DELETE FROM studentprivatefiles WHERE StudentID = '$StudentID' AND AllFiles = '$fileName'";
            if ($conn->query($DeleteQuery) === TRUE) {
                header("Location: privateFiles.php");
                exit();
            } else {
                echo "Error deleting file: " . $conn->error;
            }
        } else {
            echo "File not found.";
        }
    } else {
        echo "File not found.";
    }

    $conn->close();
} else {
    echo "Invalid request.";
}


?>