<?php
	if(isset($_POST['submit'])){
		$name = htmlspecialchars($_POST['value'], ENT_QUOTES);
		echo $name;
	}
?>
