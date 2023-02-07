
<html>
<head>
    <title> Timesheet</title>
 	<meta charset="utf-8">
     <link rel="styleheet" href="style2.css"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>   
    <script src="jquery.min.js"></script>
    <script  src="bootstrap.min.js"></script>
 
</head>
    <style>
          body{
           background-color:#F2F4F4;
            
        }
        .emp{
           margin-right: 10px;
          
            margin-left: 10px;
            margin-top: -90px;
            
        }
        table{
            width: 100%;
            height: 450px;
            border: 1px solid black;
            
            
        }
        td{
            border: 1px solid black;
            text-align: center;
        }
        p{
            font-size: 40px;
        }
        .emp2{margin-left: 10px;
            margin-top: 10px;
           background-color:
            
        }
    
    
    </style>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
                <a href="#" class="navbar-brand">ENSAM</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav ">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li class="dropdown">   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Students Management <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a class="lo" href="showing.php">Display</a></li>
                            <li><a class="lo" href="adding.php">Add</a></li>
                            <li><a class="lo" href="delete.html" >Delete</a></li>
                            <li><a class="lo" href="uprech.html" >Update</a></li>
                            <li><a class="lo" href="recherche.php" >Search</a></li>
                        </ul>
                    
                    <li class="active"><a href="carac.php">Validation History </a></li>
                    
                    </li>

                    <!-- drop down menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Timesheet <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="rechemp.php">Display Timesheet</a></li>
                            <li><a href="emploi.php" >Add Timesheet</a></li>
                        </ul>
                    </li>
                </ul>
                <div >
                    <ul class="nav navbar-nav">
               <li> <a href="home.php"  >About</a></li>
                    </ul>
            </div>
                  <div >
                    <ul class="nav navbar-nav">
               <li> <a href="carac.php"  >Help</a></li>
                    </ul>
            </div>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="logout.php">Sign Out</a></li>
                   
                </ul>


            </div>


        </div>
    </nav>

<br><br><br>

 <br><br>
<form action="" method="post">
<div class="panel panel-default emp">
    <div class="panel-heading"><p>Timesheet</p></div>
    <div class="emp2">
       <?php include_once('inc/finde.php');?>
         <?php while($res = mysqli_fetch_array($result)): ?>
<table>
     <tr style="color:green;border-color: red;background-color:aliceblue;color:black"><td>Hours/Days</td><td>    Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td><td>Saturday</td></tr>
<tr>
<td style="color:green;">08:00 --10:00</td>
<td><?php print $res['lundi1']; ?></td>
<td><?php print $res['mardi1']; ?></td>
<td><?php print $res['mercredi1']; ?></td>
<td><?php print $res['jeudi1']; ?></td>
<td><?php print $res['vendredi1']; ?></td>
<td><?php print $res['samedi1']; ?></td>
</tr>

<tr>
<td style="color:green;">10:15 --12:15</td>
<td><?php print $res['lundi2']; ?></td>
<td><?php print $res['mardi2']; ?></td>
<td><?php print $res['mercredi2']; ?></td>
<td><?php print $res['jeudi2']; ?></td>
<td><?php print $res['vendredi2']; ?></td>
<td><?php print $res['samedi2']; ?></td>
</tr>

<tr>
<td style="color:green;">13:45 --15:45</td>
<td><?php print $res['lundi3']; ?></td>
<td><?php print $res['mardi3']; ?></td>
<td><?php print $res['mercredi3']; ?></td>
<td><?php print $res['jeudi3']; ?></td>
<td><?php print $res['vendredi3']; ?></td>
<td><?php print $res['samedi3']; ?></td>
</tr>

<tr>
<td style="color:green;">16:00 --18:00</td>
<td><?php print $res['lundi4']; ?></td>
<td><?php print $res['mardi4']; ?></td>
<td><?php print $res['mercredi4']; ?></td>
<td><?php print $res['jeudi4']; ?></td>
<td><?php print $res['vendredi4']; ?></td>
<td ><?php print $res['samedi4']; ?></td>
</tr>
 </table>
<br>




<br><br>
<!--input type="submit" name="submit" value="Enregistrer L'emploi">
<input type="reset" name="reset" value="Réinitialiser"-->
</div>
    </div>

</form><br><br>
   <?php
     endwhile; 
    ?> 

</body>
</html>