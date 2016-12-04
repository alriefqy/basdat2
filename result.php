<?php
  include "connect.php";

  $output = '';

  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);

    $query = $db->query("SELECT * FROM mahasiswa WHERE nama LIKE '%$search%' OR nim LIKE '%$search%'") or die ("Could not search");
    $count = mysqli_num_rows($query);
    
    if($count == 0){
      $output = "There was no search results!";

    }else{
    	echo "
    	<table cellpadding='5' border='2'>
    	<thead>
          <tr>
               <th>Nim</th>
               <th>Name</th>
               <th>Semester</th>
               <th>Alamat</th>
               <th>Kode Jurusan</th>
               <th>Kode Mata Kuliah</th>
               
          </tr>
     </thead>
     <tbody>
    	";
      while ($row = mysqli_fetch_array($query)) {
      	echo '
    	<tr >
          <td>'.$row['nim'].'</td>
          <td>'.$row['nama'].'</td>
          <td>'.$row['semester'].'</td>
          <td>'.$row['alamat'].'</td>
          <td>'.$row['kode_jurusan'].'</td>
          <td>'.$row['kode_matakuliah'].'</td>
        </tr>
        </tbody>
        </table>
     	<a href="tugas1.php">Back</a>
     	';


       

       

      }

    }
  }
  print ("$output");

  ?>