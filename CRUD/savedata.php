<?php
require_once "config.php";
$s_address = $_REQUEST['saddress'];
$s_class = $_REQUEST['class'];
$s_phone = $_REQUEST['sphone'];
$s_name = $_REQUEST['sname'];

$sql2 = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$s_name}','{$s_address}','{$s_class}','{$s_phone}')";
$result2 = mysqli_query($conn, $sql2);
header("location: index.php");

mysqli_close($conn);