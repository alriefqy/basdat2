<?php
include "connect.php";
if(isset($_POST['bts'])):
     $stmt = $db->prepare("INSERT INTO mahasiswa(nim,nama,semester,alamat,kode_jurusan,kode_matakuliah) VALUES (?,?,?,?,?,?)");
     $stmt->bind_param('ssssss', $nim, $nama, $semester, $alamat ,$kode_jurusan,$kode_matakuliah);
 
     $nim			= $_POST['nim'];
     $nama			= $_POST['nama'];
     $semester		= $_POST['semester'];
     $alamat		= $_POST['alamat'];
     $kode_jurusan 	= $_POST['kode_jurusan'];
     $kode_matakuliah= $_POST['kode_matakuliah'];
 
     if($stmt->execute()):
          echo "<script>location.href='view_mahasiswa.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>
<form method="post">
<p><input type="text" placeholder="Nim" name="nim" required /></p>
<p><input type="text" placeholder="Nama" name="nama" required/></p>
<p><input type="text" placeholder="Semester" required name="semester"/></p>
<p><input type="text" placeholder="Alamat"  required name="alamat"/></p>
<p><input type="text" placeholder="Kode Jurusan" required name="kode_jurusan"/></p>
<p><input type="text" placeholder="Kode Matakuliah" required name="kode_matakuliah"/></p>
<input type="submit" value="Save" name="bts"/>
</form>