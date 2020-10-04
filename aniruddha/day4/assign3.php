<?php
$name = $_FILES['upfile'] ['name']; 
$type= $_FILES ['upfile'] ['type'];
$size = $_FILES ['upfile'] ['size'];
$tempfile = $_FILES ['upfile'] ['tmp_name'];
$error = $_FILES ['upfile'] ['error'];

if ($error > 0)
{
die("error uploading file.");
}

else {
move_uploaded_file($tempfile,"uploaded/".$name);
echo "Upload complete <br>";
echo "File name = ".$name."<br>";
echo "File size = ".$size;
}
?>