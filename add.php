<?php
session_start();
if($_SESSION['uid']) {
    echo "";
} else {
    header('location:login.php');
}
?>

<!DOCTYPE HTML>
<html>
<head> <title> Employee App </title>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
            <!-- Compiled and minified CSS -->
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

             <!-- Compiled and minified JavaScript -->
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
<div class="container">
<h1> Add Details </h1>
<form method="post" action="">
<input type="text" placeholder="Enter name" name="ename" required/>
<input type="text" placeholder="Enter position" name="eposition" required/>
<input type="text" placeholder="Enter salary" name="esalary" required/>
<input type="text" placeholder="Enter contact number" name="ephone" required/>
<input type="submit" value="Add Details" name="submit" style="font-family:'Merriweather', serif;background-color:#4de866;">
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    include("connection.php");
    $name = $_POST['ename'];
    $position = $_POST['eposition'];
    $salary = $_POST['esalary'];
    $phone = $_POST['ephone'];
    $qry = "INSERT INTO `employee` (`ename`, `eposition`, `esalary`, `ephone`) VALUES ('$name', '$position', '$salary', '$phone')";
    $result = mysqli_query($con, $qry);
    if($result == true) {
        ?>
        <script>
        alert("Details added successfully!");
        header('location:admindash.php');
        </script>
        <?php
    } else {
        ?>
        <script>
        alert("Something went wrong");
        header('location:add.php');
        </script>
        <?php
    }
}
?>