<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from GrantsandGifts where ID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql)){

  $ID = $row['ID'];
  $GrantorGiftTitle = $row['GrantorGiftTitle'];
  $GrantorGiftType = $row['GrantorGiftType'];
  $Status = $row['sStatus'];
  $YearAccepted = $row['YearAccepted'];
  $AcademicYear = $row['AcademicYear'];
  $NeworContinuing = $row['NeworContinuing'];
  $Source = $row['Source'];
  $ResearchType = $row['ResearchType'];
  $FundingAgency = $row['FundingAgency'];
  $Role = $row['sRole'];
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
              <li><a href="../Lists/l_grantsandgifts.php">Back</a></li>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>
            
          <div class="card">
            <div class="container">
              <h2><?php echo $GrantorGiftTitle ?></h2>
              <p><?php echo $GrantorGiftType ?></p>
              <p>Status : <?php echo $Status ?></p>
              <p>Year Accepted : <?php echo $YearAccepted ?></p>
              <p>Academic Year : <?php echo $AcademicYear ?></p>
              <p>New or Continuing : <?php echo $NeworContinuing ?></p> 
              <p>Source : <?php echo $Source ?></p>
              <p>Research Type : <?php echo $ResearchType ?></p>
              <p>Funding Agency : <?php echo $FundingAgency ?></p>
              <p>Role : <?php echo $Role ?></p>
              <b><p>Description :</p></b>
              <p><?php echo $sDescription ?></p>
              <?php echo "<p><a href='u_grantsandgifts.php?id=".$ID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
              <a href='../modify/d_grantsandgifts.php?id=".$ID."'><button>Delete</button></a></p></p>" ?>
            </div>
          </div>


          <?php
          mysql_close();
          ?>

</div>
</body>
</html>
