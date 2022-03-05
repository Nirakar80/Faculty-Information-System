<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ConsultingExperience where ceID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){


    $CEID = $row['ceID'];
    $Activity = $row['Activity'];
    $Company = $row['Company'];
    $AcademicYear = $row['AcademicYear'];
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
            <li><a href="../Lists/l_consultingexperience.php">Back</a></li>
            <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>
            
            <div class="card">
                <div class="container">
                    <h2><?php echo $Activity ?></h2>
                    <p><?php echo $Company ?></p>
                    <p>Academic Year : <?php echo $AcademicYear ?></p>
                    <b><p>Description :</p></b>
                    <p><?php echo $Description ?></p>
                    <?php echo "<p><a href='u_consultingexperience.php?id=".$CEID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                    <a href='../modify/d_consultingexperience.php?id=".$CEID."'><button>Delete</button></a></p></p>" ?>
                </div>
            </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>