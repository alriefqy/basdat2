<?php

Class tabel
{
	private $db;
	public function __construct($database)
	{
		$this->db = $database;
	}
	public function buatTabelMahasiswa($db)
	{

		$sql = "CREATE TABLE IF NOT EXISTS mahasiswa (
		nim int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		nama varchar (255) NOT NULL,
		semester varchar(100) NOT NULL,
		alamat varchar(200) NOT NULL,
		kode_jurusan int(20) NOT NULL,
		kode_matakuliah int(20) NOT NULL
		)";

		if ($db->query($sql) === TRUE)
		{
			echo '<script>alert("Tabel Mahasiswa Dibuat");</script>';
		}
		else
		{
			echo '<script>alert("Tabel Gagal Dibuat");</script>';
		}
	}
	public function buatTabelMatakuliah($db)
	{
		$sql = "CREATE TABLE IF NOT EXISTS matakuliah (
		kode_matakuliah int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		matakuliah varchar (255) NOT NULL,
		sks varchar(100) NOT NULL,
		kode_ruang INT(20) NOT NULL,
		nip_dosen int(100) NOT NULL 
		)";
		if ($db->query($sql) === TRUE)
		{
			echo '<script>alert("Tabel Mata Kuliah Berhasil Dibuat");</script>';
		}
		else
		{
			echo '<script>alert("Tabel Gagal Dibuat");</script>';
		}
	}
	public function buatTabelDosen($db)
	{
		$sql = "CREATE TABLE IF NOT EXISTS dosen (
		nip_dosen int NOT NULL PRIMARY KEY,
		nama varchar(100) NOT NULL
		)";
		if ($db->query($sql) === TRUE)
		{
			echo '<script>alert("Tabel Dosen Berhasil Dibuat");</script>';
		}
		else
		{
			echo '<script>alert("Tabel Dosen Gagal Dibuat");</script>';
		}
	}
	public function buatTabelJurusan($db)
	{
		$sql = "CREATE TABLE IF NOT EXISTS jurusan (
		kode_jurusan int NOT NULL PRIMARY KEY,
		nama_jurusan varchar(100) NOT NULL
		)";
		if ($db->query($sql) === TRUE)
		{
			echo '<script>alert("Tabel Jurusan Berhasil Dibuat");</script>';
		}
		else
		{
			echo '<script>alert("Tabel Jurusan Gagal Dibuat");</script>';
		}
	}
	public function buatTabelRuangKuliah($db)
	{
		$sql = "CREATE TABLE IF NOT EXISTS ruangkuliah (
		kode_ruang int NOT NULL PRIMARY KEY,
		nama_ruang varchar(100) NOT NULL,
		kapasitas int(5) NOT NULL
		)";
		if ($db->query($sql) === TRUE)
		{
			echo '<script>alert("Tabel ruang Berhasil Dibuat");</script>';
		}
		else
		{
			echo '<script>alert("Tabel Ruang Gagal Dibuat");</script>';
		}
	}


	//public function buatTabelUkm($db)

}
?>