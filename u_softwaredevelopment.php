<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from SoftwareDevelopment where SWDID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql)){

  $ID = $row['SWDID'];
  $SoftwareTitle = $row['SoftwareTitle'];
  $YearCompleted = $row['YearCompleted'];
  $AcademicYear = $row['AcademicYear'];
  $ResearchType = $row['ResearchType'];
  $Options =  $row['Options'];
   
}
?>

<!DOCTYPE html>
<html>
 <head>
   <title> FacInfo </title>
   <link rel="stylesheet" href="style.css">
 </head>
  <body>
    <div class="main">
      <h1> Results</h1><hr>
      <p> Please fill all the fields below. </p>
      <form action="../modify/up_softwaredevelopment.php" method="post">
        <label> Software Title: </label>
        <input type="text" name="stitle" value='<?php echo $SoftwareTitle; ?>'/><br>
        
        <label> Year Completed: </label>
        <input type="text" name="yearCompleted" value='<?php echo $YearCompleted; ?>'/><br>
        
        <label> Academic Year:</label>
        <select name="ayear" id="ayear">
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
        <select name="research" id="research" >
          <option value="---">- - - </option>
          <option value="Scholarship of Discovery" <?php if($ResearchType == 'Scholarship of Discovery'){ echo ' selected="selected"'; } ?>>Scholarship of Discovery</option>
          <option value="Scholarship of Application" <?php if($ResearchType == 'Scholarship of Application'){ echo ' selected="selected"'; } ?>>Scholarship of Application</option>
          <option value="Scholarship of Teaching" <?php if($ResearchType == 'Scholarship of Teaching'){ echo ' selected="selected"'; } ?>>Scholarship of Teaching</option>
          <option value="Scholarship of Integration" <?php if($ResearchType == 'Scholarship of Integration'){ echo ' selected="selected"'; } ?>>Scholarship of Integration</option>
          <option value="Not counted as Separate Intellectual Contribution" <?php if($ResearchType == 'Not counted as Separate Intellectual Contribution'){ echo ' selected="selected"'; } ?>>Not counted as Separate Intellectual Contribution</option>
        </select><br><br>
        
        <label> Choose all that apply: </label>
        <select name="options" multiple>
            <option value="Is BOTH Refereed and Publicly Available" <?php if($Options == 'Is BOTH Refereed and Publicly Available'){ echo ' selected="selected"'; } ?>>Is BOTH Refereed and Publicly Available</option>
            <option value="Instructional Software" <?php if($Options == 'Instructional Software'){ echo ' selected="selected"'; } ?>>Instructional Software</option>
            <option value="International Activity" <?php if($Options == 'International Activity'){ echo ' selected="selected"'; } ?>>International Activity</option>
            <option value="Commercial Product" <?php if($Options == 'Commercial Product'){ echo ' selected="selected"'; } ?>>Commercial Product</option>
            <option value="Software Revision" <?php if($Options == 'Software Revision'){ echo ' selected="selected"'; } ?>>Software Revision</option>
        </select><br>
        <input type="submit" name="submit" value="Update"/>
    
           
        <?php 
            echo "
            <a href='l_softwaredevelopment.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>
