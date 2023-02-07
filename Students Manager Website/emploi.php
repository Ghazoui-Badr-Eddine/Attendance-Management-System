
<html>
<head>
    <title>Timesheet</title>
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
            width: 60%;
            height: 400px;
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
<form action="inc/emploi2.php" method="post">
<div class="panel panel-default emp">
    <div class="panel-heading"><p>Timesheet</p></div>
    <div class="emp2">
       
<table>
    <tr style="color:green;border-color: red;background-color:aliceblue;color:black"><td>Hours/Days</td><td>    Monday</td><td>Tuesday</td><td>Wednesday</td><td>Thursday</td><td>Friday</td><td>Saturday</td></tr>
<tr>
<td style="color:green;">08:00 --10:00</td>
<td><input type="text" name="lundi1" value=" "></td>
<td><input type="text" name="mardi1" value=" "></td>
<td><input type="text" name="mercredi1" value=" "></td>
<td><input type="text" name="jeudi1" value=" "></td>
<td><input type="text" name="vendredi1" value=" "></td>
<td><input type="text" name="samedi1" value=" "></td>
</tr>

<tr>
<td style="color:green;">10:15 --12:15</td>
<td><input type="text" name="lundi2" value=" "></td>
<td><input type="text" name="mardi2" value=" "></td>
<td><input type="text" name="mercredi2" value=" "></td>
<td><input type="text" name="jeudi2" value=" "></td>
<td><input type="text" name="vendredi2" value=" "></td>
<td><input type="text" name="samedi2" value=" "></td>
</tr>

<tr>
<td style="color:green;">13:45 --15:45</td>
<td><input type="text" name="lundi3" value=" "></td>
<td><input type="text" name="mardi3" value=" "></td>
<td><input type="text" name="mercredi3" value=" "></td>
<td><input type="text" name="jeudi3" value=" "></td>
<td><input type="text" name="vendredi3" value=" "></td>
<td><input type="text" name="samedi3" value=" "></td>
</tr>

<tr>
<td style="color:green;">16:00 --18:00</td>
<td><input type="text" name="lundi4" value=" "></td>
<td><input type="text" name="mardi4" value=" "></td>
<td><input type="text" name="mercredi4" value=" "></td>
<td><input type="text" name="jeudi4" value=" "></td>
<td><input type="text" name="vendredi4" value=" "></td>
<td ><input type="text" name="samedi4" value=" " ></td>
</tr>
    <tr>
</tr></table>

<select name="sem" >
<option selected="selected"> Major:</option>
            <option value="SMA"> SMA</option>
            <option value="SMI"> SMI</option>
            <option value="SMP"> SMP</option>
            <option value="SVT"> SVT</option>   
    </select>               			

<select name="fil" id="fil">
<option selected="selected">Semestre</option>
<option>S1</option>
<option>S2</option>
<option>S3</option>
<option>S4 </option>
<option>S5</option>
<option>S6 </option>
    </select>     


<br><br>
<input type="submit" name="submit" value="Save">
<input type="reset" name="reset" value="Reset">
</div>
    </div>

</form><br><br>
   

</body>
</html>