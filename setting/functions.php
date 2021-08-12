<?php

$conn = mysqli_connect("localhost", "root", "", "note");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function save($data)
{
	global $conn;
	$title = htmlspecialchars($data["title"]);
	$description = htmlspecialchars($data["description"]);
	$dates = date("d-m-y");
	$status = 'all';

	$query = "INSERT INTO notes VALUES ('','$title','$description','$status','$dates')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function edit($data)
{
	global $conn;
	$title = htmlspecialchars($data["text5"]);
	$description = htmlspecialchars($data["text6"]);
	$id = $data["id"];
	$dates = date("d-m-y");

	$query = "UPDATE notes SET title = '$title' WHERE id = '$id' ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
