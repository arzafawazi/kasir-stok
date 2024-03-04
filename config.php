<?php


date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	// sesuaikan dengan server anda
	$host 	= 'localhost'; // host server
	$user 	= 'root';  // username server
	$pass 	= ''; // password server, kalau pakai xampp kosongin saja
	$dbname = 'db_toko'; // nama database anda
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; // direktori fungsi select data

 
  // deklarasi parameter koneksi database
  $server   = "localhost";
  $username = "root";
  $password = "";
  $database = "db_toko";
  
  // koneksi database
  $mysqli = new mysqli($server, $username, $password, $database);
  
  // cek koneksi
  if ($mysqli->connect_error) {
      die('Koneksi Database Gagal : '.$mysqli->connect_error);
  }
  
