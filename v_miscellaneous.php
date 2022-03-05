<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from Miscellaneous where MiscID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){

    $MiscID = $row['MiscID'];
    $Activity = $row['Activity'];
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
              <li><a href="../Lists/l_miscellaneous.php">Back</a></li>
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
                    <p>Academic Year : <?php echo $AcademicYear ?></p>
                    <b><p>Description :</p></b>
                    <p><?php echo $Description?></p>
                    <?php echo "<p><a href='u_miscellaneous.php?id=".$MiscID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                    <a href='../modify/d_miscellaneous.php?id=".$MiscID."'><button>Delete</button></a></p></p>" ?>
                </div>
            </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>