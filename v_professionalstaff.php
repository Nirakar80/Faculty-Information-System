<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ProfessionalStaff where PSID = $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){
    $PSID = $row['PSID'];
    $StaffID = $row['StaffID'];
    $FirstName = $row['FirstName'];
    $MiddleName = $row['MiddleName'];
    $LastName =  $row['LastName'];
    $Email =  $row['Email'];
    $Status =  $row['Status'];
    $HighDegree =  $row['HighDegree'];
    $YearAwarded =  $row['YearAwarded'];
    $College =  $row['College'];
    $HireTerm =  $row['HireTerm'];
    $Rank =  $row['Rank'];

   
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
              <li><a href="../Lists/l_professionalstaff.php">Back</a></li>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>

            <div class="card">
                <div class="container">
                        <p>StaffID : <?php echo $StaffID ?></p>
                        <p>First Name : <?php echo $FirstName?></p>
                        <p>Last Name : <?php echo $LastName ?></p>
                        <p>Status : <?php echo $Status ?></p>
                        <p>High Degree :  <?php echo $HighDegree ?></p>
                        <p>Year Awarded : <?php echo $YearAwarded ?></p>
                        <p>College : <?php echo $College ?></p>
                        <p>Hire Term : <?php echo $HireTerm ?></p>
                        <p>Rank : <?php echo $Rank?></p>

                    <?php echo "<a href='u_professionalstaff.php?id=".$PSID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                            <a href='../modify/d_professionalstaff.php?id=".$PSID."'><button>Delete</button></a>&nbsp;&nbsp;&nbsp;" ?>
                </div>
            </div>


          <?php
          mysql_close();
          ?>

</div>
</body>
</html>