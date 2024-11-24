<?php
    include './koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="col-10 m-auto">
        <p class="h1 text-center p-5">Table Mahasiswa</p><br>
        <a href="create.php" class="btn btn-primary">Tambah Data</a>
         <table class="table table-hover table-bordered border-primary mt-3">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nim</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Email</th>
                  <th scope="col">Whatsaap</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <?php
                  $query = "SELECT * FROM mahasiswa";
                  $result = mysqli_query($koneksi, $query);
                  $no = 1;
                  while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['nim']."</td>";
                    echo "<td>".$row['jenis_kelamin']."</td>";
                    echo "<td>".$row['alamat']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['whatsaap']."</td>";
                    echo "<td>
                          <a href='edit.php?id=".$row['id']."' class='btn btn-warning'>Edit</a>
                          <a href='hapus.php?id=".$row['id']."' class='btn btn-danger'>Hapus</a>
                          </td>";
                    echo "</tr>";
                  }
              ?>
              <body>
                <tr>
                  <td scope="row"></td>
                  <td scope="row"></td>
                  <td scope="row"></td>
                  <td scope="row"></td>
                  <td scope="row"></td>
                  <td scope="row"></td>
                  <td scope="row"></td>
                  <td scope="row"></td>
                </tr>
              </body>
         </table>
      </div>
    </div>
</body>
</html>