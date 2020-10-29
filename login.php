<?php
session_start();
if(isset($_SESSION['uid'])) {
    header('location:admindash.php');
} else {
    
}
?>

<DOCTYPE html>
<html>
<head> <title> Employee App </title>
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
<div class="container">
<h1> Enter the credentials </h1>
<form method="post" action="">
<input type="text" placeholder="Enter name" name = "uname">
<input type="password" placeholder="Enter password" name="upassword">
<input type="submit" value="Login" name="submit" style="font-family:'Merriweather', serif;background-color:#4de866;"> 
</form>
</div>
</body>
</html>

<?php
include("connection.php");
if(isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $password = $_POST['upassword'];
    $qry="SELECT * FROM `admin` WHERE username='$name' AND password='$password'";
    $result=mysqli_query($con,$qry);
    $row=mysqli_num_rows($result);
    if($row < 1) {
        ?>
        <script>
        alert("Username or Password do not Match. Please try again!");
        window.open('login.php', '_self');
        </script>
        <?php
    } else {
        $data = mysqli_fetch_assoc($result);
        $id = $data['id'];
        $_SESSION['uid'] = $id;
        header('location:admindash.php');
    }
}

?>