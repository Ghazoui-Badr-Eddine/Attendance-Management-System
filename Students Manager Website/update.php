<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
    <link rel="styleheet" href="style3.css"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>   
    <script src="jquery.min.js"></script>
    <script  src="bootstrap.min.js"></script>
    </head>
    
    
    <style>
    body{
           background-color:#F2F4F4;
            
        }
       
        .se{
            margin-top: 10px;
        }
    
    
    </style>
    <body><header>
         <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Logo -->
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

        </header>

    <div class="container">
    <h1 class="well">Update student</h1>
	<div class="col-lg-12 well">
	<div class="row">
        <?php include_once('inc/find.php');?>
        <?php while($res = mysqli_fetch_array($result)): ?>
        
				<form action="inc/edit.php" method="post">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>First Name</label>
                                <input type="text" name="FIRST_NAME" value="<?php print $res['FIRST_NAME']; ?>" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Last Name</label>
                                <input type="text" name="LAST_NAME" value="<?php print $res['LAST_NAME']; ?>" class="form-control">
                            </div>
                        </div>                  
                        <div class="form-group">
                            <label>Address</label>
                            <textarea  name="ADDRESS" rows="3" class="form-control"><?php print $res['ADDRESS']; ?></textarea>
                        </div>  
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>CNI</label>
                                <input type="text" name="CNI" value="<?php print $res['CNI']; ?>" class="form-control">
                            </div>  
                            <div class="col-sm-4 form-group">
                                <label>Student Code</label>
                                <input type="text" name="CODE_APOGEE" value="<?php print $res['CODE_APOGEE']; ?>" class="form-control">
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Card Code</label>
                                <input type="text" name="CODE_CARTE" value="<?php print $res['CODE_CARTE']; ?>" class="form-control">
                            </div>      
                            <div class="col-sm-6 form-group">
                                <label>Date of birth</label>
                                <input id="date"  name="DATE_OF_BIRTH"  value="<?php print $res['DATE_OF_BIRTH']; ?>" type="date" class="form-control ">
                            </div>  
                        </div>                      
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" id="number" name="PHONE_NUMBER" value="<?php print $res['PHONE_NUMBER']; ?>" class="form-control">
                    </div>      
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="EMAIL_ADDRESS" value="<?php print $res['EMAIL_ADDRESS']; ?>" class="form-control">
                        <div class="se">
                        <select name="SEMESTRE" >
                <option value="<?php print $res['SEMESTRE']; ?>">  <?php print $res['SEMESTRE']; ?></option>
            <option value="S1"> S1</option>
            <option value="S2"> S2</option>
            <option value="S3"> S3</option>
            <option value="S4"> S4</option>
            <option value="S5"> S5</option>
            <option value="S6"> S6</option>
        </select>
                      
                   
                                  <select name="FILLIERE" >
                <option value="<?php print $res['FILLIERE']; ?>"><?php print $res['FILLIERE']; ?></option>
            <option value="SMA"> SMA</option>
            <option value="SMI"> SMI</option>
            <option value="SMP"> SMP</option>
            <option value="SVT"> SVT</option> 
      
        </select>
                            </div>
                        
                    </div>  
                    <input type="hidden" name="CNE" value="<?php print $res['CNE']; ?>">
                    <input type="submit" name="update" value="UPDATE" class="btn btn-lg btn-info"/>               
                    </div>
                </form>
                <?php endwhile; ?>  
				</div>
	</div>
	</div>
       
    </body>