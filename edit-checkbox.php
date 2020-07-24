<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
        include_once './checkboxClass.php';
        $checkBoxClass=new checkboxClass();
        if(isset($_POST["submit"])){
            $timeValue=  implode(",",$_POST["time"]);
            echo $checkBoxClass->updateCheckbox($timeValue, $_GET["id"]);
        }
        $list=$checkBoxClass->listCheckbox("Where Id='$_GET[id]'");
        $checkboxvalues=  explode(",", $list[0]["times"]);
        
        $list22=$checkBoxClass->getdate("Where Id='$_GET[id]'");
        $datevalues=  explode(",", $list22[0]["date"]);
        foreach($datevalues as $datevalue){
        echo "<br>You have selected the following time slots on " . $datevalue. "\n <br>";
}

        foreach($checkboxvalues as $cbv){
    echo $cbv . "\n <br>";
}
echo "Please Select your New Timeslots<br>";
?>
<?php
session_start();
$date1 = $_SESSION['dateValue'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Checkbox List</title>
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/signin/signin.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        <?php
        echo $date1;
        if(in_array("00:00-01:00", $checkboxvalues)){
            $checkedValue="checked='checked'";
        }
        if(in_array("01:00-02:00", $checkboxvalues)){
            $checkedValue1="checked='checked'";
        }
        if(in_array("02:00-03:00", $checkboxvalues)){
            $checkedValue2="checked='checked'";
        }
        if(in_array("03:00-04:00", $checkboxvalues)){
            $checkedValue3="checked='checked'";
        }
        if(in_array("04:00-05:00", $checkboxvalues)){
            $checkedValue4="checked='checked'";
        }
        if(in_array("05:00-06:00", $checkboxvalues)){
            $checkedValue5="checked='checked'";
        }
        if(in_array("06:00-07:00", $checkboxvalues)){
            $checkedValue6="checked='checked'";
        }
        if(in_array("07:00-08:00", $checkboxvalues)){
            $checkedValue7="checked='checked'";
        }
        if(in_array("08:00-09:00", $checkboxvalues)){
            $checkedValue8="checked='checked'";
        }
        if(in_array("09:00-10:00", $checkboxvalues)){
            $checkedValue9="checked='checked'";
        }
        if(in_array("10:00-11:00", $checkboxvalues)){
            $checkedValue10="checked='checked'";
        }
        if(in_array("11:00-12:00", $checkboxvalues)){
            $checkedValue11="checked='checked'";
        }
        if(in_array("12:00-13:00", $checkboxvalues)){
            $checkedValue12="checked='checked'";
        }
        if(in_array("13:00-14:00", $checkboxvalues)){
            $checkedValue13="checked='checked'";
        }
        if(in_array("14:00-15:00", $checkboxvalues)){
            $checkedValue14="checked='checked'";
        }
        if(in_array("15:00-16:00", $checkboxvalues)){
            $checkedValue15="checked='checked'";
        }
        if(in_array("16:00-17:00", $checkboxvalues)){
            $checkedValue16="checked='checked'";
        }
        if(in_array("17:00-18:00", $checkboxvalues)){
            $checkedValue17="checked='checked'";
        }
        if(in_array("18:00-19:00", $checkboxvalues)){
            $checkedValue18="checked='checked'";
        }
        if(in_array("19:00-20:00", $checkboxvalues)){
            $checkedValue19="checked='checked'";
        }
        if(in_array("20:00-21:00", $checkboxvalues)){
            $checkedValue20="checked='checked'";
        }
        if(in_array("21:00-22:00", $checkboxvalues)){
            $checkedValue21="checked='checked'";
        }
        if(in_array("22:00-23:00", $checkboxvalues)){
            $checkedValue22="checked='checked'";
        }
        if(in_array("23:00-00:00", $checkboxvalues)){
            $checkedValue23="checked='checked'";
        }
        
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]."?id=$_GET[id]"; ?>" method="post">
           
            
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