<?php

session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from MembersList");


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
              <h2>Members List<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
         <a href="../forms/f_memberslist.html"><button class="button">+ Add New Member</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">


          <table>
            <thead>
              <tr>
                <th>MemberID</td>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Status</th>
                <th>HighDegree</th>
                <th>Year Awarded</th>
                <th>Email</th>
                <th>View</th>
              </tr>
            <thead>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){?>

          <tr>
              <td><?php echo $row['MemberID'] ?></td>
              <td><?php echo $row['FirstName'] ?></td>
              <td><?php echo $row['LastName'] ?></td>
              <td><?php echo $row['Status'] ?></td>
              <td><?php echo $row['HighDegree'] ?></td>
              <td><?php echo $row['YearAwarded'] ?></td>
              <td><?php echo $row['Email'] ?></td>
              <?php echo "<td><a href='v_memberslist.php?id=".$row['ID']."'>View</a></td>" ?>
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