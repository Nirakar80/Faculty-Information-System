
<?php
session_start();
mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from ResearchReports where FacultyID = '$input'");


$result = mysqli_query($connect, $sql);

?>



<!DOCTYPE html>
<html>
<head>
   <title> Faculty Entry </title>
   <link rel="stylesheet" href="list.css">
 </head>
    <body>



        <!-- Navbar -->
        <div class="navbar">
            <ul>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
              <h2>Research and Reports<h2>
            </ul>
        </div>
        <!-- Navbar End -->

        <!-- Buttons Area  -->
        <div class="button-area">
          <a href="../forms/f_researchreports.html"><button class="button">+ Add New Report</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <tr>
              <th>ID</td>
              <th>Title</th>
              <th>Institution</th>
              <th>Year Submitted</th>
              <th>Academic Year</th>
              <th>Research Type</th>
              <th>View</td>
            </tr>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){
            ?>

          <tr>
              <td><?php echo $row['ID'] ?></td>
              <td><?php echo $row['ResearchandReportTitle'] ?></td>
              <td><?php echo $row['InstitutionSubmitted'] ?></td>
              <td><?php echo $row['YearSubmitted'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <td><?php echo $row['ResearchType'] ?></td>
              <?php echo "<td><a href='v_researchreports.php?id=".$row['ID']."'>View</a></td>" ?>
          </tr>

          <?php 
          }

          //echo $output;		
          ?>
          </table>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>

