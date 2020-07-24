
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_POST['pwd']==$_POST['pwdc'])
{
$name=mysqli_real_escape_string($conn,$_POST['name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$number=mysqli_real_escape_string($conn,$_POST['number']);
$password=mysqli_real_escape_string($conn,$_POST['pwd']);
$passwordc=mysqli_real_escape_string($conn,$_POST['pwdc']);
$birth=mysqli_real_escape_string($conn,$_POST['birthday']);
$sql = "INSERT INTO  signup (id,name,email,number,password,birthday) VALUES(null,'$name','$email',$number,'$password','$birth')";

if ($conn->query($sql) === TRUE)
{
  echo "Signup successfully!, Login to begin.";
  header("Refresh:2;url=Login.html");
exit();
}
else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
  header("Refresh:2;url=Signup.html");
}
}
else
{
    echo"Password do not match!, try again.";
    header("Refresh:2;url=Signup.html");
}
$conn->close();
?>
