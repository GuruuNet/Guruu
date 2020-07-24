<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutor-Finder</title>

  <!-- Bootstrap -->
  <link href="css/grid.min.css" rel="stylesheet">


  <link href="css/style.css" rel="stylesheet" />
  
  <style type="text/css"> 
  
 span.error_message {
 
 color:red;
 }
 
.search {
    width: 47%;
    float: left;
    margin-left: 3%;
}
  
  .searbtn {
    margin-top: 28px;
    margin-left: 1%;
    padding: 2px 20px;
    background: #1BBD36;
    color: #fff;
    border: none;
    padding: 5px 26px;
    border-radius: 17px;
}
  .search .form-group {
width:100%;
float:left;

}
  </style>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type='text/javascript'>
    $( document ).ready(function() {
      $('#datetimepicker1').datetimepicker();
    });
  </script>

</head>

<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navigation">
        <div class="container">
       

          <div class="navbar-collapse ">
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li><a href="index.php" >Home</a></li>
                
                
               
                
           
          
               
                <li><a href="">Register</a>
					<ul> 
						<li><a href="teacherreg.php">Register As Mentor</a></li>
						<li><a href="studentreg.php">Register As Student</a></li>
	
					
					</ul>
				
				
				</li>
				  <li><a href="login.php">Login</a></li>
				  <?php 
					 if(!isset($_SESSION)) 
    { 
        session_start(); 
		
    }
	  if(isset($_SESSION['email']) && isset($_SESSION['password']) ){
  
  
					 
 // $_SESSION['email'] = $email;
  //$_SESSION['password'] = $password;
	   
  
   ?>
					  <li class='has-sub'><a href='panel.php'><span>Admin</span></a>
						
					 </li>
					 <?php } ?>
                
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>