<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from PatentsandTrademarks where ID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql)){

  $ID = $row['ID'];
  $PatentTitle = $row['PatentTitle'];
  $Status = $row['sStatus'];
  $YearSubmitted = $row['YearSubmitted'];
  $AcademicYear = $row['AcademicYear'];
  $ResearchType = $row['ResearchType'];
  $sDescription =  $row['sDescription'];
   
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Patents and Trademarks Form</title>
   <link rel = "stylesheet" href = "style.css">
 </head>
  <body>
    <div class="main">
      <h1>Results</h1><hr>
      <br>
      <form action="../modify/up_patentsandtrademarks.php" method="post">
        <label> Patent Title:</label>
        <input type="text" name="patentTitle" maxlength="100" size="15" value='<?php echo $PatentTitle; ?>'/><br><br>
        
        <label>Status:</label>
        <select name="status" id="status">
          <option value="---">- - - </option>
          <option value="Applied For" <?php if($Status == 'Applied For'){ echo ' selected="selected"'; } ?>>Applied For</option>
          <option value="Granted" <?php if($Status == 'Granted'){ echo ' selected="selected"'; } ?>>Granted</option>
          <option value="Denied" <?php if($Status == 'Denied'){ echo ' selected="selected"'; } ?>>Denied</option>
        </select><br><br>
        
        <label> Year Submitted:</label>
        <input type="text" name="yearSubmitted" maxlength="11" size="15" value='<?php echo $YearSubmitted; ?>'/><br><br>
        
        <label> Academic Year:</label>
        <select name="academicYear" id="academicYear">
          <option value="---">- - - </option>
          <option value="2010-2011" <?php if($AcademicYear == '2010-2011'){ echo ' selected="selected"'; } ?>>2010-2011</option>
          <option value="2011-2012" <?php if($AcademicYear == '2011-2012'){ echo ' selected="selected"'; } ?>>2011-2012</option>
          <option value="2012-2013" <?php if($AcademicYear == '2012-2013'){ echo ' selected="selected"'; } ?>>2012-2013</option>
          <option value="2013-2014" <?php if($AcademicYear == '2013-2014'){ echo ' selected="selected"'; } ?>>2013-2014</option>
          <option value="2014-2015" <?php if($AcademicYear == '2014-2015'){ echo ' selected="selected"'; } ?>>2014-2015</option>
          <option value="2015-2016" <?php if($AcademicYear == '2015-2016'){ echo ' selected="selected"'; } ?>>2015-2016</option>
          <option value="2016-2017" <?php if($AcademicYear == '2016-2017'){ echo ' selected="selected"'; } ?>>2016-2017</option>
          <option value="2017-2018" <?php if($AcademicYear == '2017-2018'){ echo ' selected="selected"'; } ?>>2017-2018</option>
          <option value="2018-2019" <?php if($AcademicYear == '2018-2019'){ echo ' selected="selected"'; } ?>>2018-2019</option>
          <option value="2019-2020" <?php if($AcademicYear == '2019-2020'){ echo ' selected="selected"'; } ?>>2019-2020</option>
          <option value="2020-2021" <?php if($AcademicYear == '2020-2021'){ echo ' selected="selected"'; } ?>>2020-2021</option>
          <option value="2021-2022" <?php if($AcademicYear == '2021-2022'){ echo ' selected="selected"'; } ?>>2021-2022</option>
          <option value="2022-2023" <?php if($AcademicYear == '2022-2023'){ echo ' selected="selected"'; } ?>>2022-2023</option>
          <option value="2023-2024" <?php if($AcademicYear == '2023-2024'){ echo ' selected="selected"'; } ?>>2023-2024</option>
          <option value="2024-2025" <?php if($AcademicYear == '2024-2025'){ echo ' selected="selected"'; } ?>>2024-2025</option>
          <option value="2025-2026" <?php if($AcademicYear == '2025-2026'){ echo ' selected="selected"'; } ?>>2025-2026</option>
          <option value="2026-2027" <?php if($AcademicYear == '2026-2027'){ echo ' selected="selected"'; } ?>>2026-2027</option>
          <option value="2027-2028" <?php if($AcademicYear == '2027-2028'){ echo ' selected="selected"'; } ?>>2027-2028</option>
          <option value="2028-2029" <?php if($AcademicYear == '2028-2029'){ echo ' selected="selected"'; } ?>>2028-2029</option>
          <option value="2029-2030" <?php if($AcademicYear == '2029-2030'){ echo ' selected="selected"'; } ?>>2029-2030</option>
        </select><br><br>
        
        <label> Research Type:</label>
        <select name="researchType" id="researchType" >
          <option value="---">- - - </option>
          <option value="Scholarship of Discovery" <?php if($ResearchType == 'Scholarship of Discovery'){ echo ' selected="selected"'; } ?>>Scholarship of Discovery</option>
          <option value="Scholarship of Application" <?php if($ResearchType == 'Scholarship of Application'){ echo ' selected="selected"'; } ?>>Scholarship of Application</option>
          <option value="Scholarship of Teaching" <?php if($ResearchType == 'Scholarship of Teaching'){ echo ' selected="selected"'; } ?>>Scholarship of Teaching</option>
          <option value="Scholarship of Integration" <?php if($ResearchType == 'Scholarship of Integration'){ echo ' selected="selected"'; } ?>>Scholarship of Integration</option>
          <option value="Not counted as Separate Intellectual Contribution" <?php if($ResearchType == 'Not counted as Separate Intellectual Contribution'){ echo ' selected="selected"'; } ?>>Not counted as Separate Intellectual Contribution</option>
        </select><br><br>
        
        <label> Description: </label><br>
        <textarea type="textarea" rows="11" cols ="80" name="description" maxlength="250" value='<?php echo $sDescription; ?>'><?php echo $sDescription?></textarea><br><br>
        <input type="submit" name="submit" value="Update"/>
      
    
        <?php 
            echo "
            <a href='l_patentsandtrademarks.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>
