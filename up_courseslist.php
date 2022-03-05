<?php

session_start();

$mysqli = mysqli_connect("localhost", "webuser", "d0nkey5", "facinfo");

$upinput = $_SESSION['objID'];


if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} 
else {
    $courseId= $row['courseID'];
  $department= $row['Department'];
  $courseNumber = $row['CourseNumber'];
  $courseTitle = $row['CourseTitle'];
  $description = $row['CourseDescription'];
  $learningObj = $row['LearningObjectives'];


	$insEvent_sql = "UPDATE CoursesList
                    SET 
                        Department = '$department', 
                        CourseNumber = '$courseNumber',  
                        CourseTitle = '$courseTitle', 
                        CourseDescription = '$description',
                        LearningObjectives = '$learningObj'
                    WHERE courseID = $upinput";

	$res = mysqli_query($mysqli, $insEvent_sql);

	if ($res === TRUE) {
		   echo "Thank you for providng your response.";
		   header("Refresh:2; url=../Lists/i_courseslist.php");
	} else {
		printf("Could not insert record: %s\n", mysqli_error($mysqli));
	}

	mysqli_close($mysqli);
}

?>
