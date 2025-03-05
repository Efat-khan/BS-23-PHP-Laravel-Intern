
<?php
// Indexed Arrays
// An indexed array is an array where the index (or key) is automatically assigned starting from 0.
echo "Indexed Arrays";
$car = ["Volvo", "BMW", "Toyota"];

echo "I like " . $car[0] . ", " . $car[1] . " and " . $car[2] . ".<br>";
foreach ($car as $value) {
  echo $value . "<br>";
}
// Associative Arrays
// In associative arrays, keys are explicitly defined instead of numerical indexes.
echo "<br/><br/><br/>Associative Arrays";

$age = ["Efat" => "3.40", "Nasir" => "3.7", "sakib" => "3.00"];

echo "Efat's GPA is " . $age['Efat'] . ".<br>";
foreach ($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value . "<br>";
}

// Multidimensional Arrays
// These are arrays that contain other arrays as elements. For example, a 2D array 
echo "<br/><br/><br/>Multidimensional Arrays";
$student = [
  ["Efat", "3.40", "CSE"],
  ["Nasir", "3.7", "EEE"],
  ["Sakib", "3.00", "BBA"]
];

echo $student[0][0] . " is a " . $student[0][2] . " student with a GPA of " . $student[0][1] . ".<br>";
echo $student[1][0] . " is a " . $student[1][2] . " student with a GPA of " . $student[1][1] . ".<br>";
echo $student[2][0] . " is a " . $student[2][2] . " student with a GPA of " . $student[2][1] . ".<br>";
foreach ($student as $value) {
  // identify column using 0,1,2
  echo "Name=" . $value[0] . ", GPA=" . $value[1] . ", Department=" . $value[2] . "<br>";
}
// Sorting Arrays
echo "<br/><br/><br/>Sorting Arrays";
$car = ["Volvo", "BMW", "Toyota"];
sort($car);
echo "Sorted car array: <br/>";
foreach ($car as $value) {
  echo $value . "<br>";
}

// Array map 
// Applies a callback function to each element of an array.
echo "<br/><br/><br/>Array map";
$count = [1, 2, 3, 4, 4];

$map_count = array_map(function ($value) {
  return pow($value, 2);
}, $count);
print_r($map_count);
foreach ($map_count as $key => $value) {
  echo $key . '=' . $value . "<br>";
}

// string conversion
echo "<br/><br/><br/>String conversion<br/>";
$colors = ["red", "green", "blue"];
echo implode(", ", $colors) . "<br>";

// Array merge
echo "<br/><br/><br/>Array merge<br/>";
$car = ["Volvo", "BMW", "Toyota"];
$color = ["red", "green", "blue"];
print_r(array_merge($color, $car));

// Array pop
echo "<br/><br/><br/>Array pop<br/>";
$car = ["Volvo", "BMW", "Toyota"];
array_pop($car);
print_r($car);
// Array push
echo "<br/><br/><br/>Array push<br/>";
$car = ["Volvo", "BMW", "Toyota"];
array_push($car, "Audi");
print_r($car);

// Array shift
echo "<br/><br/><br/>Array shift<br/>";
$car = ["Volvo", "BMW", "Toyota"];
array_shift($car);
print_r($car);

// Array unshift
echo "<br/><br/><br/>Array unshift<br/>";
$car = ["Volvo", "BMW", "Toyota"];
array_unshift($car, "Audi");
print_r($car);

// Array slice
echo "<br/><br/><br/>Array slice<br/>";
$car = ["Volvo", "BMW", "Toyota", "Audi"];
$sliced_array = array_slice($car, 1, 2);
print_r($sliced_array);

// String convertion function

echo "<br/><br/><br/>String convertion function<br/>";

$string = "Hello, World!";
echo strlen($string);
echo "<br>";
echo str_word_count($string);
echo "<br>";
echo strrev($string);
echo "<br>";
echo strpos($string, "l");
echo "<br>";

echo str_replace("World", "Efat", $string);
echo "<br>";
if (preg_match("/World/", $string)) {
  echo "Match found!";
} else {
  echo "No match!";
}
echo "<br>";
echo str_repeat($string, 5);
echo "<br>";
$string = "apple,banana,cherry";
$array = explode(",", $string);
print_r($array); 
echo "<br>";
$string = "   Hello, World!   ";
$trimmedString = trim($string);
echo $trimmedString;


// Regex Basics in PHP
// Regular expressions (regex) are patterns used to match character combinations in strings. They are powerful tools for searching, replacing, and validating strings based on specific patterns.

// preg_match()
// The preg_match() function searches a string for a pattern and returns true if the pattern exists, and false otherwise.
echo "<br/><br/><br/>preg_match()<br/>";
$string = "Hello, World!";
if (preg_match("/Hello/", $string)) {
  echo "Match found!";
  } else {
    echo "No match!";
    }
    // preg_match_all()
    // The preg_match_all() function performs a regular expression match on string, and returns the number
    echo "<br/><br/><br/>preg_match_all()<br/>";
    $string = "Hello, World!";

    if (preg_match_all("/Hello/", $string)) {
      echo "Match found!";
    } else {
      echo "No match!";
    }
    // preg_replace()
    // The preg_replace() function performs a regular expression search on a string and replaces the matches with a replacement string.
    echo "<br/><br/><br/>preg_replace()<br/>";
    $string = "Hello, World!";
    echo preg_replace("\s", "Efat", $string);
    // preg_split()
    // The preg_split() function performs a regular expression match on a string and returns an array of strings. The string    is split at the matches.  
    echo "<br/><br/><br/>preg_split()<br/>";
    $string = "Hello, World!";
    $array = preg_split("/,/", $string);
    print_r($array);
    
?>