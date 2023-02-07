<?php

//session_start();
//$username=$_SESSION['username'];
//including the database connection file
include_once("connection.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT rfid,FIRST_NAME,date,LAST_NAME,allow,SEMESTRE,FILLIERE
FROM `dooo`e,`etudiant`p
where p.CODE_CARTE=e.rfid ;
 "); // using mysqli_query 
   // $res = mysqli_fetch_array($result);
  while($res = mysqli_fetch_array($result)) {   
     
        echo "<tr>";
        echo "<td>".$res['FIRST_NAME']."</td>";
        echo "<td>".$res['LAST_NAME']."</td>";
        echo "<td>".$res['rfid']."</td>";
        echo "<td>".$res['allow']."</td>";
        echo "<td>".$res['date']."</td>";
        echo "<td>".$res['FILLIERE']."</td>";
        echo "<td>".$res['SEMESTRE']."</td>";
        /*echo "<td>".$res['CODE_APOGEE']."</td>";*/
        
        echo "</tr>";            
    }
  
?>