<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ProfessionalDevelopment where PDID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){

    $PDID = $row['PDID'];
    $Activity = $row['Activity'];
    $Event = $row['Event'];
    $AcademicYear = $row['AcademicYear'];
    $Scope = $row['Scope'];
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


      <form action="../modify/up_professionaldevelopment.php" method="post">

        <label> Type of Activity: </label>
        <select name="activity" id="activity">
            <option value="---">- - - </option>
            <option value="Research-Related Conference/Seminar" <?php if($Activity == 'Research-Related Conference/Seminar'){ echo ' selected="selected"'; }?> >Research-Related Conference/Seminar</option>
            <option value="Assurance of Learning-Professional Development" <?php if($Activity == 'Assurance of Learning-Professional Development'){ echo ' selected="selected"'; }?> >Assurance of Learning-Professional Development</option>
            <option value="Instructional-Related Conference" <?php if($Activity == 'Instructional-Related Conference'){ echo ' selected="selected"'; }?> >Instructional-Related Conference</option>
            <option value="Professional Seminar/Workshop" <?php if($Activity == 'Professional Seminar/Workshop'){ echo ' selected="selected"'; }?> >Professional Seminar/Workshop</option>
            <option value="Technology-Related Training" <?php if($Activity == 'Technology-Related Training'){ echo ' selected="selected"'; }?> >Technology-Related Training</option>
            <option value="Sabbatical" <?php if($Activity == 'Sabbatical'){ echo ' selected="selected"'; }?> >Sabbatical</option>
            <option value="Other Professional Development" <?php if($Activity == 'Other Professional Development'){ echo ' selected="selected"'; }?> >Other Professional Development</option>
        </select><br>

        <label> Conference/Event: </label>
        <input type="text" name="event" value='<?php echo $Event ?>' /><br>

        <label> Academic Year: </label>
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

        <label> Scope : </label>
        <select name="scope" id="scope">
            <option value="---">- - - </option>
            <option value="International" <?php if($Scope == 'International'){ echo ' selected="selected"'; }?> >International</option>
            <option value="National" <?php if($Scope == 'National'){ echo ' selected="selected"'; }?> >National</option>
            <option value="State" <?php if($Scope == 'State'){ echo ' selected="selected"'; }?> >State</option>
            <option value="Regional" <?php if($Scope == 'Regional'){ echo ' selected="selected"'; }?> >Regional</option>
            <option value="Local" <?php if($Scope == 'Local'){ echo ' selected="selected"'; }?> >Local</option>
            <option value="Virtual" <?php if($Scope == 'Virtual'){ echo ' selected="selected"'; }?> >Virtual</option>
        </select><br>

        <label> Description (optional): </label>
        <textarea type="text" rows="10" name="desc"><?php echo $Description?></textarea><br>

        <input type="submit" name="submit" value="Update"/>

      
            
        <?php 
            echo "
            <a href='l_professionaldevelopment.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>