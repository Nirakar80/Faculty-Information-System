<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from Books where ID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql))
{ 
   $ID = $row['ID'];
   $Category = $row['Category'];
   $Title = $row['Title'];
   $Status = $row['sStatus'];
   $YearContracted = $row['YearContracted'];
   $AcademicYear = $row['AcademicYear'];
   $ResearchType = $row['ResearchType'];
   $Refereed = $row['Refereed'];
   $sDescription = $row['sDescription'];
}
?>


<!DOCTYPE html>
<html>
 <head>
   <title>Books, Monograph, Compilation or Manual/Guide Form</title>
   <link rel = "stylesheet" href = "style.css">
 </head>
  <body>
    <div class="main">
      <h1>Results</h1><hr>
      <br>
      <form action="../modify/up_books.php" method="post">
        
        <label> Category:</label>
        <select name="category" id="category">
          <option value="---">- - - </option>
          <option value="Book" <?php if($Category == 'book' || $Category == 'Book' ){ echo ' selected="selected"'; } ?>>Book</option>
          <option value="Monograph" <?php if($Category == 'monograph' || $Category == 'Monograph'){ echo ' selected="selected"'; } ?>>Monograph</option>
          <option value="Compilation" <?php if($Category == 'compilation' || $Category == 'Compilation'){ echo ' selected="selected"'; } ?>>Compilation</option>
          <option value="Manual" <?php if($Category == 'manual' || $Category == 'Manual'){ echo ' selected="selected"'; } ?>>Manual/Guide</option>
        </select><br><br>

        <label> Title:</label>
        <input type="text" name="title" maxlength="100" size="15" value='<?php echo $Title; ?>'/><br><br>

        <label>Status:</label>
        <select name="status" id="status">
          <option value="---">- - - </option>
          <option value="Draft" <?php if($Status == 'Draft'){ echo ' selected="selected"'; } ?>>Draft</option>
          <option value="Proposed" <?php if($Status == 'Proposed'){ echo ' selected="selected"'; } ?>>Proposed</option>
          <option value="Under Contract" <?php if($Status == 'Under Contract'){ echo ' selected="selected"'; } ?>>Under Contract</option>
          <option value="Under Review" <?php if($Status == 'Under Review'){ echo ' selected="selected"'; } ?>>Under Review</option>
          <option value="Accepted" <?php if($Status == 'Accepted'){ echo ' selected="selected"'; } ?>>Accepted</option>
          <option value="In Press" <?php if($Status == 'In Press'){ echo ' selected="selected"'; } ?>>In Press</option>
          <option value="Published" <?php if($Status == 'Published'){ echo ' selected="selected"'; } ?>>Published</option>
          <option value="E-book" <?php if($Status == 'E-book'){ echo ' selected="selected"'; } ?>>E-Book</option>
        </select><br><br>
        
        <label> Year Contracted:</label>
        <input type="text" name="yearContracted" maxlength="11" size="15" value='<?php echo $YearContracted; ?>'/><br><br>

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

        <label> Refereed: </label>
        <select name="refereed" id="refereed">
          <option value="---">- - - </option>
          <option value="Yes" <?php if($Refereed == 'Yes'){ echo ' selected="selected"'; } ?>>Yes</option>
          <option value="No" <?php if($Refereed == 'No'){ echo ' selected="selected"'; } ?>>No</option>
        </select><br><br>
        
        
        <label> Description: </label><br>
        <textarea type="textarea" rows="11" cols ="80" name="description" maxlength="250" value='<?php echo $sDescription; ?>'><?php echo $sDescription?></textarea><br><br>
        <input type="submit" name="submit" value="Update"/>
     

        <?php 
            echo "
            <a href='l_books.php'>Return to List</a>
            </form>
    </div>
    </body>
</html>";

        $mysql_close();

?>
