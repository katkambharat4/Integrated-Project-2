<?php
include "db.php";

if(isset($_POST['register'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO users (username,email,password,role)
VALUES ('$username','$email','$password','$role')";

if($conn->query($sql) === TRUE){
echo "Registration successful";
header("Location: login.php");
exit();
}else{
echo "Error: ".$conn->error;
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2>Register</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username" required>
<br><br>

<input type="email" name="email" placeholder="Email" required>
<br><br>

<input type="password" name="password" placeholder="Password" required>
<br><br>

<select name="role">
<option value="petitioner">Petitioner</option>
<option value="judge">Judge</option>
<option value="admin">Admin</option>
</select>

<br><br>

<button type="submit" name="register">Register</button>

</form>

</body>
</html>


