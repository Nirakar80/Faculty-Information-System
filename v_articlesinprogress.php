<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ArticlesinProgress where paperID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql))
{ 
   $paperID = $row['paperID'];
   $TitleofPaper = $row['TitleofPaper'];
   $AcademicYear = $row['AcademicYear'];
   $ResearchType = $row['ResearchType'];
   $TypeofActivity = $row['TypeofActivity'];
   $Refereed = $row['Refereed'];
   $PaperDescription = $row['PaperDescription'];
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
              <li><a href="../Lists/l_articlesinprogress.php">Back</a></li>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->

        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>

          <div class="card">
            <div class="container">
              <h2><?php echo $TitleofPaper ?></h2>
              <p>Academic Year : <?php echo $AcademicYear ?></p>
              <p>Research Type : <?php echo $ResearchType ?></p>
              <p>Type of Activity: <?php echo $TypeofActivity ?></p>
              <b><p>Description :</p></b>
              <p><?php echo $PaperDescription ?></p>
              <?php echo "<p><a href='u_articlesinprogress.php?id=".$paperID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
              <a href='../modify/d_articlesinprogress.php?id=".$paperID."'><button>Delete</button></a></p></p>" ?>
            </div>
          </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>


