<?php
$host="localhost";
$user="vkuser";
$pass="pass";
$db_name="testdb";
$link=new mysqli($host,$user,$pass, $db_name);
if(isset($_GET['post'])) {
	$str = "SELECT * FROM posts where id='".$_GET['post']."';";
	$res = $link->query($str);
	$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
	foreach($data as $d)
		echo $d['title'];
	$res->close();
}
?>
