<?php
$data = [
    ["emp_id", "firstname", "lastname", "email"],
    ["1","John", "Dalton", "john@example.com"],
    ["2","Doe","joy", "jane@example.com"],
];

$file = fopen("data.csv", "w"); // Open the file in write mode
foreach ($data as $row) {
    fputcsv($file, $row); // Write each row to the CSV
}
fclose($file); // Close the file
echo "CSV file created successfully!";
?>