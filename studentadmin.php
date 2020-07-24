
<?php include("header.php"); ?>
<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
		
  
  }
  if((!$_SESSION['email']) && (!$_SESSION['password']) ){
   header("Location: http://localhost/project/");
  }
  
 					
	include("inc/constant.php");
	$email=$_SESSION['email'];
	$sql = "SELECT *  FROM student WHERE username='$email'";
	$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$name=$row["name"];
	$institute_name=$row["institute_name"];
	$number=$row["mobile"];
	}
}

else {

echo "fff";}	
	
 ?>

<section id="contact-page">
    <div class="container">
       <div class="center">
        <h2 align="center">Mentee Panel</h2>
        </div>
      <div class="center"> <a class="btn btn-danger"href="inc/logout.php">logout</a>
        </div>
   
   
   <div class="row"> 
   
				<div class="col-md-6"> 
		<h3> Request Mentor </h3>
          
          
          <div class="contactForm">
		
			<input type="hidden" name="name" class="form-control" id="name" value="<?php echo $name ?>"  />
           
            <div class="form-group">
						<select class="form-control" name="subject" id="subject">
						  <option>Subject</option>
						  <option value="Career">Career</option>
						  <option value="Education">Education</option>
						  <option value="Entrepreneurship">Entrepreneurship</option>
						  
						  
						  
						</select>
						  
				</div>
			  
			
			   <div class="form-group">
						<input class="form-control" name="teaching" id="teaching" placeholder="Mentor Experience (in months)">
						  
				</div>
			 <div class="form-group">
						<input class="form-control" name="search" id="search" placeholder="Search Tag">
						  
				</div>
				
			
            <div class="text-center"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" >Search </button></div>
          </div>
		  <div id="result"></div>
			</div>
	
	<div class="col-md-1"></div>
				
				<div class="col-md-5 teacherinfo"> 
					<h3> Account Details </h3>
					
					
					

	
	
		

	<div class="single-tutor">
		<div class="tutor-are">
				<div class=""><h3><?php echo $name ?></h3></div>
				
		
		</div>
			
			
			<p><span>Number:</span> <?php echo $number ?></p>
			
		</div>
	

				
				</div>
   
   
   </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
 
<script src="js/jquery-2.js"></script>
<script type="text/javascript"> 
	
		$(document).ready(function(){
		
		$("#submit").click(function(){
		
		var name=$("#name").val();
		var sub=$("#subject").val();
		var teaching=$("#teaching").val();
		var search=$("#search").val();
		

	
		
					$.ajax({
				
				
				url:'inc/tutor_req.php',
				data:{name:name,teaching:teaching,subject:sub,search:search},
				type:'POST',
				success:function(data){
					$("#result").html(data);
					
					
				}
				
				
				
			});
			
	
			
		
		
		
	
		});
		

		});
	
	
	
	
	
	
	
	</script> 



<?php include("footer.php"); ?>