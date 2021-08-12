<?php
require '../setting/functions.php';

$id = $_GET['id'];
$title = $_GET['text5'];
$description = $_GET['text6'];

//query update
$q = "UPDATE notes SET title='$title' , description='$description', status='all' WHERE id= $id ";

if (mysqli_query($conn, $q)) {
    header("location:../index");
}

//mysql_close($host);
