<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM buku WHERE id_buku = $id LIMIT 1";

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
              EDIT BUKU
            </div>
            <div class="card-body">
              <form action="update_buku.php" method="POST">
                
              <div class="form-group">
                  <label>ID BUKU</label>
                  <input type="text" name="id_buku"  value="<?php echo $row['id_buku'] ?>" placeholder="Masukkan Id Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>JUDUL BUKU</label>
                  <input type="text" name="judul_buku"  value="<?php echo $row['judul_buku'] ?>" placeholder="Masukkan Judul Buku" class="form-control">
                </div>

               
                <div class="form-group">
                  <label>PENERBIT</label>
                  <input type="text" name="penerbit"  value="<?php echo $row['penerbit'] ?>" placeholder="Masukkan Nama Penerbit" class="form-control">
                </div>

                <div class="form-group">
                  <label>TAHUN TERBIT</label>
                  <input type="text" name="tahun"  value="<?php echo $row['tahun'] ?>" placeholder="Masukkan Tahun Terbit" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="awalbuku.php" class="btn btn-sm btn-danger">KEMBALI</a>

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