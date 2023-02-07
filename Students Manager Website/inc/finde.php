<?php

//including the database connection file
include_once("connection.php");
 
$sem = $_GET['sem'];
$fil=$_GET['fil'];
$result = mysqli_query($mysqli, "SELECT * FROM emploi WHERE (sem='$sem') AND (fil='$fil')  "); // using mysqli_query instead*/


?> 