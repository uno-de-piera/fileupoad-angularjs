<?php
$file = $_FILES["file"]["name"];

if(!is_dir("files/"))
	mkdir("files/", 0777);

if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "files/".$file))
{
	echo $file;
}