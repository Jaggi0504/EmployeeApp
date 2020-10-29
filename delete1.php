<?php
$id = $_GET['id'];
include "connection.php";
$qry = "SeLECT * FROM `employee` WHERE id = $id ";
$result = mysqli_query($con,$qry);
$row = mysqli_fetch_assoc($result);
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
                 </style>
</head>
<body>
<h1> Delete Entry of the Employee </h1>
<div class="container">
<form method = "post" action = "finalDelete.php">
<input type="hidden" value="<?php echo $row['id'] ?>" name = "update1">
<input type="text" placeholder="Enter name" name="ename" value="<?php echo $row['ename']?>"/>
<input type="text" placeholder="Enter position" name="eposition" value="<?php echo $row['eposition']?>"/>
<input type="text" placeholder="Enter salary" name="esalary" value="<?php echo $row['esalary']?>"/>
<input type="text" placeholder="Enter contact number" name="ephone" value="<?php echo $row['ephone'] ?>" />
<input type="submit" value="Delete" name="submit" style="font-family:'Merriweather', serif;background-color:#4de866;">
</form>
</div>
</body>
</html>

