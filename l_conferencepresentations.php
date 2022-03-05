
<?php
session_start();
mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from ConferencePresentations where FacultyID = '$input'");


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
              <h2>Conference Presentations<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
          <a href="../forms/f_conferencepresentations.html"><button class="button">+ Add New Presentation</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <tr>
              <th>ID</td>
              <th>Title of Presentation</th>
              <th>Conference</th>
              <th>Type</th>
              <th>Status</th>
              <th>Year Accepted</th>
              <th>Academic Year</th>
              <th>Research Type</th>
              <th>Scope</th>
              <th>Refereed</th>
              <th>Presentation Type</th>
              <th>View</td>
            </tr>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){
            ?>

          <tr>
              <td><?php echo $row['ID'] ?></td>
              <td><?php echo $row['TitleofPresentation'] ?></td>
              <td><?php echo $row['Conference'] ?></td>
              <td><?php echo $row['sType'] ?></td>
              <td><?php echo $row['sStatus'] ?></td>
              <td><?php echo $row['YearAccepted'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <td><?php echo $row['ResearchType'] ?></td>
              <td><?php echo $row['Scope'] ?></td>
              <td><?php echo $row['Refereed'] ?></td>
              <td><?php echo $row['PresentationType'] ?></td>
              <?php echo "<td><a href='v_conferencepresentations.php?id=".$row['ID']."'>View</a></td>" ?>
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

