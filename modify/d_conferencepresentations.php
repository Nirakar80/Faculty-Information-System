<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['ID'] = $upinput;

$upsql=mysql_query("delete from ConferencePresentations where ID = $upinput" );

$result = mysqli_query($connect, $upsql);

echo "Delete Successful !!.";
header("Refresh:1; url=../Lists/l_conferencepresentations.php");

?>

