<?php
session_start();
mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from ArticlesinProgress where FacultyID = '$input'");


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
              <h2>Articles in Progress<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
        <a href="../forms/f_articlesinprogress.html"><button class="button">+ Add New Article</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <thead>
              <tr>
                <th>ID</td>
                <th>Title of Paper</th>
                <th>Acadamic Year</th>
                <th>Research Type</th>
                <th>Type of Activity</th>
                <th>View</th>
              </tr>
            <thead>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){?>

          <tr>
              <td><?php echo $row['paperID'] ?></td>
              <td><?php echo $row['TitleofPaper'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <td><?php echo $row['ResearchType'] ?></td>
              <td><?php echo $row['TypeofActivity'] ?></td>
              <?php echo "<td><a href='v_articlesinprogress.php?id=".$row['paperID']."'>View</a></td>" ?>
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

