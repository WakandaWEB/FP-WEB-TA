<?php
// we must never forget to start the session
session_start();

$errorMessage = '';
if (isset($_POST['un']) && isset($_POST['pw'])) {
    include 'config.php';
    
    $username = $_POST['un'];
    $password = $_POST['pw'];
    
    // check if the user id and password combination exist in database
    $sql = "SELECT * 
            FROM user
            WHERE username = '$username' AND password = '$password'";
    
    $result = mysql_query($sql) or die('Query failed. ' . mysql_error()); 
    
    if (mysql_num_rows($result) == 1) {
        // the user id and password match, 
        // set the session
        $_SESSION['db_is_logged_in'] = true;
        
        // after login we move to the main page
		include 'main.php';
        exit;
    } else {
        $errorMessage = 'Sorry, wrong user id / password';
    }
	mysql_close($conn);
}
?>


<html>
<head>
    <link rel="stylesheet" href="style.css">
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


    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">LOGIN MAHASISWA</h2>
			
        </div>
        <div class="artikel">
            <form action="" method="post" name="frmLogin" id="frmLogin">
                <div class="grup">
                    <label for="username">Username</label>
                    <input name="un" type="text" id="un" placeholder="Masukkan username Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input name="pw" type="password" id="pw" placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                    <input name="btnLogin" type="submit" id="btnLogin" value="Login">					
                </div>
				
				<div class="grup">
				<a href="signupuser.php"><p>Don't have account? Sign Up here! </p>
				<input name="btnSignup" type="submit" id="btnSignup" value="Signup" onClick='top.location = "signupuser.php"'>
				</div>
            </form>
        </div>
    </div>
</body>
</html>