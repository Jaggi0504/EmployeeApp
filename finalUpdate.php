<?php
include "connection.php";
if(isset($_POST['update1'])) {
    $id = $_POST['update1'];
    $ename = $_POST['ename'];
    $eposition = $_POST['eposition'];
    $esalary = $_POST['esalary'];
    $ephone = $_POST['ephone'];

    $qry = "UPDATE `employee` SET `ename`='$ename', `eposition`='$eposition', `esalary`='$esalary', `ephone`='$ephone' WHERE id=$id ";
    $result = mysqli_query($con, $qry);
    if($result == true) {
        ?>
        <script>
        alert("Data Updated Successfully!");
        header('location: ./admindash.php');
        </script>
        <?php
    }

}
?>