<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from PaidServiceExperience where PSEID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){


    $PSEID = $row['PSEID'];  
    $Activity = $row['Activity']; 
    $Company = $row['Company'];
    $FromYear = $row['FromYear']; 
    $ToYear = $row['ToYear'];
    $Location = $row['Location'];
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
              <li><a href="../Lists/l_paidserviceexperience.php">Back</a></li>
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
                    <p><?php echo $Company . ", " . $Location?></p>
                    <i><p><?php echo "(" .$FromYear. " - " . $ToYear. ")" ?></p></i>
                    <p><?php echo $Description ?></p>
                    <?php echo "<a href='u_paidserviceexperience.php?id=".$PSEID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                    <a href='../modify/d_paidserviceexperience.php?id=".$PSEID."'><button>Delete</button></a></p>" ?>
                </div>
            </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>