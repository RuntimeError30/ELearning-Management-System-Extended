<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com
"></script>
    <link href="https://fonts.maateen.me/charukola-ultra-light/font.css
" rel="stylesheet">
<link rel="icon" href="Images and logo/logo4.png">
    <title>E Library</title>
</head>
  <body>
    <div class="bg-white">

    <div>
      <?php
      require 'dbmsConfig.php';






      $BookID = $_GET['BookID'];

      $sql="SELECT * FROM librarybooks WHERE bookID= '$BookID'";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="folder2/<?php echo $info["PDF"]; ?>" width="1920" height="1080">
    <?php
      }

      ?>

    </div>
    </div>
    

  </body>
</html>