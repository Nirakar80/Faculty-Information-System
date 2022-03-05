<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from OtherResearch where ORID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql)){

  $ID = $row['ORID'];
  $Title = $row['Title'];
  $ActivityType = $row['ActivityType'];
  $YearSubmitted = $row['YearSubmitted'];
  $AcademicYear = $row['AcademicYear'];
  $ResearchType = $row['ResearchType'];
  $Description =  $row['Description'];
   
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
              <li><a href="../Lists/l_otherresearch.php">Back</a></li>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>

          <div class="card">
            <div class="container">
              <h2><?php echo $row['Title'] ?></h2>
              <p>Activity Type : <?php echo $ActivityType ?></p>
              <p>Year Submitted : <?php echo $YearSubmitted ?></p>
              <p>Academic Year : <?php echo $AcademicYear ?></p>
              <p>Research Type : <?php echo $ResearchType ?></p>
              <p>Description : <?php echo $Description ?></p>
              <?php echo "<p><a href='u_otherresearch.php?id=".$ID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
              <a href='../modify/d_otherresearch.php?id=".$ID."'><button>Delete</button></a></p></p>" ?>
            </div>
          </div>

          <?php
          mysql_close();
          ?>

</div>
</body>

</html>

