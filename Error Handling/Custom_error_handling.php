<!-- Custom error handling -->
<?php
function error($error_number, $error_message, $error_file_name, $line_number)
{
  $err = "Error: [$error_number] $error_message - $error_file_name:$line_number";
  echo $err;
  file_put_contents("logs/" . date("Y-m-d") . ".txt", $err, FILE_APPEND);
}
set_error_handler("error");

echo $a;
?>