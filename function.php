<?php
function showDetails($ename)
{
include "connection.php";
$sql="SELECT * FROM `employee` WHERE `ename` = '$ename' ";
$run=mysqli_query($con,$sql);
if(@mysqli_num_rows($run)>0)
{
    
    $data=mysqli_fetch_assoc($run);
  
?>
<!DOCTYPE HTML>
<html>
<head>
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
<div class="container">
<h1> Employee's Details </h1>
<table class="striped">
        <thead>
          <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Salary</th>
              <th>Phone</th>
          </tr>
        </thead>
            <tbody>
            <tr>
            <td><?php echo $data['ename']?></td>
            <td><?php echo $data['eposition']?></td>
            <td><?php echo $data['esalary']?></td>
            <td><?php echo $data['ephone']?></td>     
            </tr>
            </tbody>
            <?php
        ?>
      </table>
      </div>
<?php
}
else
{
  ?>
  <script>
    window.alert('Sorry, no record found');
    window.location('index.php');
   </script> 
    <?php
}
}
?>
</html>