<?php
$connect=mysqli_connect("localhost","root","","exam");

$firstwidth = $_POST['firstWidth'];
$firstheight = $_POST['firstHeight'];
$firstcolor = $_POST['firstColor'];

$secondwidth = $_POST['secondWidth'];
$secondheight = $_POST['secondHeight'];
$secondcolor = $_POST['secondColor'];

//Empty table every time
$sql="TRUNCATE TABLE `exam`";
$query=mysqli_query($connect, $sql);

//Insert data
$sql ="INSERT INTO exam (id, width , height, color)  VALUES ('1', '$firstwidth' , '$firstheight','$firstcolor')";
$query=mysqli_query($connect, $sql);

$sql ="INSERT INTO exam (id, width , height, color)  VALUES ('2', '$secondwidth' , '$secondheight','$secondcolor')";
$query=mysqli_query($connect, $sql);

?>
