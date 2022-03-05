<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from PatentsandTrademarks where ID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql)){

  $ID = $row['ID'];
  $PatentTitle = $row['PatentTitle'];
  $Status = $row['sStatus'];
  $YearSubmitted = $row['YearSubmitted'];
  $AcademicYear = $row['AcademicYear'];
  $ResearchType = $row['ResearchType'];
  $sDescription =  $row['sDescription'];
   
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
              <li><a href="../Lists/l_patentsandtrademarks.php">Back</a></li>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>
            
          <div class="card">
            <div class="container">
              <h2><?php echo $PatentTitle ?></h2>
              <p><?php echo $Status ?></p>
              <p>Year Submitted : <?php echo $YearSubmitted ?></p>
              <p>Academic Year : <?php echo $AcademicYear ?></p>
              <p>Research Type : <?php echo $ResearchType ?></p>
              <b><p>Description :</p></b>
              <p><?php echo $sDescription ?></p>
              <?php echo "<p><a href='u_patentsandtrademarks.php?id=".$ID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
              <a href='../modify/d_patentsandtrademarks.php?id=".$ID."'><button>Delete</button></a></p></p>" ?>
            </div>
          </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>

