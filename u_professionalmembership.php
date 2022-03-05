<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ProfessionalMemberships where PMID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){

  $PMID = $row['PMID'];
  $ProfessionalMembership = $row['ProfessionalMembership'];
  $Years = $row['Years'];
  $Scope = $row['Scope'];
  $active = $row['active'];
  $Description =  $row['Description'];
   
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Professional Membership</title>
   <link rel = "stylesheet" href="./style.css">
 </head>
  <body>

    <div class="main">
      <h1> Results </h1><hr>
      <br>


        <form action="../modify/up_professionalmembership.php" method="post">
            <label> Professional Membership: </label>
            <input type="text" name="proMember" value='<?php echo $ProfessionalMembership; ?>'/><br>

            <label> Year(s): </label>
            <input type="text" name="ayear" value='<?php echo $Years; ?>' /><br>

            <label> Scope : </label>
            <select name="scope" id="scope" >
                <option value="---">- - - </option>
                <option value="International" <?php if($Scope == 'International'){ echo ' selected="selected"'; } ?> >International</option>
                <option value="National" <?php if($Scope == 'National'){ echo ' selected="selected"'; } ?>>National</option>
                <option value="State" <?php if($Scope == 'State'){ echo ' selected="selected"'; } ?>>State</option>
                <option value="Regional" <?php if($Scope == 'Regional'){ echo ' selected="selected"'; } ?>>Regional</option>
                <option value="Local" <?php if($Scope == 'Local'){ echo ' selected="selected"'; } ?>>Local</option>
                <option value="Virtual" <?php if($Scope == 'Virtual'){ echo ' selected="selected"'; } ?>>Virtual</option>
            </select><br>

            <label> Description (optional): </label>
            <textarea type="text" rows="10" name="desc" value='<?php echo $Description?>' ><?php echo $Description?></textarea><br>

            <input type="submit" name="submit" value="Update"/>

        
            
        <?php 
            echo "
            <a href='l_professionalmembership.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>
