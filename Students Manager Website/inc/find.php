<?php

//including the database connection file
include_once("connection.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$CNE = $_GET['CNE'];
/*$FILLIERE=$_GET['FILLIERE'];
$SEMESTRE=$_GET['SEMESTRE'];
$result = mysqli_query($mysqli, "SELECT * FROM etudiant WHERE (CNE=$CNE) AND (FILLIERE='$FILLIERE') AND (SEMESTRE='$SEMESTRE') "); // using mysqli_query instead*/

$result = mysqli_query($mysqli, "SELECT * FROM etudiant WHERE (CNE=$CNE) "); // using mysqli_query instead

?> 