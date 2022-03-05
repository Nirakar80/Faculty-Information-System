<?php

session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from CoursesList");


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
              <li><a href="../MenuPages/adminmenu.html">Menu</a></li>
              <h2>Courses List<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
          <a href="../forms/f_courseslist.html"><button class="button">+ Add New Course</button></a>     
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <thead>
              <tr>
                <th>courseID</td>
                <th>Department</th>
                <th>CourseNumber</th>
                <th>CourseTitle</th>
                <th>View</th>
              </tr>
            <thead>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){?>

          <tr>
              <td><?php echo $row['courseID'] ?></td>
              <td><?php echo $row['Department'] ?></td>
              <td><?php echo $row['CourseNumber'] ?></td>
              <td><?php echo $row['CourseTitle'] ?></td>
              <?php echo "<td><a href='v_courseslist.php?id=".$row['courseID']."'>View</a></td>" ?>
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