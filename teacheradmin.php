
<?php include("header.php"); ?>

<?php
if(!isset($_SESSION)) 
    {     //SESSION START 
        session_start(); 
        $_SESSION['emailValue']=$email; 
        
		
  
  }
  if((!$_SESSION['email']) && (!$_SESSION['password']) ){
   header("Location: http://localhost/project/index.php");
  }


  $host="localhost";
  $username="root";
  $password="";
  $dbName="tutor";
  
  
  $conn = mysqli_connect($host, $username, $password);
  
  // Check connection
  $conn = new mysqli($host, $username, $password, $dbName);
  
  // Check connection
  if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
  }
	$email=$_SESSION['email'];
	$sql = "SELECT *  FROM tutor WHERE email='$email'";
	$result = $conn->query($sql);
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$name=$row["name"];
	$email=$row["email"];
	$number=$row["number"];
	$teaching=$row["teaching"];
	$address  =$row["address"];
	$subject = $row["subject"];
	}
}

else {

echo "fff";}	
	
 ?>
 <?php
        include_once './checkboxClass.php';
        $checkBoxClass=new checkboxClass();
        $list=$checkBoxClass->listCheckbox("where users= '$email'");
?>
 
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<style>
th {
 
  color: black;
}
td {
 
  color: black;
}
</style>
	
<section id="contact-page">
    <div class="container">
	<div style="float:right"> <a class="btn btn-danger"href="inc/logout.php">logout</a></div>
       <div class="center">
        <h2>Mentor Panel</h2>
        </div>
      
   
   
   <div class="row"> 
   
				<div class="col-md-6"> 
				<h3>Selected Time Slots</h3>
				<table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Date</th><th >Time Slots</th><th>Action</th>
                </tr>
            </thead>
            <?php
            if(count($list)){
                foreach ($list as $value) {
                    echo "<tr><td>$value[date]</td><td> $value[times] </td><td><a class='btn btn-primary btn-sm' href='edit-checkbox.php?id=$value[Id]'>Edit</a> <a class='btn btn-primary btn-sm' href='edit-checkbox.php?id=$value[Id]'>Delete</a></td></tr>";
                }
            }
            ?>
        </table>
          
          
				<div  class="contactForm">
		

		<!--<div class="form-group">
						<label for="">Subject</label>
						<select class="form-control" name="subject" id="subject">
						  <option>Subject</option>
						  
						  <option value="kannada">Kannada</option>
						  <option value="English">English</option>
						  <option value="Mathematics">Mathematics</option>
						  <option value="History">History</option>
						  <option value="Geography">Geography</option>
						  <option value="Chemistry">Chemistry</option>
						  <option value="Bio-logy">Bio-logy</option>
						  <option value="Computer-science">Computer-science</option>
						  <option value="Electronics">Electronics</option>
						  <option value="Statistics">Statistics</option>
						  <option value="Economics">Economics</option>
						  
						 
						  
						  
						  
						</select>
			</div>

		

		<div class="form-group">

 			<input type="number"class="form-control" name="teaching" id="teaching" placeholder="Experience"  style="border-radius: 5px;">
		 	<span class="error_message" id="teaching_error"></span>
		</div>
		<div class="form-group">

			<input  class="form-control" type="text"   name="mobile" id="mobile" placeholder="Your Mobile Number" required="required" />

			<span class="error_message" id="mobile_error"></span>

		</div>
		<div class="form-group">

			<input type="text "class="form-control" id="addr" name="addr" placeholder="Address" required="required"/>

		</div>
            <div class="text-center"><button type="submit" name="submit" id="submit"class="btn btn-primary btn-lg" >Update Tutor</button></div>
          
		  <div class="row"><div class=""  id="result"></div></div>-->
		   <!--<div class="text-center"><button type="submit" name="submit" id="TimeSlots"class="btn btn-primary btn-lg"href="index.php" >Update Time Slots</button></div>
		    <div class="text-center"><button type="submit" name="submit" id="Requests"class="btn btn-primary btn-lg" >View Requests</button></div>
		     <div class="text-center"><button type="submit" name="submit" id="Update Info"class="btn btn-primary btn-lg" >Update Info</button></div>-->
		  

<div><a class="btn btn-danger"href="timeslots.php">Update Time Slots</a></div>
		  </div>
		

    </div>

	
	<div class="col-md-1"></div>
				
				<div class="col-md-5 teacherinfo"> 
					<h3>Account Details </h3>
					
					
					

	
	
		

	<div class="single-tutor">
		<div class="tutor-are">
				<div class=""><h3><?php echo $name ?></h3></div>
				
		
		</div>
			
			
			<p><span>Email:</span> <?php echo $email ?></p>
			<p><span>Number:</span> <?php echo $number ?></p>
			<p><span>Teaching Experience:</span> <?php echo $teaching ?></p>
			<p><span>Address:</span> <?php echo $address ?></p>
			<p><span>Subject:</span> <?php echo $subject ?></p>
			
		</div>
	

				
				</div>
   
   
   </div>
      </div>
      <!--/.row-->
    </div>
	<!--/.container-->
		
  </section>
 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script >
	    $(function () {
	        $('#datepicker').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        autoclose: true,
		        changeMonth: true,
		        changeYear: true,
		        orientation: "button"
	        });
	    });
	</script>
 
<script src="js/jquery-2.js"></script>
<script type="text/javascript"> 
	
		$(document).ready(function(){
		
		$("#submit").click(function(){
		
		
		var t_mob=$("#mobile").val();
		var t_area=$("#addr").val();
		var sub=$("#subject").val();
		var t_teaching=$("#teaching").val();
		

	
		
					$.ajax({
				
				
				url:'inc/updatetutor.php',
				data:{mobile:t_mob,teaching:t_teaching,subject:sub,address:t_area},
				type:'POST',
				success:function(data){
					$("#result").html(data);
					
					
				}
				
				
				
			});
			
	
			
		
		
		
	
		});
		

		});
	
	
	
	
	
	
	
	
	
	</script> 



<?php include("footer.php"); ?>