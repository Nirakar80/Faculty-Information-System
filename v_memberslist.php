<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from MembersList where ID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){
    $ID = $row['ID'];
    $MemberID = $row['MemberID'];
    $FirstName = $row['FirstName'];
    $MiddleName = $row['MiddleName'];
    $LastName =  $row['LastName'];
    $Email =  $row['Email'];
    $HireTerm =  $row['HireTerm'];
    $Status =  $row['Status'];
    $Involvement =  $row['Involvement'];
    $qualification =  $row['Qualification'];
    $HighDegree =  $row['HighDegree'];
    $YearAwarded =  $row['YearAwarded'];
    $College =  $row['College'];
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
              <li><a href="../Lists/l_memberslist.php">Back</a></li>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>

            <div class="card">
                <div class="container">
                        <p>MemberID : <?php echo $MemberID?></p>
                        <p>First Name : <?php echo $FirstName?></p>
                        <p>MiddleName Name : <?php echo $MiddleName?></p>
                        <p>Last Name : <?php echo $LastName ?></p>
                        <p>Email : <?php echo $Email ?></p>
                        <p>Hire Term : <?php echo $HireTerm ?></p>
                        <p>Status : <?php echo $Status ?></p>
                        <p>Involvement : <?php echo $Involvement ?></p>
                        <p>Qualification : <?php echo $qualification ?></p>
                        <p>High Degree :  <?php echo $HighDegree ?></p>
                        <p>Year Awarded : <?php echo $YearAwarded ?></p>
                        <p>College : <?php echo $College ?></p>              
                        <p>Rank : <?php echo $Rank?></p>

                    <?php echo "<a href='u_memberslist.php?id=".$ID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                            <a href='../modify/d_memberslist.php?id=".$ID."'><button>Delete</button></a>&nbsp;&nbsp;&nbsp;" ?>
                </div>
            </div>


          <?php
          mysql_close();
          ?>

</div>
</body>
</html>