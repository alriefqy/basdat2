<?php


	//echo $user;
	require('tabel.php');
	//require('connect.php');
	require_once('connect.php');

	function autoload($class)
		{
			$namaFile = $class.'.php';//mencari semua file php dalam folder 
			include_once $namaFile;
	//fungsi autoload_register berfungsi agar semua class yang dibuat tidak perlu di include satu persatu
	//fungsi ini juga akan di include kan ketika pembuatan class baru dilakukan
		}
	spl_autoload_register('autoload');// include semua nama file yang ber ekstensi php di file 
	try
	{
		$tabel = new tabel($db);
		// /$crud = new crud($db);
	
	}
	catch(Exception $e)
	{
		die('salah');
	}
	$tabel->buatTabelMahasiswa($db);
	$tabel->buatTabelMataKuliah($db);
	$tabel->buatTabelDosen($db);
	$tabel->buatTabelJurusan($db);
	$tabel->buatTabelRuangKuliah($db);
	include 'view_mahasiswa.php';

?>