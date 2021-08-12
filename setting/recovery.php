<?php
require '../setting/functions.php';

$id = $_GET['id'];

$q = "UPDATE notes SET status='all' WHERE id= $id ";

if (mysqli_query($conn, $q)) {
    header("location:../index");
}

//mysql_close($host);
