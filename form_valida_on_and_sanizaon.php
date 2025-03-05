<!-- Basic Form Validation
Form validation ensures that the data entered by the user meets the required criteria before it is processed further. You can validate form fields for things like:
-Required fields
-Correct format (e.g., email, date)
-Minimum or maximum length
-Numeric values

Basic Form Sanitization
Sanitization is the process of cleaning user input to remove unwanted characters. This prevents security issues.  -->

<?php
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (empty($_POST['name'])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST['name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST['email'])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}
function test_input($data)
{
  $data = trim($data); // remove extra spaces, tabs, and newlines
  $data = stripslashes($data); // remove backslashes
  $data = htmlspecialchars($data); // convert special characters to HTML entities
  return $data;
}

?>
<!DOCTYPE html>

<head>
  <title>Form Validation and Sanitization</title>

</head>

<body>
  <h1>Form Validation and Sanitization</h1>
  <form method="post" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>
    <span style="color: red;"><?php echo $nameErr; ?></span><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br><br>
    <span style="color: red;"><?php echo $emailErr; ?></span><br>
    <input name="submit" type="submit" value="Submit">
  </form>
  <h3>Name:<?php echo $_POST['name'] ?> </h3>
  <h3>Email:<?php echo $_POST['email'] ?> </h3>
</body>

</html>