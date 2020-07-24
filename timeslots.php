
<?php
session_start();
$emailid = $_SESSION['email'];
?>
<?php
    if(isset($_POST["submit"])){
        $timearr=$_POST["time"];
        $newvalues=  implode(",", $timearr);
        $date=$_POST["date"];
        include_once './checkboxClass.php';
        $checkBoxClass=new checkboxClass();
        $checkBoxClass->addtoDatabase($date, $newvalues, $emailid);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Choose Timeslots</title>
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>

  </head>
  <script>
$('input[name="datefilter"]').daterangepicker({
    "singleDatePicker": true,
    
}, function(start, end, label) {
  console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
});
</script>

  <body>


    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

    <input type="date" value="" name="date" id="date"/><br>
  
            
            <input type="checkbox" id="time" name="time[]" value="00:00-01:00"> 00:00-01:00<br/>
            <input type="checkbox" id="time" name="time[]" value="01:00-02:00"> 01:00-02:00<br/>
            <input type="checkbox" id="time" name="time[]" value="02:00-03:00"> 02:00-03:00<br/>
            <input type="checkbox" id="time" name="time[]" value="03:00-04:00"> 03:00-04:00<br/>
            <input type="checkbox" id="time" name="time[]" value="04:00-05:00"> 04:00-05:00<br/>
            <input type="checkbox" id="time" name="time[]" value="05:00-06:00"> 05:00-06:00<br/>
            <input type="checkbox" id="time" name="time[]" value="06:00-07:00"> 06:00-07:00<br/>
            <input type="checkbox" id="time" name="time[]" value="07:00-08:00"> 07:00-08:00<br/>
            <input type="checkbox" id="time" name="time[]" value="08:00-09:00"> 08:00-09:00<br/>
            <input type="checkbox" id="time" name="time[]" value="09:00-10:00"> 09:00-10:00<br/>
            <input type="checkbox" id="time" name="time[]" value="10:00-11:00"> 10:00-11:00<br/>
            <input type="checkbox" id="time" name="time[]" value="11:00-12:00"> 11:00-12:00<br/>
            <input type="checkbox" id="time" name="time[]" value="12:00-13:00"> 12:00-13:00<br/>
            <input type="checkbox" id="time" name="time[]" value="13:00-14:00"> 13:00-14:00<br/>
            <input type="checkbox" id="time" name="time[]" value="14:00-15:00"> 14:00-15:00<br/>
            <input type="checkbox" id="time" name="time[]" value="15:00-16:00"> 15:00-16:00<br/>
            <input type="checkbox" id="time" name="time[]" value="16:00-17:00"> 16:00-17:00<br/>
            <input type="checkbox" id="time" name="time[]" value="17:00-18:00"> 17:00-18:00<br/>
            <input type="checkbox" id="time" name="time[]" value="18:00-19:00"> 18:00-19:00<br/>
            <input type="checkbox" id="time" name="time[]" value="19:00-20:00"> 19:00-20:00<br/>
            <input type="checkbox" id="time" name="time[]" value="20:00-21:00"> 20:00-21:00<br/>
            <input type="checkbox" id="time" name="time[]" value="21:00-22:00"> 21:00-22:00<br/>
            <input type="checkbox" id="time" name="time[]" value="22:00-23:00"> 22:00-23:00<br/>
            <input type="checkbox" id="time" name="time[]" value="23:00-00:00"> 23:00-00:00<br/>
            
            
            <br/><br/>
            <input type="submit" id="submit" name="submit" value="Submit Values" class="btn btn-primary">
            <button type="button" class="btn btn-primary" id="homeButton">Back to Home</button>
        </form>
    </div> <!-- /container -->
  </body>
</html>
<script type="text/javascript">
    document.getElementById("homeButton").onclick = function () {
        location.href = "teacheradmin.php";
    };
</script>
