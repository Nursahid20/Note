<?php
require '../setting/functions.php';

$id = $_GET['id'];

$hapus = mysqli_query($conn, "UPDATE notes SET status='delete' WHERE id='$id'");
if ($hapus) {
    header("location:../index");
}
