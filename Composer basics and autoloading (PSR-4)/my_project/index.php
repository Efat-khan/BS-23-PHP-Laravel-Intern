<?php
require 'vendor/autoload.php'; 

use MyApp\Models\User; 

$user = new User();
echo $user->getName(); 

?>