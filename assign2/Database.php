<?php
// Database Credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Enquiry_DB";

// Create connection
$conn = mysqli_connect($servername, $usernqame, $password);

//check conneciton
if(!$conn) {
    die("Conneciton failed: " . mysqli_connect_error());
}

// Create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if(mysqli_query($conn, $sql)) {
    echo "Database created succesfully (or already exists). <br>";    
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select the database
mysqli_select_db($conn, $dbname);

//SQL to create the table
$sql = "CREATE TABLE IF NOT EXISTS Enquiry_Form (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    streetAddress VARCHAR(100),
    city VARCHAR(50),
    state VARCHAR(30),
    postcode VARCHAR(5),
    tutorial VARCHAR(20) 
)"; 

// Execute the query to create the table
if(mysqli_query($conn, $sql)) {
    echo "Table Enquiry_Form created succesfully (or already exists). <br>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>