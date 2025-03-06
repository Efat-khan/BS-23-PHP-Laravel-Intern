<?php
// class Customer{
//   public $name;
//   private $age;

//   public function setAge($age){
//     if($age < 18){
//       throw new Exception("You are not eligible to register");
//     }
//     $this->age = $age;
//   }
//   public function getAge(){
//     return $this->age;
//   }
// }

// $obj = new Customer();
// $obj->name = "John";
// try{
//   $obj->setAge(17);
//   echo $obj->getAge();
// }catch(Exception $e){
//   echo "Error: ".$e->getMessage();
// }
// Example 2
// class customer{
//   private $name;
//   private $age;

//   public function setAge($name,$age){
//     if($age<18){
//       throw new Exception("You are not eligible to register");
//     }
//     $this->name = $name;
//     $this->age = $age;
//   }
//   public function get(){
//     return $this->name." is ".$this->age." years old";

//   }
// }

// $obj = new customer();
// try{
//   $obj->setAge("John", 17);
//   echo $obj->get();

// }
// catch(Exception $e){
//   echo "Error: ".$e->getMessage();
// }
// finally{
//   echo "<br/> NOW!!!";
// }
// Example 3
// $input = 0;
// try {
//   if ($input == 0) {
//       throw new Exception("Cannot divide by zero!");
//   }
//   echo 10 / 0;
// } catch (Exception $e) {
//   echo "Error: " . $e->getMessage();
// }
// finally{
//   echo "<br/> NOW!!!";
// }
//example 4
// try {
//   $filename = "welcome.txt";

//   if (!file_exists($filename)) {
//     throw new Exception("File not found");
//   }

//   $file = fopen($filename, "a");
//   fwrite($file, "\nHello World\n");
//   fclose($file);
// } catch (Exception $e) {
//   echo "Error: " . $e->getMessage();
// } finally {
//   // Reopen file in read mode to read content
//   if (file_exists($filename)) {
//     $file = fopen($filename, "r");
//     echo fread($file, filesize($filename));
//     fclose($file);
//   }

  // Example 5
  $data = [];

  try {
    $f = 'data.csv';
    if (!file_exists($f)) {
      throw new Exception("File not found.");
    }
    do {
      $f = fopen('data.csv', 'r');
      $row = fgetcsv($f);
      $data[] = $row;
    } while ($row);

    fclose($f);
  } catch (Exception $ex) {
    echo $ex->getMessage();
  }
?>
