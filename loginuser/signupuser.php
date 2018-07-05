<?php
if(isset($_POST['upload']))
{    
		include 'config.php';
        $nrp=htmlentities(trim($_POST['nrp'])); 
		$nama=htmlentities(trim($_POST['nama']));
		$kelas=htmlentities(trim($_POST['kelas'])); 		
		$prodi=htmlentities(trim($_POST['prodi'])); 
		$username=htmlentities(trim($_POST['un']));  
		$password=htmlentities(trim($_POST['pw'])); 
		
		
		if( (empty($nrp)) || (empty($nama)) || (empty($kelas)) || (empty($prodi)) || (empty($username)) || (empty($password)) ){
			echo 'error! data tidak boleh kosong';
		} else {
                $query = "insert into user (nrp,nama,kelas,prodi,username,password)".
						"VALUES ('$nrp','$nama','$kelas','$prodi','$username','$password')";
								
				mysql_query($query) or die('Error, query failed' . mysql_error());                    
				mysql_close($conn);
				echo "sukses memasukkan"." $username";
				exit;						
				}    
}        
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">SIGN UP MAHASISWA</h2>
			
        </div>
        <div class="artikel">
            <form action="" method="post" name="frmLogin" id="frmLogin">
                <div class="grup">
                    <label for="nrp">NRP</label>
                    <input name="nrp" type="text" id="nrp" placeholder="Masukkan NRP">
                </div>
				<div class="grup">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text" id="nama" placeholder="Masukkan Nama">
                </div>
				<div class="grup">
                    <label for="kelas">Kelas</label>
                    <input name="kelas" type="text" id="kelas" placeholder="Masukkan Kelas">
                </div>
				<div class="grup">
                    <label for="Prodi">Prodi</label>
                    <input name="prodi" type="text" id="prodi" placeholder="Masukkan Prodi">
                </div>
				<div class="grup">
                    <label for="username">Username</label>
                    <input name="un" type="text" id="un" placeholder="Masukkan username Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input name="pw" type="password" id="pw" placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                    <input name="upload" type="submit" id="upload" value="SignUp">					
          
				</div>
            </form>
        </div>
    </div>
</body>
</html>