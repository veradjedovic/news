<?php 
require_once "../config.php";

if(isset($_POST['subscriber_name'],$_POST['subscriber_email'])){
$name = $_POST['subscriber_name'];
$email = $_POST['subscriber_email'];

$conn = mysqli_connect('localhost','root','','news');
$query = mysqli_query($conn,"INSERT INTO subscribers VALUES ('', '{$name}', '{$email}', '1')");
echo "Name: ".$name;
echo "E-mail: ".$email;
}
