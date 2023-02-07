<?php session_start();

$host = 'localhost';
$db = 'students';
$user = 'root';
$pass = '';






$con=@ mysqli_connect($host, $user, $pass) or die ("Connection Failed"); 
mysqli_select_db($con,$db) /*or die ("failed")*/;
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($con,"SELECT * FROM user WHERE username='$username' AND password='$password'") or die ("Connection Failed");
$cek=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);

 $_SESSION['username']=$row['username'];
 $_SESSION['password']=$row['password'];
 $_SESSION['level']=$row['level'];

if ( $_SESSION['level']=="admin"){
     header("location:home.php");
    
}else if( $_SESSION['level']=="user"){
     header("location:home.php");
}else{
    session_destroy();
    header("location:index.php");
}


?>