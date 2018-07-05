<!DOCTYPE html>
<html>
<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"/>
		<style type="text/css">
		header {
			background-color: white;
			padding-bottom: 40px;
			font-size: 20px;
			color: black;
		}
		.table i {
			padding-left: 40px;
			padding-right: 15px;
			font-size: 20px;
			padding-top: 5px;
			color: black;
		footer {
			background-color: #777;
			padding: 10px;
			text-align: center;
			color: white;
		}
		</style>
</head>
<body>
<!--==============================header=================================-->
	<header>
	<p style="text-align:justify;"><img src="img/logo pens.png" width=150px height=150px style="float:left; margin:0 8px 4px 0;" />Website Tugas Akhir</p>
	<h3>POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</h3>
	<table class="table">
	<p align="right">
	<tr>
		<th><i class="fa fa-search"></i></th>
		<th><input type="search" type="text/css" placeholder="search..."></th>
	</p>
	</header>
<!--==============================content=================================-->
	<div class="col-md-4">
	<div id="konten">
	<table class="table">
	
	<tr>
		
		<th><i class="fa fa-graduation-cap"></i></th>
		<th><a href="loginuser.php"><h4>LOGIN MAHASISWA</h4></th>
		<div class="col-md-4">
		<th><i class="fa fa-user-circle-o"></i></th>
		<th><a href="loginadmin.php"><h4>LOGIN ADMIN</h4></th>
		</div>
	</tr>	
	</div>
	<br>
	<div class="row">
	<div class="col-md-4">
		<p>ABOUT US</p>
		<div class="row">
			<div class="col-md-12">
			<img src="img/pensJOSS.jpg" width=300px height=150px/>
			</div>
		</div>
	</div>
	
	
	<div class="col-md-4">
		<p>JURNAL</p>
		<div class="row">
			<div class="col-md-12">
			<img src="img/jurnal.png" width=300px height=150px/>
			</div>
		</div>
	</div>
	
	<div class="col-md-4">
		<p>BUKU</p>
		<div class="row">
			<div class="col-md-12">
			<img src="img/buku.png" width=300px height=150px/>
			</div>
		</div>
	</div>
	</div>
	
	<div class="col-md-6">
		<p>NEWS</p>
		<div class="row">
			<div class="col-md-12">
			<img src="img/" width=300px height=150px/>
			</div>
		</div>
	</div>
	
	<div class="col-md-6">
		<p>PENGUMUMAN</p>
		<div class="row">
			<div class="col-md-12">
				<div align="center"><marquee direction="up" scrollamount="1" width="100%"> 
				<?php include 'news.php';
				?>
				<!--<center>FROM : ADMIN</br>
				TO : MHS</br>
				MESSAGE : MINAL AIDZIN WAL FAIDZIN</br>
				MOHON MAAF LAHIR DAN BATIN</center></marquee></div>-->
			</div>
		</div>
	</div>
	
<!--==============================footer=================================-->	

</body>
</html>