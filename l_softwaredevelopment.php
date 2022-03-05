
<?php

session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");


$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from SoftwareDevelopment where FacultyID = '$input'");


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
              <h2>Software Development<h2>
            </ul>
        </div>
        <!-- Navbar End -->



        <!-- Buttons Area  -->
        <div class="button-area">
         <a href="../forms/f_softwaredevelopment.html"><button class="button">+ Add New Software Development</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <tr>
              <th>ID</td>
              <th>Software Title</th>
              <th>Year Completed</th>
              <th>Academic Year</th>
              <th>Research Type</td>
              <th>Options</td>
              <th>View</td>
            </tr>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){
            ?>

          <tr>
              <td><?php echo $row['SWDID'] ?></td>
              <td><?php echo $row['SoftwareTitle'] ?></td>
              <td><?php echo $row['YearCompleted'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <td><?php echo $row['ResearchType'] ?></td>
              <td><?php echo $row['Options'] ?></td>
              <?php echo "<td><a href='v_softwaredevelopment.php?id=".$row['SWDID']."'>View</a></td>" ?>
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

