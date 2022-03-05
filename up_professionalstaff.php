<?php

session_start();

$mysqli = mysqli_connect("localhost", "webuser", "d0nkey5", "facinfo");

$upinput = $_SESSION['objID'];


if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} 
else {
	$StaffID = $row['StaffID'];
    $FirstName = $row['FirstName'];
    $MiddleName = $row['MiddleName'];
    $LastName =  $row['LastName'];
    $Email =  $row['Email'];
    $Status =  $row['Status'];
    $HighDegree =  $row['HighDegree'];
    $YearAwarded =  $row['YearAwarded'];
    $College =  $row['College'];
    $HireTerm =  $row['HireTerm'];
    $Rank =  $row['Rank'];

	$insEvent_sql = "UPDATE ProfessionalStaff
                    SET 
                        FirstName = '$FirstName', 
                        LastName = '$LastName',  
                        MiddleName = '$MiddleName', 
                        LastName = '$LastName',
                        Email = '$Email',  
                        Status = '$Status', 
                        HighDegree = '$HighDegree',
                        YearAwarded= '$YearAwarded',  
                        College = '$College', 
                        HireTerm = '$HireTerm',
                        Rank = '$Rank',  
                    WHERE StaffID = $upinput";

	$res = mysqli_query($mysqli, $insEvent_sql);

	if ($res === TRUE) {
		   echo "Thank you for providng your response.";
		   header("Refresh:2; url=../Lists/i_professionalstaff.php");
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}

	mysqli_close($mysqli);
}

?>
