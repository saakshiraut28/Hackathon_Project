<?php
require_once "../includes/dbh.inc.php";
require_once "access.php";

$sql = "UPDATE `complaints` SET `completed` = '1' WHERE `complaints`.`id`='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: index.php");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>