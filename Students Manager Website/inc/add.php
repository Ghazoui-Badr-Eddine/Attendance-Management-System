<?php
//including the database connection file
include_once("connection.php");
 
if(isset($_POST['submit']))

    $CNE = $_POST['CNE'];
    $CNI = $_POST['CNI'];
    $CODE_APOGEE = $_POST['CODE_APOGEE'];
    $FIRST_NAME = $_POST['FIRST_NAME'];
    $LAST_NAME = $_POST['LAST_NAME'];
    $CODE_CARTE = $_POST['CODE_CARTE'];
    $DATE_OF_BIRTH = $_POST['DATE_OF_BIRTH'];
    $PHONE_NUMBER = $_POST['PHONE_NUMBER'];
    $ADDRESS = $_POST['ADDRESS'];
    $EMAIL_ADDRESS = $_POST['EMAIL_ADDRESS'];
    $SEMESTRE = $_POST['SEMESTRE'];
    $FILLIERE = $_POST['FILLIERE'];
         
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO etudiant(CNE, CNI, CODE_APOGEE, FIRST_NAME, LAST_NAME, CODE_CARTE, DATE_OF_BIRTH, PHONE_NUMBER, ADDRESS, EMAIL_ADDRESS, SEMESTRE, FILLIERE) VALUES ('$CNE','$CNI','$CODE_APOGEE','$FIRST_NAME','$LAST_NAME','$CODE_CARTE','$DATE_OF_BIRTH','$PHONE_NUMBER','$ADDRESS','$EMAIL_ADDRESS','$SEMESTRE','$FILLIERE')");
        
        //display success message
        //echo "<font color='green'>Data added successfully.";
        //echo "<br/><a href='index.php'>View Result</a>";
        header('Location: ../showing.php');

?>