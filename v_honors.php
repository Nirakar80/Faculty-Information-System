<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from Honors where HonorsID = $upinput" );

$result = mysqli_query($connect, $upsql);


echo "<table class='result'>";

while($row=mysql_fetch_assoc($upsql)){


    $HonorsID = $row['HonorsID'];
    $Title = $row['Title'] ;
    $Organization = $row['Organization'];
    $AcademicYear = $row['AcademicYear'];
    $Type = $row['Type'];
    $Category = $row['Category'];
    $Status = $row['Status'];
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
              <li><a href="../Lists/l_honors.php">Back</a></li>
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
              <p><?php echo $Organization ?></p>
              <p>Academic Year : <?php echo $AcademicYear ?></p>
              <p>Type : <?php echo $Type ?></p>
              <p>Category : <?php echo $Category ?></p>
              <p>Status : <?php echo $Status ?></p>
              <b><p>Description :</p></b>
              <p><?php echo $Description ?></p>
              <?php echo "<p><a href='u_honors.php?id=".$HonorsID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
              <a href='../modify/d_honors.php?id=".$HonorsID."'><button>Delete</button></a></p></p>" ?>
            </div>
          </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>

