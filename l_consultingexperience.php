<?php

session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");


$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from ConsultingExperience where FacultyID = '$input'");


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
              <h2>Consulting Experience<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
        <a href="../forms/f_consultingexperience.html"><button class="button">+ Add New Experience</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <thead>
              <tr>
                <th>ID</td>
                <th>Activity</th>
                <th>Organization</th>
                <th>Academic Year</th>
                <th>View</td>
              </tr>
            <thead>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){?>

          <tr>
              <td><?php echo $row['ceID'] ?></td>
              <td><?php echo $row['Activity'] ?></td>
              <td><?php echo $row['Company'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <?php echo "<td><a href='v_consultingexperience.php?id=".$row['ceID']."'>View</a></td>" ?>
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