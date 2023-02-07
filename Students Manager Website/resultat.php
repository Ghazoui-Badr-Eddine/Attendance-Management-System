<!DOCTYPE html>
<html>
<head>
    <title>Find Student</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>   
    <script src="jquery.min.js"></script>
    <script  src="bootstrap.min.js"></script>
    </head>
    <style>
         body{
           background-color:#F2F4F4;
            
        }
        .bt{
            margin-bottom: 10px;
            margin-left: 20px;
        }
     p{
            font-size:30px
        }
     .mar{
             margin-right: 20px;
        margin-top:30px;
         margin-bottom: 20px;
              margin-left: 20px;
            ;
            
        }
        .pan{
             float:center;
    margin-right: 20px;
        margin-top: 120px;
         margin-bottom: 20px;
              margin-left: 20px;
        
        }
        .ta{
              margin-right: 20px;
        margin-top:30px;
         margin-bottom: 20px;
              margin-left: 20px;
            ;
            
            
            
        }
        
        }
        .mov{
            margin-right: 20px;
             margin-left: 20px;
             margin-bottom: 20px;
            
            
        }
    
       body{
            background: url('back.jpg') no-repeat;
            background-size: cover;
            
        }
    
    </style>
    <body>
        
        <header> <nav class="navbar navbar-inverse">
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
               <li> <a href="acceil.php"  >About</a></li>
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
        <div class="pan">
          
         <div class="panel panel-default">
   <div class="panel-heading"><p>Informations</p></div>
             <div class="ta">
          <?php include_once('inc/find.php');?>
          <?php while($res = mysqli_fetch_array($result)): ?>
        <table class="table table-striped table-bordered">
            <tr>
                <th>First Name</th>
                <th><?php print $res['FIRST_NAME']; ?></th>
            </tr>
             <tr>
                <th>Last Name</th>
                <th><?php print $res['LAST_NAME']; ?> </th>  
            </tr>
          <tr>
                <th>Address</th>
                <th><?php print $res['ADDRESS']; ?></th>  
            </tr>
             <tr>
                <th>CNI</th>
                <th><?php print $res['CNI']; ?></th>  
            </tr>
              <tr>
                <th>CNE</th>
                <th><?php print $res['CNE']; ?> </th>  
            </tr>
             <tr>
                <th>Student Code</th>
                <th> <?php print $res['CODE_APOGEE']; ?></th>  
            </tr>
            <tr>
                <th>Card Code</th>
                <th><?php print $res['CODE_CARTE']; ?></th>  
            </tr>
             <tr>
                <th>Date of birth</th>
                <th><?php print $res['DATE_OF_BIRTH']; ?> </th>  
            </tr>
                          <tr>
                <th>Phone</th>
                <th><?php print $res['PHONE_NUMBER']; ?> </th>  
            </tr>
                          <tr>
                <th>Email</th>
                <th><?php print $res['EMAIL_ADDRESS']; ?> </th>  
            </tr>
                          <tr>
                <th>Major</th>
                <th> <?php print $res['FILLIERE']; ?></th>  
            </tr>
                          <tr>
                <th>Semestre</th>
                <th> <?php print $res['SEMESTRE']; ?> </th>  
            </tr>
        
        </table>
           
        </div>
             
        </div>
        <?php endwhile; ?> 
    </div>
    
    
    
    
    
    
    
    
    
    
    
    </body>