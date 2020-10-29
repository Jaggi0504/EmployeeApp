<?php
    $con = mysqli_connect('localhost', 'root', '', 'employee_app');
    if($con == false) {
        echo "Connection failed!";
    }
?>