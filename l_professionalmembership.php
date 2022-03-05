
<?php

session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");


$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from ProfessionalMemberships where FacultyID = '$input'");


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
              <h2>Professional Membership<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
        <a href="../forms/f_professionalmembership.html"><button class="button">+ Add New Membership</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <tr>
              <th>ID</td>
              <th>Professional Membership</th>
              <th>Years</th>
              <th>Scope</th>
              <th>View</td>
            </tr>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){
            ?>

          <tr>
              <td><?php echo $row['PMID'] ?></td>
              <td><?php echo $row['ProfessionalMembership'] ?></td>
              <td><?php echo $row['Years'] ?></td>
              <td><?php echo $row['Scope'] ?></td>
              <?php echo "<td><a href='v_professionalmembership.php?id=".$row['PMID']."'>View</a></td>" ?>
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

