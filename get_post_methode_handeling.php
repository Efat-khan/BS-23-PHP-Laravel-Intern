<?php 
// Pre-set the value of 'name'
$name = isset($_POST['name']) ? $_POST['name'] : "User Name"; 

if(isset($_POST['name'])){
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
<a href="get_methode.php?name=<?php echo $name;?>">Get Name</a>

</body>
</html>


