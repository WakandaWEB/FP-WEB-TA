<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"/>
		</head>
		<body>
			<div id="template">
				<div id="header">
				<p style="text-align:justify;"><img src="img/logo pens.png" width=90px height=90px style="float:left; margin:0 8px 4px 0;" />Website Tugas Akhir</p>
				<h3>POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</h3>
				<table class="table">
				<p align="right">
				<tr>
					<th><i class="fa fa-search"></i></th>
					<th><input type="cari" type="text/css" placeholder="search..."></th>
					<input type="submit" value="cari">
				</p>
				</tr>
				</div>
				
				<div id="menu">
				<nav class="horizontal-nav full-width horizontalNav-notprocessed">
				<ul class="sf-menu">
				<li><a href="halaman1.php">HOME</a></li>
				<li><a href="halaman1.php">KARYA ILMIAH</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				</ul>
				</nav>
				</div>
				
				<div id="content">
					<div id="left-content">
						<div class="row">
							<div class="col-md-12">
							<a href="userpageprogress.php"><p>Cek progress</p></a>
								</div>
							</div>
	
	
						<div class="col-md-12">
							<p>PENCARIAN BUKU</p>
							<div class="row">
								<div class="col-md-12">
								<tr>
									<th><p>Pengarang</p></th>
									<th><input type="pengarang" type="text/css"></th>
								</tr>
								<tr>
									<th><p>Subyek</p></th>
									<th><input type="subyek" type="text/css"></th>
								</tr>
								<tr>
									<th><p>Kata kunci</p></th>
									<th><input type="katakunci" type="text/css"></th>
								</tr>
								</div>
							</div>
						</div>
					
					
					
					</div>
					
					<div id="right-content">
					<p> hellooooo</p>
					</div>
				</div>
				
				<div id="footer">
				<p> hellooooo</p>
				</div>
				
			</div>
			
		</body>
</html>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from user where nama like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from mhs");		
	}
	$no = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
	</tr>
	<?php } ?>
</table>
