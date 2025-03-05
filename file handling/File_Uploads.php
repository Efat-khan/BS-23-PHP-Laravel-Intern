<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
    $fileTempPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileDesc = 'uplods/'.basename($fileName);
    if(move_uploaded_file($fileTempPath, $fileDesc)){
      echo 'File uploaded successfully';
  }else{
    echo 'Failed to upload file';
  }
}else{
  echo 'Failed to upload file';
}
}
?>

<!DOCTYPE html>
<head>
  <title>File Uploads</title>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
  </form>
</body>
</html>