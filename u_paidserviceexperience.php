<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from PaidServiceExperience where PSEID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){


    $PSEID = $row['PSEID'];  
    $Activity = $row['Activity']; 
    $Company = $row['Company'];
    $FromYear = $row['FromYear']; 
    $ToYear = $row['ToYear'];
    $Location = $row['Location'];
    $Description =  $row['Description'];
   
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Paid Service Experience</title>
   <link rel = "stylesheet" href="./style.css">
 </head>
  <body>

    <div class="main">
      <h1> Results </h1><hr>
      <br>


      <form action="../modify/up_paidserviceexperience.php" method="post">

        <label> Activity: </label>
        <input type="text" name="activity" value='<?php echo $Activity ?>' /><br>

        <label> Company/Organization: </label>
        <input type="text" name="company" value='<?php echo $Company ?>' /><br>

        <label> From Year: </label>
        <input type="text" name="fromYear" value='<?php echo $FromYear ?>' /><br>

        <label> To Year: </label>
        <input type="text" name="toYear" value='<?php echo $ToYear?>' /><br>

        <label> Location: </label>
        <input type="text" name="location" value='<?php echo $Location?>' /><br>

        <label> Description (optional): </label>
        <textarea type="text" rows="10" name="desc" value='<?php echo $Description?>' ><?php echo $Description?></textarea><br>
        
        <input type="submit" name="submit" value="Update"/>
      
            
        <?php 
            echo "
            <a href='l_paidserviceexperience.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>