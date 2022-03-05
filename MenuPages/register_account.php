<?php

session_start();

$mysqli = mysqli_connect("localhost", "webuser", "d0nkey5", "facinfo");

if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} else {
	$fullName = $_POST['fullName'];
	$emailAddress = $_POST['emailAddress'];	
	$logonID = $_POST['logonID'];
    $mypassword = $_POST['mypassword'];
	$isAdmin = $_POST['isAdmin'];

	$insEvent_sql = "INSERT INTO logon (logonID, mypassword, isAdmin, fullname, emailaddress) VALUES ('$logonID','$mypassword','$isAdmin','$fullName','$emailAddress') ";

	$res = mysqli_query($mysqli, $insEvent_sql);

	if ($res === TRUE) {
		   echo "Account Registration Successful";
		   header("Refresh:2; url=register_account.html");
	} else {
		printf(" Account Registration Failed %s\n", mysqli_error($mysqli));
	}

	mysqli_close($mysqli);
}

?>