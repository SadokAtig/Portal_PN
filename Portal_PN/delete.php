<?php
include "db_conn.php";
$title = $_GET["title"];
$sql = "DELETE FROM `note` WHERE title = '$title'";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: office.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>
