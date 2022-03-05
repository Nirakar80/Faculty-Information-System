<?php
session_start();

mysql_connect("localhost","webuser","d0nkey5");
mysql_select_db("facinfo");

$upinput = $_GET['id'];
$_SESSION['objID'] = $upinput;

$upsql=mysql_query("select * from GrantsandGifts where ID= $upinput" );

$result = mysqli_query($connect, $upsql);

while($row=mysql_fetch_assoc($upsql)){

  $ID = $row['ID'];
  $GrantorGiftTitle = $row['GrantorGiftTitle'];
  $GrantorGiftType = $row['GrantorGiftType'];
  $Status = $row['sStatus'];
  $YearAccepted = $row['YearAccepted'];
  $AcademicYear = $row['AcademicYear'];
  $NeworContinuing = $row['NeworContinuing'];
  $Source = $row['Source'];
  $ResearchType = $row['ResearchType'];
  $FundingAgency = $row['FundingAgency'];
  $Role = $row['sRole'];
  $sDescription =  $row['sDescription'];
   
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Grants and Gifts Form</title>
   <link rel = "stylesheet" href = "style.css">
 </head>
  <body>
    <div class="main">
      <h1>Results</h1><hr>
      <br>
      <form action="../modify/up_grantsandgifts.php" method="post">
        <label> Grant or Gift Title:</label>
        <input type="text" name="grantOrGiftTitle" maxlength="100" size="15" value='<?php echo $GrantorGiftTitle; ?>'/><br><br>
        
        <label> Grant or Gift Type:</label>
        <select name="grantOrGiftType" id="category">
          <option value="---">- - - </option>
          <option value="Teaching" <?php if($GrantorGiftType == 'Teaching'){ echo ' selected="selected"'; } ?>>Teaching</option>
          <option value="Research Competitive" <?php if($GrantorGiftType == 'Research Competitive'){ echo ' selected="selected"'; } ?>>Competitive Research</option>
          <option value="Research Non-Competitive" <?php if($GrantorGiftType == 'Research Non-Competitive'){ echo ' selected="selected"'; } ?>>Non-Competitive Research</option>
          <option value="Service" <?php if($GrantorGiftType == 'Service'){ echo ' selected="selected"'; } ?>>Service</option>
          <option value="Program Evaluation" <?php if($GrantorGiftType == 'Program Evaluation'){ echo ' selected="selected"'; } ?>>Porgram Evaluation</option>
          <option value="Gift" <?php if($GrantorGiftType == 'Gift'){ echo ' selected="selected"'; } ?>>Gift</option>
          <option value="Travel" <?php if($GrantorGiftType == 'Travel'){ echo ' selected="selected"'; } ?>>Travel</option>
          <option value="Contract" <?php if($GrantorGiftType == 'Contract'){ echo ' selected="selected"'; } ?>>Contract</option>
          <option value="Contribution Agreement" <?php if($GrantorGiftType == 'Contribution Agreement'){ echo ' selected="selected"'; } ?>>Contribution Agreement</option>
          <option value="Donation" <?php if($GrantorGiftType == 'Donation'){ echo ' selected="selected"'; } ?>>Donation</option>
          <option value="Sub-Grant" <?php if($GrantorGiftType == 'Sub-Grant'){ echo ' selected="selected"'; } ?>>Sub-Grant</option>
          <option value="Partnership" <?php if($GrantorGiftType == 'Partnership'){ echo ' selected="selected"'; } ?>>Partnership</option>
          <option value="Memorandum" <?php if($GrantorGiftType == 'Memorandum'){ echo ' selected="selected"'; } ?>>Memorandum of Understanding</option>
          <option value="Other" <?php if($GrantorGiftType == 'Other'){ echo ' selected="selected"'; } ?>>Other</option>
        </select><br><br>
        
        <label>Status:</label>
        <select name="status" id="status">
          <option value="---">- - - </option>
          <option value="Proposed" <?php if($Status == 'Proposed'){ echo ' selected="selected"'; } ?>>Proposed and Pending</option>
          <option value="Funded" <?php if($Status == 'Funded'){ echo ' selected="selected"'; } ?>>Funded</option>
          <option value="Not Funded" <?php if($Status == 'Not Funded'){ echo ' selected="selected"'; } ?>>Not Funded</option>
          <option value="Past Funded" <?php if($Status == 'Past Funded'){ echo ' selected="selected"'; } ?>>Past Funded</option>
        </select><br><br>
        
        <label> Year Acccepted:</label>
        <input type="text" name="yearAccepted" maxlength="11" size="15" value='<?php echo $YearAccepted; ?>'/><br><br>
        
        <label> Academic Year:</label>
        <input type="text" name="academicYear" maxlength="11" size="15" value='<?php echo $AcademicYear; ?>'/><br><br>
        
        <label>New/Continuing:</label>
        <select name="newOrContinuing" id="newOrContinuing">
          <option value="---">- - - </option>
          <option value="New" <?php if($NeworContinuing == 'New'){ echo ' selected="selected"'; } ?>>New</option>
          <option value="Continuing" <?php if($NeworContinuing == 'Continuing'){ echo ' selected="selected"'; } ?>>Continuing</option>
        </select><br><br>
        
        <label>Source:</label>
        <select name="source" id="source">
          <option value="---">- - - </option>
          <option value="Internal" <?php if($Source == 'Internal'){ echo ' selected="selected"'; } ?>>Internal</option>
          <option value="External" <?php if($Source == 'External'){ echo ' selected="selected"'; } ?>>External</option>
        </select><br><br>
        
        <label> Research Type:</label>
        <select name="researchType" id="researchType" >
          <option value="---">- - - </option>
          <option value="Scholarship of Discovery" <?php if($ResearchType == 'Scholarship of Discovery'){ echo ' selected="selected"'; } ?>>Scholarship of Discovery</option>
          <option value="Scholarship of Application" <?php if($ResearchType == 'Scholarship of Application'){ echo ' selected="selected"'; } ?>>Scholarship of Application</option>
          <option value="Scholarship of Teaching" <?php if($ResearchType == 'Scholarship of Teaching'){ echo ' selected="selected"'; } ?>>Scholarship of Teaching</option>
          <option value="Scholarship of Integration" <?php if($ResearchType == 'Scholarship of Integration'){ echo ' selected="selected"'; } ?>>Scholarship of Integration</option>
          <option value="Not counted as Separate Intellectual Contribution" <?php if($ResearchType == 'Not counted as Separate Intellectual Contribution'){ echo ' selected="selected"'; } ?>>Not counted as Separate Intellectual Contribution</option>
        </select><br><br>
        
        <label> Funding Agency:</label>
        <input type="text" name="fundingAgency" maxlength="100" size="15" value='<?php echo $FundingAgency; ?>'/><br><br>
        
        <label>Role:</label>
        <select name="role" id="role">
          <option value="---">- - - </option>
          <option value="Co-Investigator"  <?php if($Role == 'Co-Investigator'){ echo ' selected="selected"'; } ?>>Co-Investigator</option>
          <option value="Co-Principal Investigator" <?php if($Role == 'Co-Principal Investigator'){ echo ' selected="selected"'; } ?>>Co-Principal Investigator</option>
          <option value="Principal Investigator" <?php if($Role == 'Principal Investigator'){ echo ' selected="selected"'; } ?>>Principal Investigator</option>
          <option value="Evaluator" <?php if($Role == 'Evaluator'){ echo ' selected="selected"'; } ?>>Evaluator</option>
          <option value="Collaborator" <?php if($Role == 'Collaborator'){ echo ' selected="selected"'; } ?>>Collaborator</option>
          <option value="Grantee" <?php if($Role == 'Grantee'){ echo ' selected="selected"'; } ?>>Grantee</option>
        </select><br><br>
        
        <label> Description: </label><br>
        <textarea type="textarea" rows="11" cols ="80" name="description" maxlength="250" value='<?php echo $sDescription; ?>'><?php echo $sDescription?></textarea><br><br>
        <input type="submit" name="submit" value="Update"/>
      
                
        <?php 
            echo "
            <a href='l_grantsandgifts.php'>Return to List</a>
            </form>
        </div>
    </body>
</html>";

        $mysql_close();

?>
