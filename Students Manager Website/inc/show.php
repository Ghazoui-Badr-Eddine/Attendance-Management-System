<?php


//$username=$_SESSION['username'];
//including the database connection file
include_once("connection.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM etudiant");// using mysqli_query 
   // $res = mysqli_fetch_array($result);
  while($res = mysqli_fetch_array($result)) {   
     
       echo "<tr>";
        echo "<td>".$res['FIRST_NAME']."</td>";
        echo "<td>".$res['LAST_NAME']."</td>";
        echo "<td>".$res['CNI']."</td>";
        echo "<td>".$res['CNE']."</td>";
        echo "<td>".$res['FILLIERE']."</td>";
        echo "<td>".$res['SEMESTRE']."</td>";
        echo "<td>".$res['CODE_APOGEE']."</td>";
        
        echo "</tr>";            
    }
  
?>