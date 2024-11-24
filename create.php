<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Universitas | Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="col-10 m-auto">
        <?php
            include './koneksi.php';
        ?>
          <div class="cpl-10 m-auto" style="padding: 100px 0 0 0:">
            <h2 class="text-center fw-bold">Tambah Data Mahasiswa</h2>
            <div>
              <form action="createproses.php" method="post">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="text" class="form-control" id="nim" name="nim" required>
                </div>
                <div class="mb-3">
                  <p>Jenis Kelamin</p>
                  <input name="gender" type="radio" id="gender1input" value="Laki-Laki">
                  <label for="gender1input" classs="form-label">Laki-Laki</label>
                  <input name="gender" type="radio" id="gender2input" value="Perempuan">
                  <label for="gender2input" classs="form-label">Perempuan</label>
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                  <label for="whatsaap" class="form-label">whatsaap</label>
                  <input type="text" class="form-control" id="whatsaap" name="whatsaap" required>
                </div>
                <div class="mb-3">
                <button class="btn btn-md btn-primary px-5 mt-2">Submit</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
</body>
</html>