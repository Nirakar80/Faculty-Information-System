<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from CoursesList where courseID= $upinput" );

$result = mysqli_query($connect, $upsql);



while($row=mysql_fetch_assoc($upsql)){

  $courseId= $row['courseID'];
  $department= $row['Department'];
  $courseNumber = $row['CourseNumber'];
  $courseTitle = $row['CourseTitle'];
  $description = $row['CourseDescription'];
  $learningObj = $row['LearningObjectives'];

   
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Professional Membership</title>
   <link rel = "stylesheet" href="./style.css">
 </head>
  <body>

    <div class="main">
      <h1> Results </h1><hr>
      <br>

      <h1> Courses List </h1><hr>
      <p> Please fill all the fields below. </p>
      <form action="../modify/up_courseslist.php" method="post">
        <label> BU/CS: </label>
        <select name="bucs" id="bucs" value='<?php echo $department; ?>'>
            <option value="---">- - -</option>
            <option value="BU" <?php if($department == 'BU'){ echo ' selected="selected"'; }?>>BU</option>
            <option value="CS" <?php if($department == 'CS'){ echo ' selected="selected"'; }?>>CS</option> 
        </select><br>
        
        <label> Course Number: </label>
        <input type="text" name="cnumber" value='<?php echo $courseNumber; ?>' /><br>
        
        
        <label> Course Title: </label>
        <input type="text" name="ctitle" value='<?php echo $courseTitle; ?>' /><br>
        
        <label> Course Description (optional): </label>
        <textarea type="text" rows="10" name="cdesc" ><?php echo $description; ?></textarea><br>
        
        <label> Learning Objectives (optional): </label>
        <textarea type="text" rows="10" name="learnObj" ><?php echo $learningObj; ?></textarea><br>
        <input type="submit" name="submit" value="Submit"/>
      
            
        <?php 
            echo "
            <a href='l_courseslist.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>