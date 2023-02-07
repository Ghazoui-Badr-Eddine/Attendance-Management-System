<?php 

//including the database connection file
include("connection.php");
 
//getting id of the data from url
$CNE = $_GET['CNE'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM etudiant WHERE CNE=$CNE");
 
//redirecting to the display page (index.php in our case)
header('Location: ../showing.php');