<?php

session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");


$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from ProfessionalDevelopment where FacultyID = '$input'");


$result = mysqli_query($connect, $sql);

?>

<!DOCTYPE html>
<html>
<head>
   <title> Faculty Entry </title>
   <link rel="stylesheet" href="rlist.css">
 </head>
    <body>



        <!-- Navbar -->
        <div class="navbar">
            <ul>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
        <a href="../forms/f_professionaldevelopment.html"><button class="button">+ Add New Professional Development</button></a>
        <a href="l_professionaldevelopment.php" style="float: right;"><button class="button">Table View</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

            
          <?php 
          while($row=mysql_fetch_assoc($sql)){?>

            <div class="card">
                <div class="container">
                    <h2><?php echo $row['Activity'] ?></h2>
                    <p><?php echo $row['Event'] ?></p>
                    <p>Academic Year : <?php echo $row['AcademicYear'] ?></p>
                    <p>Scope : <?php echo $row['Scope'] ?></p>
                    <b><p>Description :</p></b>
                    <p><?php echo $row['Description'] ?></p>
                    <?php echo "<p><a href='u_professionaldevelopment.php?id=".$row['PDID']."'>Edit</a>&nbsp;&nbsp;&nbsp;
                    <a href='../modify/d_professionaldevelopment.php?id=".$row['PDID']."'>Delete</a></p></p>" ?>
                </div>
            </div>

          <?php 
          }

          //echo $output;		
          ?>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>