<?php
session_start();
$mysqli = mysqli_connect("localhost", "webuser", "d0nkey5", "facinfo");

if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} else {
	$pstitle = $_POST['stitle'];	
	$pyearCompleted = $_POST['yearCompleted'];
    $payear = $_POST['ayear'];
    $presearch = $_POST['research'];
    $poptions = $_POST['options'];
	$username = $_SESSION['facultyid'];

	$insEvent_sql = "INSERT INTO SoftwareDevelopment (SoftwareTitle, YearCompleted, AcademicYear, ResearchType, Options, FacultyID) 
	VALUES ('$pstitle', '$pyearCompleted','$payear', '$presearch', '$poptions', '$username') ";

	$res = mysqli_query($mysqli, $insEvent_sql);

	if ($res === TRUE) {
	   	echo "Thank you for providng your response.";
		header("Refresh:1; url=../Lists/l_softwaredevelopment.php");
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}

	mysqli_close($mysqli);
}

?>