<?php
session_start();
if($_SESSION['uid']) {
    echo "";
} else {
    header('location: login.php');
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
                 </style>
</head>
<body>
<div class="container">
<h1> Delete Entry of the Employee </h1>
<table clas="striped">
        <thead>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Salary</th>
              <th>Phone</th>
              <th>Action</th>
          </tr>
        </thead>
        <?php
        include("connection.php");
        $qry = "SELECT * FROM `employee` ";
        $result = mysqli_query($con, $qry);
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tbody>
            <tr>
            <td><?php echo $row['ename']?></td>
            <td><?php echo $row['eposition']?></td>
            <td><?php echo $row['esalary']?></td>
            <td><?php echo $row['ephone']?></td>     
            <td><a href="delete1.php?id=<?php echo $row['id']?>">Delete</a></td>
            </tr>
            </tbody>
            <?php
        }
        ?>
      </table>
         
</div> 
</body>
</html>