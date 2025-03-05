 <?php
  //  File Handling
  // File handling is an important part of web development. PHP has several functions for creating, reading, uploading, and editing files.
  //
  // File Handling Functions
  // PHP has several functions for creating, reading, uploading, and editing files. The following functions are frequently used:    
  // fopen() - Opens a file
  // fread() - Reads from an open file
  // fwrite() - Writes to an open file
  // fclose() - Closes an open file
  // feof() - Checks if the "end-of-file" (EOF) has been reached
  // fgets() - Reads a line from an open file
  // fgetc() - Reads a character from an open file
  //
  // File Handling Modes
  // The fopen() function is also used to specify the file opening mode. The following modes are frequently used:
  // r - Opens a file for reading only. The file pointer is placed at the beginning of the file.
  // w - Opens a file for writing only. Erases the contents of the file or creates a new file if it doesn't exist. The file pointer is placed at the beginning of the file.
  // a - Opens a file for writing only. The file pointer is placed at the end of the file. Creates a new file if it doesn't exist.
  // x - Creates a new file for writing only. Returns FALSE and an error if the file already exists.
  // r+ - Opens a file for reading and writing. The file pointer is placed at the beginning of the file.
  // w+ - Opens a file for reading and writing. Erases the contents of the file or creates a new file if it doesn't exist. The file pointer is placed at the beginning of the file.
  // a+ - Opens a file for reading and writing. The file pointer is placed at the end of the file. Creates a new file if it doesn't exist.
  // x+ - Creates a new file for reading and writing. Returns FALSE and an error if the file already exists.
  //File open
  $file = fopen("test.txt", "r");  // Opens the file in read mode
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }
    fclose($file);  

}

//File write
$file = fopen("test.txt", "w");  // Opens the file in write mode
fwrite($file, "Hello World\n");
fclose($file);


$file = file_get_contents("test.txt");
echo $file;

//File append
$file = fopen("test.txt", "a");  // Opens the file in append mode
fwrite($file, "Hello World\n");
fclose($file);
  ?>