<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM peminjaman WHERE nim = $id ";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA PEMINJAM
            </div>
            <div class="card-body">
              <form action="update_pinjam.php" method="POST">
                
              <div class="form-group">
                  <label>NIM</label>
                  <input type="number" name="nim"  value="<?php echo $row['nim'] ?>" placeholder="" class="form-control">
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama"  value="<?php echo $row['nama'] ?>" placeholder="" class="form-control">
                </div>

               
                <div class="form-group">
                  <label>JUDUL BUKU</label>
                  <input type="text" name="nama_buku"  value="<?php echo $row['nama_buku'] ?>" placeholder="" class="form-control">
                </div>

                <div class="form-group">
                  <label>TANGGAL PEMINJAMAN</label>
                  <input type="tanggal" name="tgl_pinjam"  value="<?php echo $row['tgl_pinjam'] ?>" placeholder="" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <br>
                <br>
                <a href="awalpinjam.php" class="btn btn-sm btn-danger">KEMBALI</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>