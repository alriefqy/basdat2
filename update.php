<?php
include "connect.php";
if(isset($_GET['nim'])):
     if(isset($_POST['update'])):
          $stmt = $db->prepare("UPDATE mahasiswa SET nama=?, semester=?, alamat=?, kode_jurusan=?, kode_matakuliah=? WHERE nim=?");
          $stmt->bind_param('ssssss', $nama, $semester, $alamat ,$kode_jurusan,$kode_matakuliah,$nim);
     
     $nim              = $_POST['nim'];
     $nama               = $_POST['nama'];
     $semester      = $_POST['semester'];
     $alamat        = $_POST['alamat'];
     $kode_jurusan  = $_POST['kode_jurusan'];
     $kode_matakuliah= $_POST['kode_matakuliah'];
 
          if($stmt->execute()):
               echo "<script>location.href='tugas1.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     $res = $db->query("SELECT * FROM mahasiswa WHERE nim=".$_GET['nim']);
     $row = $res->fetch_assoc();
?>
<form method="post">
     <input type="hidden" value="<?php echo $row['nim'] ?>" name="nim"/>
     <p><input type="text" value="<?php echo $row['nama'] ?>" name="nama"/></p>
     <p><input type="text" value="<?php echo $row['semester'] ?>" name="semester"/></p>
     <p><input type="text" value="<?php echo $row['alamat'] ?>" name="alamat"/></p>
     <p><input type="text" value="<?php echo $row['kode_jurusan'] ?>" name="kode_jurusan"/></p>
     <p><input type="text" value="<?php echo $row['kode_matakuliah'] ?>" name="kode_matakuliah"/></p>
     
     <input type="submit" value="Update" name="update"/>
</form>
<?php
endif;
?>