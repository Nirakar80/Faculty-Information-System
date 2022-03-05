
<?php
session_start();
mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from GrantsandGifts where FacultyID = '$input'");


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
              <h2>Grants and Gifts<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
          <a href="../forms/f_grantsandgifts.html"><button class="button">+ Add Grant</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <tr>
              <th>ID</td>
              <th>Title</th>
              <th>Type</th>
              <th>Status</th>
              <th>Year Accepted</th>
              <th>Academic Year</th>
              <th>New/Continuing</th>
              <th>Source</th>
              <th>Research Type</th>
              <th>Funding Agency</th>
              <th>Role</th>
              <th>View</td>
            </tr>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){
            ?>

          <tr>
              <td><?php echo $row['ID'] ?></td>
              <td><?php echo $row['GrantorGiftTitle'] ?></td>
              <td><?php echo $row['GrantorGiftType'] ?></td>
              <td><?php echo $row['sStatus'] ?></td>
              <td><?php echo $row['YearAccepted'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <td><?php echo $row['NeworContinuing'] ?></td>
              <td><?php echo $row['Source'] ?></td>
              <td><?php echo $row['ResearchType'] ?></td>
              <td><?php echo $row['FundingAgency'] ?></td>
              <td><?php echo $row['sRole'] ?></td>
              <?php echo "<td><a href='v_grantsandgifts.php?id=".$row['ID']."'>View</a></td>" ?>
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

