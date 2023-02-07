<!DOCTYPE html>
<html>
<head>
    <link rel="styleheet" href="style3.css"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>   
    <script src="jquery.min.js"></script>
    <script  src="bootstrap.min.js"></script>
    </head>
    <title>Add Student</title>
    
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
    <h1 class="well">Add Student</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form action="inc/add.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First name</label>
								<input type="text" name="FIRST_NAME" placeholder="Entrer Votre Prenom" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>last name</label>
								<input type="text" name="LAST_NAME" placeholder="Entrer Votre Nom" class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea  name="ADDRESS" placeholder="Entrer Votre Adresse" rows="3" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>CNI</label>
								<input type="text" name="CNI" placeholder="Votre Code Nationale d'Identite" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>CNE</label>
								<input type="text"  name="CNE" placeholder="Votre Code Nationale DE l'Etudiant" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Code</label>
								<input type="text" name="CODE_APOGEE" placeholder="Entrer Votre Apogee" class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Code Carte</label>
								<input type="text" name="CODE_CARTE" placeholder="Entrer le Code de la Carte" class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Date of borth</label>
								<input id="date"  name="DATE_OF_BIRTH" type="date" class="form-control">
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone</label>
						<input type="number" id="number" name="PHONE_NUMBER" placeholder="Entrer le Numero de Telephone" class="form-control">
					</div>		
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="EMAIL_ADDRESS" placeholder="Entrer Email" class="form-control">
                        <div class="se">
                        <select name="SEMESTRE" >
                <option value="sel1">Semestre</option>
            <option value="S1"> S1</option>
            <option value="S2"> S2</option>
            <option value="S3"> S3</option>
            <option value="S4"> S4</option>
            <option value="S5"> S5</option>
            <option value="S6"> S6</option>
        </select>
                      
                   
                                  <select name="FILLIERE" >
                <option>Choose major</option>
            <option value="SMA"> SMA</option>
            <option value="SMI"> SMI</option>
            <option value="SMP"> SMP</option>
            <option value="SVT"> SVT</option> 
      
        </select>
                            </div>
                        
					</div>	
					
					<input type="submit" name="submit" value="SAVE" class="btn btn-lg btn-info"/>				
                    </div>
				</form> 
				</div>
	</div>
	</div>
       
    </body>