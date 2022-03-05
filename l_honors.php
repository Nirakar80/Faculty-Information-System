<?php

session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");


$input = $_SESSION['facultyid'];

$sql=mysql_query("select * from Honors where FacultyID = '$input'");


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
              <h2>Honors<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
          <a href="../forms/f_honors.html"><button class="button">+ Add New Honor</button></a>
         
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <thead>
              <tr>
                <th>ID</td>
                <th>Title</th>
                <th>Organization</th>
                <th>Academic Year</th>
                <th>Type</th>
                <th>Category</th>
                <th>Status</th>
                <th>View</td>
              </tr>
            <thead>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){?>

          <tr>
              <td><?php echo $row['HonorsID'] ?></td>
              <td><?php echo $row['Title'] ?></td>
              <td><?php echo $row['Organization'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <td><?php echo $row['Type'] ?></td>
              <td><?php echo $row['Category'] ?></td>
              <td><?php echo $row['Status'] ?></td>
              <?php echo "<td><a href='v_honors.php?id=".$row['HonorsID']."'>View</a></td>" ?>
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

