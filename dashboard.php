<?php
session_start();
include "db.php";

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}

$username = $_SESSION['user'];

/* Fetch cases of this user */
$sql = "SELECT * FROM cases WHERE petitioner='$username'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>Welcome <?php echo $username; ?></h2>
<br><br>
<a href="filecase.php" style="
padding:10px 20px;
background:#007BFF;
color:white;
text-decoration:none;
border-radius:5px;
">
File New Case
</a>

<br><br>

<h3>Your Filed Cases</h3>

<table border="1" cellpadding="10">

<tr>
<th>Case Title</th>
<th>Case Type</th>
<th>Respondent</th>
<th>Court</th>
<th>Filing Date</th>
<th>Description</th>
</tr>

<?php

if($result->num_rows > 0){

while($row = $result->fetch_assoc()){

echo "<tr>";
echo "<td>".$row['case_title']."</td>";
echo "<td>".$row['case_type']."</td>";
echo "<td>".$row['respondent']."</td>";
echo "<td>".$row['court_name']."</td>";
echo "<td>".$row['filing_date']."</td>";
echo "<td>".$row['description']."</td>";
echo "</tr>";

}

}else{

echo "<tr><td colspan='6'>No cases filed</td></tr>";

}

?>

</table>

<br>
<a href="logout.php">Logout</a>

</body>
</html>