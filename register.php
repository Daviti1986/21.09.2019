<?php
$data = $_POST;

if (empty($data)) {
    die('Please provider proper data');
}






$file = $_FILES['file'];

$info = pathinfo($_FILES['file']['name']);
$ext = $info['extension']; 
$filename = $info['filename'] . '_'.uniqid(); 
move_uploaded_file($file['tmp_name'], './'.$filename. '.'.$ext);





$upload_dir = './'; 
$name= "."."txt";
$my_file = $upload_dir.$name;
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = gio;
fwrite($handle, $data);

header("Location: http://localhost:3333");