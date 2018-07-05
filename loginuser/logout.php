<?php
	include 'config.php';
	session_start();
        
	$_SESSION['sadmin_username']="";
	$_SESSION['sadmin_nama']="";
	header( 'location: halaman1.php' );
	
	mysql_close($conn);
?>
