<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ConferencePresentations where ID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql))
{ 
   $ID = $row['ID'];
   $TitleofPresentation = $row['TitleofPresentation'];
   $Conference = $row['Conference'];
   $Type = $row['sType'];
   $Status = $row['sStatus'];
   $YearAccepted = $row['YearAccepted'];
   $AcademicYear = $row['AcademicYear'];
   $ResearchType = $row['ResearchType'];
   $Scope = $row['Scope'];
   $Refereed = $row['Refereed'];
   $PresentationType = $row['PresentationType'];
   $sDescription = $row['sDescription'];
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Conference Presentations</title>
   <link rel = "stylesheet" href = "style.css">
 </head>
  <body>
    <div class="main">
      <h1>Results</h1><hr>
      <br>
      <form action="../modify/up_conferencepresentations.php" method="post">
        <label> Title of Presentation:</label>
        <input type="text" name="titleOfPresentation" maxlength="100" size="15" value='<?php echo $TitleofPresentation; ?>'/><br><br>
        
        <label> Conferece/Event:</label>
        <input type="text" name="conference" maxlength="11" size="15" value='<?php echo $Conference; ?>'/><br><br>
        
        <label> Type:</label>
        <select name="type" id="type">
          <option value="---">- - - </option>
          <option value="Academic" <?php if($Type == 'Academic'){ echo ' selected="selected"'; } ?>>Academic</option>
          <option value="Professional" <?php if($Type == 'Professional'){ echo ' selected="selected"'; } ?>>Professional</option>
        </select><br><br>
        
        <label> Status:</label>
        <select name="status" id="status">
          <option value="---">- - - </option>
          <option value="Accepted" <?php if($Status == 'Accepted'){ echo ' selected="selected"'; } ?>>Accepted</option>
          <option value="Presented" <?php if($Status == 'Presented' || $Status == 'Presented'){ echo ' selected="selected"'; } ?>>Presented</option>
        </select><br><br>
        
        <label> Year Acccepted:</label>
        <input type="text" name="yearAccepted" maxlength="11" size="15" value='<?php echo $YearAccepted; ?>'/><br><br>
        
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
        
        <label> Scope : </label>
        <select name="scope" id="scope" >
            <option value="---">- - - </option>
            <option value="International" <?php if($Scope == 'International'){ echo ' selected="selected"'; } ?>>International</option>
            <option value="National" <?php if($Scope == 'National'){ echo ' selected="selected"'; } ?>>National</option>
            <option value="State" <?php if($Scope == 'State'){ echo ' selected="selected"'; } ?>>State</option>
            <option value="Regional" <?php if($Scope == 'Regional'){ echo ' selected="selected"'; } ?>>Regional</option>
            <option value="Local" <?php if($Scope == 'Local'){ echo ' selected="selected"'; } ?>>Local</option>
            <option value="Virtual" <?php if($Scope == 'Virtual'){ echo ' selected="selected"'; } ?>>Virtual</option>
        </select><br><br>

        <label> Refereed: </label>
        <select name="refereed" id="refereed">
          <option value="---">- - - </option>
          <option value="Yes" <?php if($Refereed == 'Yes'){ echo ' selected="selected"'; } ?>>Yes</option>
          <option value="No" <?php if($Refereed == 'No'){ echo ' selected="selected"'; } ?>>No</option>
        </select><br><br>
                
        <label>Presentation Type:</label>
        <select name="presentationType" id="presentationType">
          <option value="---">- - - </option>
          <option value="Independent Paper" <?php if($PresentationType == 'Independent Paper'){ echo ' selected="selected"'; } ?>>Paper(Independent)</option>
          <option value="Symposium Paper" <?php if($PresentationType == 'Symposium Paper'){ echo ' selected="selected"'; } ?>>Paper(Part of Symposium)</option>
          <option value="Exhibit" <?php if($PresentationType == 'Exhibit'){ echo ' selected="selected"'; } ?>>Exhibit</option>
          <option value="Podium Presentation" <?php if($PresentationType == 'Podium Presentation'){ echo ' selected="selected"'; } ?>>Podium Presentation</option>
          <option value="Roundtable" <?php if($PresentationType == 'Roundtable'){ echo ' selected="selected"'; } ?>>Round-Table Discussion</option>
          <option value="Symposium" <?php if($PresentationType == 'Symposium'){ echo ' selected="selected"'; } ?>>Symposium</option>
          <option value="Virtual" <?php if($PresentationType == 'Virtual'){ echo ' selected="selected"'; } ?>>Virtual</option>
        </select><br><br>       
        
        <label> Description: </label><br>
        <textarea type="textarea" rows="11" cols ="80" name="description" maxlength="250" value='<?php echo $sDescription; ?>'><?php echo $sDescription?></textarea><br><br>
        <input type="submit" name="submit" value="Update"/>
      
    
        <?php 
            echo "
            <a href='./l_conferencepresentations.php'>Return to List</a>
            </form>
    </div>
    </body>
</html>";

        $mysql_close();

?>
