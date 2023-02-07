<!DOCTYPE html>
<html>
<head>
    <title>List of Students</title>
    <style>
      
        /*body {
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
			width: 90%;
    		margin: 0 auto;
		}*/
		/*.odt-main {
			width: 100%;
		    margin: 10px auto;
		    border: 1px solid #ddd;
		    border-collapse: collapse;
		    padding: 5px;*/
		}
		/*.odt-main thead {
			background-color: #F1812B;
    		color: #fff;
    		font-size: 18px;
		}
		/*.logo.logo1 {
			font-size: 28px !important;
			text-decoration: none;
			color: #000;
		}*/
		/*.odt-main thead tr th {
			color: white;
    		padding: 12px;
    		border: 1px solid #ddd;
    		cursor: pointer; */
		}
		.odt-main tr td {
			padding: 8px;
    		border: 1px solid #ddd;

		}
		.odt-main-search {
			float: right;
    		margin: 10px;
    		margin-right: 0px;	
		}		
		.odt-pagination ul {
			float: left;
    		display: inline-block;
    		padding-left: 0;
    		margin: 0px 0px 20px 0;    		
		}
		.odt-pagination ul li {
			cursor: pointer;
			display: inline;
		    position: relative;
		    float: left;
		    padding: 6px 12px;
		    margin-left: -1px;
		    line-height: 1.42857143;
		    color: #F1812B;
		    text-decoration: none;
		    background-color: #fff;
		    border: 1px solid #ddd;
		}
		.pagination a{
			text-decoration: none;
			color: #F1812B;
		}
		
		/*li.odt_Pbtn.active,li.odt_Pbtn.active a{
		    background-color: #F1812B;
    		color: #fff;
		    cursor: context-menu;*/
		}
		.odt-display-record {
			float: left;
    		margin: 10px;
    		margin-left: 0px;
		}
		.odt-display-record select {
			width: 70px;
		    height: 25px;
		    padding: 2px 3px;
		}
		.odt-main {		     
		    overflow: hidden;
		}		 
		.odt-main thead tr th .up-arrow:before {
			content: "";
		    display: block;
		    width: 0;
		    height: 0;
		    border-left: 5px solid transparent;
		    border-right: 5px solid transparent;
		    border-bottom: 5px solid #fff;
		}
		.odt-main thead tr th .down-arrow:before {
			content: "";
		    display: block;
		    width: 0;
		    height: 0;
		    border-left: 5px solid transparent;
		    border-right: 5px solid transparent;
		    border-top: 5px solid #fff;
		    margin-top: 2px;
		}
		.odt-col {
			float: left;
		}
		.odt-arrow {
			float: right;
			margin-top: 5px;
		}
		.odt-show-entry {
			float: left;
			line-height: 36px;
		}
		.odt-pagination {
			float: right;
		}
		.odt-search {
			border-radius: 3px;
		    border: 1px solid #ddd;
		    height: 28px;
		    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		    padding: 6px 12px;
		    font-size: 14px;
		}

		.logo a{ 
			font-family: 'Raleway', sans-serif;
			color: #000 !important; 
			display: block !important; 
			font-family: 'Raleway', sans-serif !important; 
			line-height: 75px !important;
			font-size: 28px !important;
			text-decoration: none; 
		}
		.logo1 { 
			color: #f8931f;
		}
        
        
        
        
        
        
        --------------------------------------------
    .lab{
    float:right;
    margin-right: 20px;
        margin-top: 0px;
         margin-bottom: 3px;
}
    
        
        
        
        
        .tot{  float:center;
    margin-right: 20px;
        margin-top: 20px;
         margin-bottom: 20px;
              margin-left: 20px;
        
        
        
        
        }
        .tabo{
             margin-right: 20px;
        margin-top:-28px;
         margin-bottom: 90px;
              margin-left: 20px;
            ;
            
        }
        p{
            font-size:30px
        }
           body{
           background-color:#F2F4F4;
            
        }
      
       
    </style>
    <link rel="styleheet" href="styleaff.css"/>
    <link rel="stylesheet" href="bootstrap.min.css"/>   
    <script src="jquery.min.js"></script>
    <script  src="bootstrap.min.js"></script>
    </head>
    <body>
        <header> <nav class="navbar navbar-inverse">
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
        <div class="tot">
        <div class="panel panel-default">
        
            <div class="panel-heading"><p>Liste des Etudiants</p></div>
            <br>
            
            <br>
            
<div class="tabo">
        <table class="table table-striped table table-bordered mytable" >
            <thead class="table table-hover">
            <tr>
            <th >PRENOM</th>
            <th >NOM</th>
            <th >CNI</th>
            <th >CNE</th>
            <th >MAJOR</th>
            <th >SEMESTRE</th>
            <th >CODE</th>
         </tr>
            </thead>
            <tbody>
       <?php require 'inc/show.php'; ?>
         

            </tbody>

            </table>
            </div>
        </div>
            </div>
      

               
        
    </body>
    
</html>