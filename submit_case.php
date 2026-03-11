<?php
include "db.php";
if(isset($_POST['submit_case'])){
$case_title = $_POST['case_title'];
$case_type = $_POST['case_type'];
$petitioner = $_POST['petitioner'];
$respondent = $_POST['respondent'];
$court_name = $_POST['court_name'];
$filing_date = $_POST['filing_date'];
$description = $_POST['description'];

$sql = "INSERT INTO cases 
(case_title, case_type, petitioner, respondent, court_name, filing_date, description)

VALUES
('$case_title','$case_type','$petitioner','$respondent','$court_name','$filing_date','$description')";

if($conn->query($sql)){
header("Location: dashboard.php");
}else{
echo "Error: ".$conn->error;
}
}
$conn->close();
?>