<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA BUKU PADA PERPUSTAKAAN
            </div>
            <div class="card-body">
              <a href="tambah_buku.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">ID BUKU</th>
                    <th scope="col">JUDUL BUKU</th>
                    <th scope="col">PENERBIT</th>
                    <th scope="col">TAHUN</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM buku");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_buku'] ?></td>
                      <td><?php echo $row['judul_buku'] ?></td>
                      <td><?php echo $row['penerbit'] ?></td>
                      <td><?php echo $row['tahun'] ?></td>
                      <td class="text-center">
                        <a href="edit_buku.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_buku.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <br>
          <br>
                <br>
                <a href="ajax_jquery.php" class="btn btn-sm btn-warning">KEMBALI</a>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>