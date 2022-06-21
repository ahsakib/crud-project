<?php
require_once "config.php";
$s_id = $_REQUEST['sid'];
$s_address = $_REQUEST['saddress'];
$s_class = $_REQUEST['sclass'];
$s_phone = $_REQUEST['sphone'];
$s_name = $_REQUEST['sname'];

$sql = "UPDATE student SET sname='{$s_name}',saddress='{$s_address}',sclass='{$s_class}',sphone='{$s_phone}' WHERE sid={$s_id}";
$result = mysqli_query($conn, $sql) or die("queary Unsuccessful");
header("location: index.php");
mysqli_close($conn);