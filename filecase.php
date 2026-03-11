

<!DOCTYPE html>
<html>
<head>
  <title>Judicial System - File Case</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav>
  <h2>Judicial System</h2>
  <div>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
  </div>
</nav>

<section class="hero">
  <div class="hero-content">
    <h1>File a Case Online</h1>
    <p>Submit your legal complaint securely through the judicial system.</p>
  </div>

  <div class="hero-image">
    <img src="court.webp" alt="Court Image">
  </div>
</section>

<section class="features">

<h2>Case Filing Form</h2>
<form action="submit_case.php" method="POST">

<input  type="text" name="case_title" placeholder="Case Title" required>
<br><br>
<select name="case_type" required>
<option value="">Select Case Type</option>
<option value="Civil">Civil</option>
<option value="Criminal">Criminal</option>
<option value="Family">Family</option>
<option value="Property">Property</option>
<option value="Cyber Crime">Cyber Crime</option>
</select>
<br><br>


<input type="text" name="petitioner" placeholder="Petitioner Name" required>
<br><br>

<input type="text" name="respondent" placeholder="Respondent Name" required>
<br><br>

<input type="text" name="court_name" placeholder="Court Name" required>
<br><br>

<input type="date" name="filing_date" required>
<br><br>

<textarea name="description" placeholder="Case Description"></textarea>
<br><br>

<button type="submit" name="submit_case">Submit Case</button>

</form>

</section>

<footer>
  <p>© 2026 Judicial System Project | University Academic Project</p>
</footer>

</body>
</html>