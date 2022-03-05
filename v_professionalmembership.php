<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from ProfessionalMemberships where PMID= $upinput" );

$result = mysqli_query($connect, $upsql);




while($row=mysql_fetch_assoc($upsql)){

  $PMID = $row['PMID'];
  $ProfessionalMembership = $row['ProfessionalMembership'];
  $Years = $row['Years'];
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
              <li><a href="../Lists/l_professionalmembership.php">Back</a></li>
              <li><a href="../MenuPages/facultymenu.html">Menu</a></li>
            </ul>
        </div>
        <!-- Navbar End -->


        <!-- Menu panel -->
        <div class="panel">
        <h2 class="mini-title">Detailed View</h2>

            <div class="card">  
                <div class="container">
                    <h2><?php echo $ProfessionalMembership ?></h2>
                    <p>Years : <?php echo $Years ?></p>
                    <p>Scope : <?php echo $Scope ?></p>
                    <b><p>Description :</p></b>
                    <p><?php echo $Description ?></p>
                    <?php echo "<p><a href='u_professionalmembership.php?id=".$PMID."'><button>Edit</button></a>&nbsp;&nbsp;&nbsp;
                    <a href='../modify/d_professionalmembership.php?id=".$PMID."'><button>Delete</button></a></p></p>" ?>
                </div>
            </div>

          <?php
          mysql_close();
          ?>

</div>
</body>
</html>

