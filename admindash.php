<?php
session_start();
if($_SESSION['uid']) {
    echo "";
} else {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head> <title> Employee App </title>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
             <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
             <style>
                 h1 {
                    font-family: 'Merriweather', serif;
                    text-align:center;
                    align-items:center;
                 }
                 .add {
	                background-color:brown;
	                color:white !important;
	                font-size:30px;
                }

                .display{
	            background-color:lightgreen;
                color:white !important;
                font-size:30px;	  
                }
                .update{
                    background-color:blue;
                    color:white !important;
                    font-size:30px;	  
                }
                .delete{
                    background-color:orange;
                    color:white !important;
                    font-size:30px;
                }
                .logout {
                    margin-left:1000px;
                    font-size:20px;
                    background-color:lightgreen;
                    color:white !important;
                    padding:12px;
                    border-radius:20px;
                }
                a {
                    text-align:center;
                    align-items:center;
                    text-decoration:none;
                }
                a:hover{
                    background-color:black !important;
                }
             </style>
</head>
<body>
<div class="container">
<a href="logout.php" class="logout"> Logout </a>
<h1> Which operation do you want to perform </h1> 
<div class="list-group">
                <a href="add.php" class="list-group-item add">Add Details of an Employee </a><br><br>
                <a href="edit.php" class="list-group-item update">Edit Details of an Employee</a><br><br>
                <a href="delete.php" class="list-group-item delete">Delete Entry of an Employee </a><br><br>
            </div>
</div>            
</body>
</html>