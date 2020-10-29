<!DOCTYPE html>
<html>
    <head>
        <title> Employee App </title>
            <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <style>
                 h1 {
                    font-family: 'Merriweather', serif;
                    text-align:center;
                    align-items:center;
                 }
                 h2 {
                   font-family:'Merriweather', serif;
                 }
                 a {
                   color:white !important;
                   text-decoration:none;
                 }
                 a:hover {
                   border-radius:25px;
                 }
            </style>
    </head>
    <body>
      <div class="container">
        <nav>
            <div class="nav-wrapper">
              <a href="#" class="brand-logo center">Employee App</a>
              <ul class="left hide-on-med-and-down">
                <li><a href="login.php" class="active"> Admin Login</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
          </nav>
        <h1> Welcome to the App </h1>
        <form method="post" action="">
        <h2 style="font-size:20px;"> Search employee </h2>
        <div class="search"> 
        <input type="text" placeholder="Enter the name of the employee" name="ename" />
        <input type="submit" value="Search" name="submit" style="font-family:'Merriweather', serif;background-color:#4de866;">  
      </form>
        </div>
        </div>
    </body>    
</html>


<?php
include "connection.php";
if(isset($_POST['submit'])) {
  $ename = $_POST['ename'];
  include "function.php";
  showDetails($ename);
}
?>