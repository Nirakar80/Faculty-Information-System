<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ArticlesinProceedings where paperID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql))
{ 
   $paperID = $row['paperID'];
   $TitleofPaper = $row['TitleofPaper'];
   $Conference = $row['Conference'];
   $Status = $row['Status'];
   $YearAccepted = $row['YearAccepted'];
   $AcademicYear = $row['AcademicYear'];
   $ResearchType = $row['ResearchType'];
   $Scope = $row['Scope'];
   $Type = $row['Type'];
   $Refereed = $row['Refereed'];
   $Inclusion = $row['Inclusion'];
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
              <p><b><?php echo $Conference ?></p>
              <p><b>Status :</b> <?php echo $Status ?></p>
              <p><b>Year Accepted :</b> <?php echo $YearAccepted ?></p>
              <p><b>Academic Year :</b> <?php echo $AcademicYear ?></p>
              <p><b>Research Type :</b> <?php echo $ResearchType?></p>
              <p><b>Scope :</b> <?php echo $Scope ?></p>
              <p><b>Type :</b> <?php echo $Type ?></p>
              <p><b>Refereed :</b> <?php echo $Refereed ?></p>
              <p><b>Inclusion :</b> <?php echo $Inclusion ?></p>
              <p><b>Description :</b></p>
              <p><?php echo $PaperDescription ?></p>
              <?php echo "<p><a href='u_articlesinproceedings.php?id=".$paperID."'>Edit</a>&nbsp;&nbsp;&nbsp;
              <a href='../modify/d_articlesinproceedings.php?id=".$paperID."'>Delete</a></p></p>" ?>
            </div>
          </div>


          <?php
          mysql_close();
          ?>

</div>
</body>
</html>