<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ProfessionalStaff where PSID = $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){

    $StaffID = $row['StaffID'];
    $FirstName = $row['FirstName'];
    $MiddleName = $row['MiddleName'];
    $LastName =  $row['LastName'];
    $Email =  $row['Email'];
    $Status =  $row['Status'];
    $HighDegree =  $row['HighDegree'];
    $YearAwarded =  $row['YearAwarded'];
    $College =  $row['College'];
    $HireTerm =  $row['HireTerm'];
    $Rank =  $row['Rank'];

   
}
?>

<!DOCTYPE html>
<html>
<head>
   <title> Staff List</title>
   <link rel = "stylesheet" href="./style.css">
 </head>
  <body>

    <div class="main">
      <h1> Results </h1><hr>
      
      <form action="../modify/up_professionalstaff.php" method="post">
        <label>  ID: </label>
        <input type="text" name="memberID" value='<?php echo $StaffID; ?>'/><br>

        <label> First Name: </label>
        <input type="text" name="fname" value='<?php echo $FirstName; ?>'/><br>

        <label> Middle Name/Initial: </label>
        <input type="text" name="mname" value='<?php echo $MiddleName; ?>'/><br>

        <label> Last Name: </label>
        <input type="text" name="lname" value='<?php echo $LastName; ?>'/><br>

        <label> Caldwell Email: </label>
        <input type="text" name="cemail" value='<?php echo $Email; ?>'/><br>
        <hr>


        <label> Status: </label>
        <select name="status" id="status">
            <option value="---">- - -</option>
            <option value="Full-Time(Salary)" <?php if($Status == 'Full-Time(Salary)'){ echo ' selected="selected"'; }?> >Full-Time(Salary)</option>
            <option value="Full-Time(Hourly)" <?php if($Status == 'Full-Time(Hourly)'){ echo ' selected="selected"'; }?> >Full-Time(Hourly)</option>
            <option value="Part-Time" <?php if($Status == 'Part-Time'){ echo ' selected="selected"'; }?> >Part-Time</option>
        </select><br>

        <hr>
        <label> High Degree: </label>
        <input type="text" name="highDegree" value='<?php echo $HighDegree; ?>'></input><br>

        <label> Year Awarded: </label>
        <input type="text" name="yearAwarded" value='<?php echo $YearAwarded; ?>'></input><br>

        <label> College/University: </label>
        <input type="text" name="college" value='<?php echo $College; ?>'></input><br>

        <label> Hire Term: </label>
        <select name="hireTerm" id="hireTerm">
            <option value="---">- - -</option>
            <option value="fall" <?php if($HireTerm == 'fall'){ echo ' selected="selected"'; }?>>Fall</option>
            <option value="winter" <?php if($HireTerm== 'winter'){ echo ' selected="selected"'; }?>>Winter</option>
            <option value="spring" <?php if($HireTerm == 'spring'){ echo ' selected="selected"'; }?>>Spring</option>
            <option value="summer" <?php if($HireTerm == 'summer'){ echo ' selected="selected"'; }?>>Summer</option>
        </select><br>
        
        <label> Rank: </label>
        <select name="rank" id="rank">
            <option value="---">- - -</option>
            <option value="Adjunct Lecturer" <?php if($Rank == 'Adjunct Lecturer'){ echo ' selected="selected"'; }?>>Adjunct Lecturer</option>
            <option value="Assistant Professor" <?php if($Rank== 'Assistant Professor'){ echo ' selected="selected"'; }?>>Assistant Professor</option>
            <option value="Associate Professor" <?php if($Rank == 'Associate Professor'){ echo ' selected="selected"'; }?>>Associate Professor</option>
            <option value="Professor" <?php if($Rank == 'Professor'){ echo ' selected="selected"'; }?>>Professor</option>
            <option value="Staff" <?php if($Rank == 'Staff'){ echo ' selected="selected"'; }?>>Staff</option>
        </select><br>

        <input type="submit" name="submit" value="Submit"/>

        

            
        <?php 
            echo "
            <a href='l_professionalstaff.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>