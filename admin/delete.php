<?php
require_once "../includes/dbh.inc.php";
require_once "access.php";

$sql = "DELETE FROM complaints WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: index.php");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>