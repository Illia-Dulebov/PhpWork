<!DOCTYPE html>
<html lang="ukr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Strong Fit</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
</head>
<body>
   <?php
   require "parts/Head.php";
   if (!empty($_GET["page"])) {
       $page = $_GET["page"];
       $page = strip_tags($page);
       $page = trim($page);
       $page = str_replace("/", "", $page);
   }
   else {
       $page = "LandMain";
   }
   require "parts/$page.php";
   require "parts/Foot.php";
   ?>
</body>
</html>