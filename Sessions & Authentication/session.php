<?php
session_start();
$_SESSION['username'] = 'Efat_khan';
$_SESSION['email'] = 'efat@example.com';

echo 'Welcome, ' . $_SESSION['username'];

session_unset(); // Unset all session variables 
session_destroy(); // Destroy the session 



setcookie('user', 'JohnDoe', me() + 3600, '/'); // Cookie expires in 1 hour 
// To retrieve the cookie: 
if (isset($_COOKIE['user'])) {
  echo 'Welcome ' . $_COOKIE['user'];
} else {
  echo 'User cookie not set!';
}
////////////////////////////////////////////////////////////
session_start(); // Start the session

$timeout_duration = 600; // 10 minutes timeout

// Check if 'last_active' is set and if the session has expired
if (isset($_SESSION['last_active']) && (time() - $_SESSION['last_active']) > $timeout_duration) {
  session_unset();  // Unset all session variables
  session_destroy(); // Destroy the session
  session_start(); // Restart the session to prevent errors
}

// Update last activity time
$_SESSION['last_active'] = time();

// Display last active time for debugging
echo "Last active: " . date("Y-m-d H:i:s", $_SESSION['last_active']);
