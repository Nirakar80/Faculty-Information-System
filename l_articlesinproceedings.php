<?php
session_start();
mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from ArticlesinProceedings where FacultyID = '$input'");


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
              <h2>Articles in Proceedings<h2>
            </ul>
            
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
        <a href="../forms/f_articlesinproceedings.html"><button class="button">+ Add New Article</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <thead>
              <tr>
                <th>ID</td>
                <th>Title of Paper</th>
                <th>Conference</th>
                <th>Status</th>
                <th>Year Accepted</th>
                <th>Academic Year</th>
                <th>Research Type</th>
                <th>Scope</th>
                <th>Type</th>
                <th>Refereed</th>
                <th>Inclusion</th>
                <th>View</th>
              </tr>
            <thead>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){
           
            ?>
          

          <tr>
              <td><?php echo $row['paperID'] ?></td>
              <td><?php echo $row['TitleofPaper'] ?></td>
              <td><?php echo $row['Conference'] ?></td>
              <td><?php echo $row['Status'] ?></td>
              <td><?php echo $row['YearAccepted'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <td><?php echo $row['ResearchType'] ?></td>
              <td><?php echo $row['Scope'] ?></td>
              <td><?php echo $row['Type'] ?></td>
              <td><?php echo $row['Refereed'] ?></td>
              <td><?php echo $row['Inclusion'] ?></td>
              <?php echo "<td><a href='v_articlesinproceedings.php?id=".$row['paperID']."'>View</a></td>" ?>
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

