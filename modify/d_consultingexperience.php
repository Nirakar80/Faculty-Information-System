<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("delete from ConsultingExperience where ceID= $upinput" );

$result = mysqli_query($connect, $upsql);

echo "Delete Successful !!.";
header("Refresh:1; url=../Lists/l_consultingexperience.php");


?>
