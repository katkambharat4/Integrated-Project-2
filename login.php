<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE email='$email' AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){

$row = $result->fetch_assoc();

$_SESSION['user'] = $row['username'];
$_SESSION['role'] = $row['role'];

header("Location: dashboard.php");
exit();

}else{
$error = "Invalid email or password";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<h2 style="text-align:center">Login</h2>

<?php
if(isset($error)){
echo "<p style='color:red;text-align:center'>$error</p>";
}
?>
<div class="container">
<form method="POST" style="text-align:center">

<input type="email" name="email" placeholder="Email" required>
<br><br>

<input type="password" name="password" placeholder="Password" required>
<br><br>

<button type="submit" name="login">Login</button>

</form>
</div>
</body>
</html>