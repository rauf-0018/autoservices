<?php
ini_set('display_errors','Off');
ini_set('error_reporting',E_ALL);
define('WP_DEBUG',false);
define('WP_DEBUG_DISPLAY',false);
session_start();
$namesss="";
$numsss="";
$picksss="";
$dropsss="";
$licensesss="";
$aadharsss="";
$db=mysqli_connect('remotemysql.com','FJuyX5aExk','uO02N5eAJD','FJuyX5aExk');
$namesss=mysqli_real_escape_string($db,$_POST['name']);
$numesss=mysqli_real_escape_string($db,$_POST['vehicleno']);
$picksss=mysqli_real_escape_string($db,$_POST['pick']);
$dropsss=mysqli_real_escape_string($db,$_POST['college']);
$namelicense= $_FILES['license']['name'];
$tmp_name= $_FILES['license']['tmp_name'];
$submitbutton= $_POST['subbtn'];
$position= strpos($namelicense, "."); 
$fileextension= substr($namelicense, $position + 1);
$fileextension= strtolower($fileextension);
$description= $_POST['description_entered'];
if (isset($namelicense)) {
$path= 'Uploads/files/';
if (!empty($namelicense)){
if (move_uploaded_file($tmp_name, $path.$namelicense)) {
echo 'Uploaded!';
}
}
}

$nameaadhar= $_FILES['aadhar']['name'];
$tmp_name= $_FILES['aadhar']['tmp_name'];
$submitbutton= $_POST['subbtn'];
$position= strpos($nameaadhar, "."); 
$fileextension= substr($nameaadhar, $position + 1);
$fileextension= strtolower($fileextension);
$description= $_POST['description_entered'];
if (isset($nameaadhar)) {
$path= 'Uploads/files/';
if (!empty($nameaadhar)){
if (move_uploaded_file($tmp_name, $path.$nameaadhar)) {
echo 'Uploaded!';
}
}
}
$query= "INSERT INTO autodriver (name,vehiclenum,pick,droploc,license,aadhar) VALUES('$namesss','$numsss','$picksss','$dropsss','$namelicense','$nameaadhar')";
mysqli_query($db,$query);
?>