<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from EmploymentExperience where EEID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){


    $EEID = $row['EEID']; 
    $Company = $row['Company']; 
    $Position = $row['Position']; 
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
            <li><a href="../Lists/l_employmentexperience.php">Back</a></li>
            <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->



        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>
            
            <div class="card">
                <div class="container">
                    <h2><?php echo $Position ?></h2>
                    <p><?php echo $Company . ", " . $row['Location'] ?></p>
                    <i><p><?php echo "(" .$FromYear . " - " . $ToYear. ")" ?></p></i>
                    <h4> Responsibilities </h4>
                    <p><?php echo $Description?></p>
                    <?php echo "<a href='u_employmentexperience.php?id=".$EEID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                    <a href='../modify/d_employmentexperience.php?id=".$EEID."'><button>Delete</button></a></p>" ?>
                </div>
            </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>