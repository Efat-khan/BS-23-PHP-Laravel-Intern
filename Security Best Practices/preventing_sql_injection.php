<!-- 
What is SQL Injection?
When a hacker inserts malicious SQL code into input fields to manipulate your database.

Preventing SQL Injection in PHP
How to Prevent It
Use Prepared Statements with PDO or MySQLi:
Always use parameterized queries to separate SQL code from user input.

Preventing XSS (Cross-Site Scripting) in PHP
What is XSS?
When a hacker injects malicious scripts (like JavaScript) into your website, which then runs in other users’ browsers.

How to Prevent It
1.Escape Output:

Use htmlspecialchars() to convert special characters to HTML entities.

2.Sanitize User Input:

Use filter_var() to sanitize input.

3.Use Content Security Policy (CSP):

Add a CSP header to restrict where scripts can be loaded from.

4.Use Content Security Policy (CSP):

Add a CSP header to restrict where scripts can be loaded from.

----------------------------------------------------------------
Preventing CSRF (Cross-Site Request Forgery) in PHP
What is CSRF?
When a hacker tricks a user into performing an action on your website without their consent.

#How to Prevent It
1.Use CSRF Tokens:

Generate a unique token for each form and validate it on submission.
-->
<?php
// Options: 'Lax', 'Strict', or 'None use in cookie
setcookie('cookie_name', 'cookie_value', [ 
  'expires' => time() + 3600, // Expires in 1 hour 
  'path' => '/', 
  'domain' => 'example.com', 
  'secure' => true, // Only send over HTTPS 
  'httponly' => true, // Prevent JavaScript access 
  'samesite' => 'Lax', // Options: 'Lax', 'Strict', or 'None' 
]); 
// Password hassing
$password = "user_password_123"; 
$hashed_password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; 
// Verify the password 
if (password_verify($password, $hashed_password)) { 
echo "Password is valid!"; 
} else { 
echo "Invalid password!"; 
} 

$password = "user_password_123"; 
$hashed_password = "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"; 
// Check if the password needs rehashing 
if (password_needs_rehash($hashed_password, PASSWORD_DEFAULT)) { 
$new_hashed_password = password_hash($password, PASSWORD_DEFAULT); 
echo "Password rehashed: " . $new_hashed_password; 
} else { 
echo "Password does not need rehashing."; 
} 


// Registration (Hashing the Password) 
// User submits a registration form 
$username = $_POST['username']; 
$password = $_POST['password']; 
// Hash the password 
$hashed_password = password_hash($password, PASSWORD_DEFAULT); 
// Store the username and hashed password in the database 
$sql = "INSERT INTO users (username, password) VALUES (?, ?)"; 
$stmt = $pdo->prepare($sql); 
$stmt->execute([$username, $hashed_password]); 
echo "User registered successfully!"; 


?>