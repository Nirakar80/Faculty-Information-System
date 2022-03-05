<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ConferencePresentations where ID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql))
{ 
   $ID = $row['ID'];
   $TitleofPresentation = $row['TitleofPresentation'];
   $Conference = $row['Conference'];
   $Type = $row['sType'];
   $Status = $row['sStatus'];
   $YearAccepted = $row['YearAccepted'];
   $AcademicYear = $row['AcademicYear'];
   $ResearchType = $row['ResearchType'];
   $Scope = $row['Scope'];
   $Refereed = $row['Refereed'];
   $PresentationType = $row['PresentationType'];
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
            <li><a href="../Lists/l_conferencepresentations.php">Back</a></li>
            <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>
            
          <div class="card">
            <div class="container">
              <h2><?php echo $TitleofPresentation ?></h2>
              <p><?php echo $Conference ?></p>
              <p>Type : <?php echo $Type ?></p>
              <p>Status : <?php echo $Status ?></p>
              <p>Year Accepted : <?php echo $YearAccepted ?></p>
              <p>Academic Year : <?php echo $AcademicYear ?></p>
              <p>Research Type : <?php echo $ResearchType ?></p>
              <p>Scope : <?php echo $Scope ?></p>
              <p>Refereed : <?php echo $Refereed ?></p>
              <p>Presentation Type : <?php echo $PresentationType ?></p>
              <b><p>Description :</p></b>
              <p><?php echo $sDescription ?></p>
              <?php echo "<p><a href='u_conferencepresentations.php?id=".$ID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
              <a href='../modify/d_conferencepresentations.php?id=".$ID."'><button>Delete</button></a></p></p>" ?>
            </div>
          </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>

