<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from Chapters where ID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql))
{ 
   $ID = $row['ID'];
   $Category = $row['Category'];
   $Title = $row['Title'];
   $Status = $row['sStatus'];
   $YearContracted = $row['YearContracted'];
   $AcademicYear = $row['AcademicYear'];
   $ResearchType = $row['ResearchType'];
   $Refereed = $row['Refereed'];
   $Revision = $row['Revision'];
   $sDescription = $row['sDescription'];
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
            <li><a href="../Lists/l_chapters.php">Back</a></li>
            <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>

          <div class="card">
            <div class="container">
              <h2><?php echo $Title?></h2>
              <p><?php echo $Category ?></p>
              <p>Status : <?php echo $Status ?></p>
              <p>Year Contracted : <?php echo $YearContracted ?></p>
              <p>Academic Year : <?php echo $AcademicYear ?></p>
              <p>Research Type : <?php echo $ResearchType ?></p>
              <p>Refereed : <?php echo $Refereed ?></p>
              <b><p>Description :</p></b>
              <p><?php echo $sDescription ?></p>
              <?php echo "<p><a href='u_chapters.php?id=".$ID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
              <a href='../modify/d_chapters.php?id=".$ID."'><button>Delete</button></a></p></p>" ?>
            </div>
          </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>
