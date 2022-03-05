
<?php
session_start();
mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");




$input = $_SESSION['facultyid'];


$sql=mysql_query("select * from Books where FacultyID = '$input'");


$result = mysqli_query($connect, $sql);

?>



<!DOCTYPE html>
<html>
<head>
   <title> Faculty Entry </title>
   <link rel="stylesheet" href="list.css">
 </head>
    <body>



    <div class="navbar">
            <ul>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
              <h2>Books and Monographs<h2>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Buttons Area  -->
        <div class="button-area">
        <a href="../forms/f_books.html"><button class="button">+ Add New Books</button></a>
        </div>
        <!--End Buttons Area  -->


        <!-- Menu panel -->
        <div class="panel">

          <table>
            <tr>
              <th>ID</td>
              <th>Category</th>
              <th>Title</th>
              <th>Status</th>
              <th>Year Contracted</th>
              <th>Academic Year</th>
              <th>Research Type</th>
              <th>Refereed</th>
              <th>Books</td>
            </tr>
            
          <?php 
          while($row=mysql_fetch_assoc($sql)){
            ?>

          <tr>
              <td><?php echo $row['ID'] ?></td>
              <td><?php echo $row['Category'] ?></td>
              <td><?php echo $row['Title'] ?></td>
              <td><?php echo $row['sStatus'] ?></td>
              <td><?php echo $row['YearContracted'] ?></td>
              <td><?php echo $row['AcademicYear'] ?></td>
              <td><?php echo $row['ResearchType'] ?></td>
              <td><?php echo $row['Refereed'] ?></td>
              <?php echo "<td><a href='v_books.php?id=".$row['ID']."'>View</a></td>" ?>
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

