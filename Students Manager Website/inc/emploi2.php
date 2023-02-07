<?php

include_once("connection.php");
if(isset($_POST['submit']))
		
		
		$fil=$_POST['fil'];
$sem=$_POST['sem'];
	

		$lundi1=$_POST['lundi1'];
		$lundi2=$_POST['lundi2'];	
		$lundi3=$_POST['lundi3'];
		$lundi4=$_POST['lundi4'];
        

		$mardi1=$_POST['mardi1'];
		$mardi2=$_POST['mardi2'];
		$mardi3=$_POST['mardi3'];
		$mardi4=$_POST['mardi4'];
        

		$mercredi1=$_POST['mercredi1'];
		$mercredi2=$_POST['mercredi2'];
		$mercredi3=$_POST['mercredi3'];
		$mercredi4=$_POST['mercredi4'];
        

		$jeudi1=$_POST['jeudi1'];
		$jeudi2=$_POST['jeudi2'];
		$jeudi3=$_POST['jeudi3'];
		$jeudi4=$_POST['jeudi4'];
        	

		$vendredi1=$_POST['vendredi1'];
		$vendredi2=$_POST['vendredi2'];
		$vendredi3=$_POST['vendredi3'];
		$vendredi4=$_POST['vendredi4'];
        	

		$samedi1=$_POST['samedi1'];
		$samedi2=$_POST['samedi2'];
		$samedi3=$_POST['samedi3'];
		$samedi4=$_POST['samedi4'];
        

		

		
		
	
 $result = mysqli_query($mysqli,"INSERT INTO `emploi`(`fil`,`sem`,`lundi1`,  `lundi2`, `lundi3`, `lundi4`, `mardi1`, `mardi2`, `mardi3`, `mardi4`, `mercredi1`, `mercredi2`, `mercredi3`, `mercredi4`,`jeudi1`, `jeudi2`, `jeudi3`, `jeudi4`,`vendredi1`, `vendredi2`, `vendredi3`, `vendredi4`,`samedi1`,`samedi2`,`samedi3`,`samedi4`) VALUES ('$sem','$fil','$lundi1','$lundi2','$lundi3','$lundi4','$mardi1','$mardi2','$mardi3','$mardi4','$mercredi1','$mercredi2','$mercredi3','$mercredi4','$jeudi1','$jeudi2','$jeudi3','$jeudi4','$vendredi1','$vendredi2','$vendredi3','$vendredi4','$samedi1','$samedi2','$samedi3','$samedi4')");

 /*header('Location: ../affemp.php');*/
?>