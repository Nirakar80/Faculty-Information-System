<?php

session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from ProfessionalStaff");


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
              <h2>Professional Staff<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
          <a href="../forms/f_professionalstaff.html"><button class="button">+ Add New Staff</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <thead>
              <tr>
                <th>StaffID</td>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Status</th>
                <th>HighDegree</th>
                <th>YearAwarded</th>
                <th>College</th>
                <th>HireTerm</th>
                <th>Rank</th>
                <th>View</td>
              </tr>
            <thead>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){?>

          <tr>
              <td><?php echo $row['StaffID'] ?></td>
              <td><?php echo $row['FirstName'] ?></td>
              <td><?php echo $row['LastName'] ?></td>
              <td><?php echo $row['Status'] ?></td>
              <td><?php echo $row['HighDegree'] ?></td>
              <td><?php echo $row['YearAwarded'] ?></td>
              <td><?php echo $row['College'] ?></td>
              <td><?php echo $row['HireTerm'] ?></td>
              <td><?php echo $row['Rank'] ?></td>
              <?php echo "<td><a href='v_professionalstaff.php?id=".$row['PSID']."'>View</a></td>" ?>
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