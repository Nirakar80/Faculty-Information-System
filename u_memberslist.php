<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from MembersList where ID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){

    $MemberID = $row['MemberID'];
    $FirstName = $row['FirstName'];
    $MiddleName = $row['MiddleName'];
    $LastName =  $row['LastName'];
    $Email =  $row['Email'];
    $HireTerm =  $row['HireTerm'];
    $Status =  $row['Status'];
    $Involvement =  $row['Involvement'];
    $qualification =  $row['Qualification'];
    $HighDegree =  $row['HighDegree'];
    $YearAwarded =  $row['YearAwarded'];
    $College =  $row['College'];
    $Rank =  $row['Rank'];

   
}
?>

<!DOCTYPE html>
<html>
<head>
   <title> Members List</title>
   <link rel = "stylesheet" href="./style.css">
 </head>
  <body>

    <div class="main">
      <h1> Results </h1><hr>
      
      <form action="../modify/up_memberslist.php" method="post">
        <label> Member ID: </label>
        <input type="text" name="memberID" value='<?php echo $MemberID ?>' /><br>

        <label> First Name: </label>
        <input type="text" name="fname" value='<?php echo $FirstName; ?>'/><br>

        <label> Middle Name/Initial: </label>
        <input type="text" name="mname" value='<?php echo $MiddleName; ?>'/><br>

        <label> Last Name: </label>
        <input type="text" name="lname" value='<?php echo $LastName; ?>'/><br>

        <label> Caldwell Email: </label>
        <input type="text" name="cemail" value='<?php echo $Email; ?>'/><br>
        <hr>
        
        <label> Hire Term: </label>
        <select name="hireTerm" id="hireTerm">
            <option value="---">- - -</option>
            <option value="fall" <?php if($HireTerm == 'fall'){ echo ' selected="selected"'; } ?>>Fall</option>
            <option value="winter" <?php if($HireTerm == 'winter'){ echo ' selected="selected"'; } ?>>Winter</option>
            <option value="spring" <?php if($HireTerm == 'spring'){ echo ' selected="selected"'; } ?>>Spring</option>
            <option value="summer" <?php if($HireTerm == 'summer'){ echo ' selected="selected"'; } ?>>Summer</option>
        </select><br>
        
        <label> Member Status: </label>
        <select name="mstatus" id="mstatus">
            <option value="---">- - -</option>
            <option value="Tenured"> <?php if($Status == 'Tenured'){ echo ' selected="selected"'; } ?>Tenured</option>
            <option value="TenureTrack" <?php if($Status == 'TenureTrack'){ echo ' selected="selected"'; } ?>>Tenure Track</option>
            <option value="Non-Tenure" <?php if($Status == 'Non-Tenure'){ echo ' selected="selected"'; } ?>>Non-Tenure Track</option>
        </select><br>
        
        <label> Involvement: </label>
        <select name="involve" id="involve">
            <option value="---">- - -</option>
            <option value="Participating" <?php if($Involvement == 'Participating'){ echo ' selected="selected"'; } ?>>Participating</option>
            <option value="Supporting" <?php if($Involvement == 'Supporting'){ echo ' selected="selected"'; } ?>>Supporting</option>
            <option value="NA" <?php if($Involvement == 'NA'){ echo ' selected="selected"'; } ?>>N/A</option>
        </select><br>
        
        <label> Qualification: </label>
        <select name="qualf" id="qualf">
            <option value="---">- - -</option>
            <option value="AQ" <?php if($qualification == 'AQ'){ echo ' selected="selected"'; } ?>>Academically Qualified (AQ)</option>
            <option value="PQ" <?php if($qualification == 'PQ'){ echo ' selected="selected"'; } ?>>Professionally Qualified (PQ)</option>
            <option value="Both" <?php if($qualification == 'Both'){ echo ' selected="selected"'; } ?>>Both</option>
            <option value="None" <?php if($qualification == 'None'){ echo ' selected="selected"'; } ?>>None</option>
        </select><br>
        <hr>
        
        <label> High Degree: </label>
        <input type="text" name="highDegree" value='<?php echo $HighDegree; ?>'></input><br>
        
        <label> Year Awarded: </label>
        <input type="text" name="yearAwarded" value='<?php echo $YearAwarded; ?>'></input><br>
        
        <label> College/University: </label>
        <input type="text" name="college" value='<?php echo $College; ?>'></input><br>
        
        <label> Rank: </label>
        <select name="rank" id="rank">
            <option value="---">- - -</option>
            <option value="Adjunct Lecturer" <?php if($Rank == 'Adjunct Lecturer'){ echo ' selected="selected"'; }?>>Adjunct Lecturer</option>
            <option value="Assistant Professor" <?php if($Rank  == 'Assistant Professor'){ echo ' selected="selected"'; }?>>Assistant Professor</option>
            <option value="Associate Professor" <?php if($Rank  == 'Associate Professor'){ echo ' selected="selected"'; }?>>Associate Professor</option>
            <option value="Professor" <?php if($Rank  == 'Professor'){ echo ' selected="selected"'; }?>>Professor</option>
            <option value="Staff" <?php if($Rank  == 'Staff'){ echo ' selected="selected"'; }?>>Staff</option>
        </select><br>
        <input type="submit" name="submit" value="Submit"/>
        
            
        <?php 
            echo "
            <a href='l_memberslist.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>