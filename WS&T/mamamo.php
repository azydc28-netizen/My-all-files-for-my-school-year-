<?php
 
$host = "srv1865.hstgr.io";
$username = "u619216262_bsit2";
$password = "U619216262_bsit2";
$database = "u619216262_bsit2";
 
$conn = new mysqli($host, $username, $password, $database);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $fullname = $_POST["fullname"];
    $program = $_POST["program"];
    $department = $_POST["department"];
    $year_section = $_POST["year_section"];
    $birthday = $_POST["birthday"];
 
 
    $sql = "INSERT INTO students
            (fullname, program, department, year_section, birthday)
            VALUES
            ('$fullname', '$program', '$department', '$year_section', '$birthday')";
 
 
    if ($conn->query($sql) === TRUE) {
        echo "Student information successfully saved.";
    } else {
        echo "Error: " . $conn->error;
    }
}
 
$conn->close();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Military Academy Recruitment</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 25px 0;
      background: linear-gradient(135deg, #101810, #263b25);
      font-family: Arial, sans-serif;
      color: #f1f2df;
    }

    form {
      width: 90%;
      max-width: 500px;
      padding: 32px;
      background: #344b30;
      border: 2px solid #c6b56a;
      border-radius: 6px;
      box-shadow: 0 10px 25px #000;
    }

    .header {
      text-align: center;
      border-bottom: 2px solid #9da65d;
      padding-bottom: 18px;
    }

    .star {
      font-size: 42px;
      color: #d7c676;
    }

    h1 {
      margin: 5px 0;
      color: #e0ce80;
      font-size: 25px;
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    .subtitle {
      margin: 5px 0;
      color: #c6d09d;
      font-size: 13px;
      letter-spacing: 1px;
    }

    .form-title {
      margin: 14px 0 0;
      color: #f0e5ad;
      font-weight: bold;
    }

    label {
      display: block;
      margin-top: 16px;
      font-weight: bold;
    }

    label:first-of-type {
      margin-top: 22px;
    }

    input[type="text"],
    input[type="date"] {
      width: 100%;
      padding: 12px;
      margin-top: 7px;
      background: #f1f2df;
      color: #182117;
      border: 2px solid #9da65d;
      border-radius: 3px;
    }

    .notice {
      margin: 18px 0;
      color: #d1d8b4;
      font-size: 12px;
      line-height: 1.5;
    }

    input[type="submit"] {
      width: 100%;
      padding: 14px;
      background: #c6b56a;
      color: #172014;
      border: 2px solid #eadb98;
      border-radius: 3px;
      font-weight: bold;
      letter-spacing: 1px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background: #e0ce80;
    }

    .motto {
      margin: 18px 0 0;
      color: #aebc91;
      font-size: 11px;
      text-align: center;
    }
  </style>
</head>

<body>
  <form action="mamamo.php" method="post">
    <div class="header">
      <div class="star">★</div>

      <h1>Military Academy</h1>

      <p class="subtitle">RECRUITMENT AND ADMISSIONS OFFICE</p>

      <p class="form-title">CADET APPLICANT REGISTRATION</p>
    </div>

    <label for="fullname">Applicant Full Name</label>
    <input type="text" id="fullname" name="fullname"
           placeholder="Enter your complete name" required>

    <label for="program">Preferred Program</label>
    <input type="text" id="program" name="program"
           placeholder="Example: Cadetship Program" required>

    <label for="department">Department</label>
    <input type="text" id="department" name="department"
           placeholder="Enter department" required>

    <label for="year_section">Year and Section</label>
    <input type="text" id="year_section" name="year_section"
           placeholder="Example: First Year - Alpha" required>

    <label for="birthday">Date of Birth</label>
    <input type="date" id="birthday" name="birthday" required>

    <p class="notice">
      By submitting this application, I certify that the information provided is true and complete.
    </p>

    <input type="submit" value="SUBMIT APPLICATION">

    <p class="motto">COURAGE • INTEGRITY • LOYALTY</p>
  </form>
</body>
</html>