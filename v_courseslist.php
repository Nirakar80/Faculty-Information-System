<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from CoursesList where courseID= $upinput" );

$result = mysqli_query($connect, $upsql);



while($row=mysql_fetch_assoc($upsql)){

  $courseId= $row['courseID'];
  $department= $row['Department'];
  $courseNumber = $row['CourseNumber'];
  $courseTitle = $row['CourseTitle'];
  $description = $row['CourseDescription'];
  $learningObj = $row['LearningObjectives'];

   
}
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
            <li><a href="../Lists/l_courseslist.php">Back</a></li>
            <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>

            <div class="card">
                <div class="container">
                        <p> Department :<?php echo $department ?></p>
                        <p>CourseNumber :<?php echo $courseNumber ?></p>
                        <p>CourseTitle :<?php echo $courseTitle ?></p>
                        <b><p>Learning Objectives:</p></b>
                        <p><?php echo $courseTitle ?></p>
                        <b><p>Description :</p></b>
                        <p><?php echo $description ?></p>
                        <?php echo "<a href='u_courseslist.php?id=".$courseId."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                        <a href='../modify/d_courseslist.php?id=".$courseId."'><button>Delete</button></a>&nbsp;&nbsp;&nbsp;" ?>
                </div>
            </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>