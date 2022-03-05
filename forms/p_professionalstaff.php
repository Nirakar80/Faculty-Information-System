<?php

$mysqli = mysqli_connect("localhost", "webuser", "d0nkey5", "facinfo");

if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} else {
	$pstaffID = $_POST['staffID'];	
	$pfname = $_POST['fname'];
    $pmname = $_POST['mname'];
    $plname = $_POST['lname'];
    $pcemail = $_POST['cemail'];
    $pstatus = $_POST['status'];
    $phighDegree = $_POST['highDegree'];
    $pyearAwarded = $_POST['yearAwarded'];
    $pcollege = $_POST['college'];
    $phireTerm = $_POST['hireTerm'];
    $prank = $_POST['rank'];

	$insEvent_sql = "INSERT INTO ProfessionalStaff (StaffID, FirstName, MiddleName, LastName, Email, Status, HighDegree, YearAwarded, College, HireTerm, Rank) VALUES ('$pstaffID', '$pfname','$pmname', '$plname', '$pcemail', '$pstatus', '$phighDegree', '$pyearAwarded', '$pcollege', '$phireTerm', '$prank' ) ";

	$res = mysqli_query($mysqli, $insEvent_sql);

	if ($res === TRUE) {
		   echo "Thank you for providng your response.";
		   header("Refresh:1; url=../Lists/l_professionalstaff.php");
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}

	mysqli_close($mysqli);
}

?>