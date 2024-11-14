<?php
// set the servername, username, and password
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

//create database
//mysqli_query() function performs a query against a database.
$sql = "CREATE DATABASE IF NOT EXISTS Herbarium_DB";

mysqli_query($conn, $sql);
mysqli_close($conn);

?>