<?php
include "connect.php";
if(isset($_GET['nim'])):
     $stmt = $db->prepare("DELETE FROM mahasiswa WHERE nim=?");
     $stmt->bind_param('s', $id);
 
     $id = $_GET['nim'];
 
     if($stmt->execute()):
          echo "<script>location.href='tugas1.php'</script>";
     else:
          echo "<script>alert('".$stmt->error."')</script>";
     endif;
endif;
?>