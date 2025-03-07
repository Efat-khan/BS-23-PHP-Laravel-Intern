<?php
// MySQL is one of the most widely used relational database management systems (RDBMS). Laravel, which you use, comes with Eloquent ORM, simplifying database operations. However, it's important to understand raw SQL and PHP database connections using PDO and MySQLi before using ORM.
//
// PDO (PHP Data Objects) is a database access layer providing a uniform method of access to multiple databases. PDO is more secure and easier to use than MySQLi.
//
// MySQLi is a MySQL driver for PHP. It is a more object-oriented interface than the original MySQL driver.
//
// In this snippet, we'll connect to a MySQL database using PDO.
//
// Step 1: Create a database and tables
// Using PDO::connection
$host = 'localhost';
$dbname = 'test';
$username = 'root';
$password = '';
try{
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  // here PDO handles the error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully PDO<br/>";
}catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}


// COnnect with mysqli
$mysqli = new mysqli($host, $username, $password, $dbname);
if($mysqli->connect_error){
  die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully MySQLi<br/>";

// connection mysqli procedural
$mysqli = mysqli_connect($host, $username, $password, $dbname);
if(!$mysqli){
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully MySQLi procedural<br/>";

// CRUD Operations (Create, Read, Update, Delete)
// Create a table
$createTable = "CREATE TABLE IF NOT EXISTS employee(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$pdo->exec($createTable);

// Insert data
$insertData = "INSERT INTO employee (firstname, lastname, email) VALUES (:firstname, :lastname, :email)";

$stmt = $pdo->prepare($insertData);
$stmt->execute(['firstname' => 'Efat', 'lastname' => 'Khan', 'email' => 'efatkhan@gmail.com']);


// Read data
$sql = "SELECT * FROM employee WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => 'efatkhan@gmail.com']);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($user);
//update employee
$sql = "UPDATE employee SET firstname = :firstname WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['firstname' => 'Sakin', 'email' => 'efatkhan@gmail.com']);

$sql = "DELETE FROM employee WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email'=>'efatkhan@gmail.com']);

?>