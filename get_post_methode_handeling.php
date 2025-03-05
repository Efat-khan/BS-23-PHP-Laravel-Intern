<?php
// The GET and POST methods are two of the most commonly used HTTP request methods to send data to the server from a client
/*
 GET method is used to retrieve data from the server.
 POST method is used to send data to the server.
*/
// Pre-set the value of 'name'
$name = isset($_POST['name']) ? $_POST['name'] : "User Name";

if (isset($_POST['name'])) {
    echo $name;
}
?>
<!DOCTYPE html>

<head>
    <title>Get Post Method Handling</title>
</head>

<body>

    <!-- The form sends the POST request -->
    <form method="post" action="">
        <input type="text" name="name" value="<?php echo $name; ?>"> <!-- Pre-fill the input with $name -->
        <input type="submit">
    </form>
    <br>
    <br>
    <!-- The link sends the GET request -->
    <a href="get_methode.php?name=<?php echo $name; ?>">Get Name</a>

</body>

</html>