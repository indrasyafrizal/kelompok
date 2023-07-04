<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM pengguna WHERE nim = $id ";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pengguna</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA PENGGUNA
            </div>
            <div class="card-body">
              <form action="update_pengguna.php" method="POST">
                
              <div class="form-group">
                  <label>NIM</label>
                  <input type="number" name="nim"  value="<?php echo $row['nim'] ?>" placeholder="" class="form-control">
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama"  value="<?php echo $row['nama'] ?>" placeholder="" class="form-control">
                </div>

               
                <div class="form-group">
                  <label>KELAS</label>
                  <input type="text" name="kelas"  value="<?php echo $row['kelas'] ?>" placeholder="" class="form-control">
                </div>

                <div class="form-group">
                  <label>JURUSAN</label>
                  <input type="text" name="jurusan"  value="<?php echo $row['jurusan'] ?>" placeholder="" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <br>
                <br>
                <a href="awalpengguna.php" class="btn btn-sm btn-danger">KEMBALI</a>

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