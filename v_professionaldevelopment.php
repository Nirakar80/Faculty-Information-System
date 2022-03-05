
<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ProfessionalDevelopment where PDID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){

    $PDID = $row['PDID'];
    $Activity = $row['Activity'];
    $Event = $row['Event'];
    $AcademicYear = $row['AcademicYear'];
    $Scope = $row['Scope'];
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
              <li><a href="../Lists/l_professionaldevelopment.php">Back</a></li>
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
                    <p><?php echo $Event?></p>
                    <p>Academic Year : <?php echo $AcademicYear ?></p>
                    <p>Scope : <?php echo $Scope ?></p>
                    <b><p>Description :</p></b>
                    <p><?php echo $Description?></p>
                    <?php echo "<p><a href='u_professionaldevelopment.php?id=".$PDID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                    <a href='../modify/d_professionaldevelopment.php?id=".$PDID."'><button>Delete</button></a></p></p>" ?>
                </div>
            </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>