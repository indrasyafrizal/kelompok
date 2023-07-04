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
              DATA PEMINJAMAN BUKU PADA PERPUSTAKAAN SMK LEGION
            </div>
            <div class="card-body">
              <a href="tambah_pinjam.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NIM </th>
                    <th scope="col">NAMA</th>
                    <th scope="col">JUDUL BUKU</th>
                    <th scope="col">TANGGAL PINJAM</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM peminjaman");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nim'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['nama_buku'] ?></td>
                      <td><?php echo $row['tgl_pinjam'] ?></td>
                      <td class="text-center">
                        <a href="edit_pinjam.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_pinjam.php?id=<?php echo $row['nim'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
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