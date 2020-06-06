<?php
include_once('myDbConnector.php');
	$sql = "DELETE FROM healthdeclarationsystem WHERE id='$_GET[id]'";
	
	
	if(mysqli_query($conn, $sql))
		header("refresh:1; url = m4.php");
	else
		echo "Note Deleted";
?>