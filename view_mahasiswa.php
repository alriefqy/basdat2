<style>
     table{border-collapse:collapse;width:80%;margin:auto;}
     table, th, td{border:1px solid #666666;font-family:helvetica, sans, serif;font-size:12pt;}
</style>
<table>
     <h3><center>Tabel Mahasiswa</center></h3>
     <form action ="result.php" method = "post">
  
          <input name="search" type="text" size="30" placeholder="Search Here"/>

          <input type="submit" value="Search"/>

          </form> 

          
          

     <caption><a href="create.php">Add Data</a>
     </caption>
     <thead>
          <tr>
               <th>Nim</th>
               <th>Name</th>
               <th>Semester</th>
               <th>Alamat</th>
               <th>Kode Jurusan</th>
               <th>Kode Mata Kuliah</th>
               <th>Aksi</th>
          </tr>
     </thead>
     <tbody>
          <?php
          include "connect.php";
          $res = $db->query("SELECT * FROM mahasiswa");
$res->fetch_row();//ketika menggunakan fetch array dia melakukan pemanggilan index dengan numeric array atau string array  index
foreach ($res as $row) //dia juga bisa melakukan pemanggilan dengan nama index nya dan bentuknya associative array
                    //Dia termasuk associative array, yaitu array dengan index key menggunakan string
                    //ada banyak tipe associative array ada assoc,row,array, perbedaan ketiganya terletak pada waktu eksekusi, dan hasil pemanggilan array nya, row index pemanggil berupa urutan atau angka,array dia bisa angka dan string, kemudian assoc dia cuman bisa string
{
     ?>
     <tr>
          <td><?php echo $row['nim'] ?></td>
          <td><?php echo $row['nama'] ?></td>
          <td><?php echo $row['semester'] ?></td>
          <td><?php echo $row['alamat'] ?></td>
          <td><?php echo $row['kode_jurusan'] ?></td>
          <td><?php echo $row['kode_matakuliah'] ?></td>
          <td>
               <a href="update.php?nim=<?php echo $row['nim'] ?>">Edit</a>
               <a href="delete.php?nim=<?php echo $row['nim'] ?>">Delete</a>
          </td>
     </tr>
     <?php
}
?>

</tbody>
</table>