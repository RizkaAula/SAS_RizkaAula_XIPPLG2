<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    
  <div class="jumbotron p-3 p-md-5 text-dark rounded bg-danger ">
      <center>
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic" >SUMPAH PEMUDA</h1>
          <p class="lead my-3"> <b>Momentum Generasi Muda untuk Aktif Majukan Indonesia</b></p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Tentang Sumpah Pemuda</a></p>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent justify-content-center">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <button class="btn btn-danger" onclick="window.location.href='home.php'">Arti</button>
      </li>
      <li class="nav-item">
      <button class="btn btn-danger" onclick="window.location.href='sejarah.php'">Sejarah</button>
      </li>
      <li class="nav-item">
      <button class="btn btn-danger" onclick="window.location.href='tokoh.php'">Tokoh</button>
      <li class="nav-item">
      <button class="btn btn-danger" onclick="window.location.href='buku.php'">Buku Tamu</button>
      </li>
      <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>
     </center>
      </div>
      <nav>
  </nav>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <h1>Daftar Tamu </h1>

    <form action ="" method="POST" name ="penjualan">

  <div class="form-group">
    <label for="nm">Nama :</label>
    <input type="text" class="form-control" id="nm" name="nm" Required>
  </div>
  <div class="form-group">
    <label for="kelas">kelas :</label>
    <input type="text" class="form-control" id="kelas" name="kelas" Required>
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan :</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" Required>
  </div>
  <!-- <div class="form-group">
    <label for="diskon">Diskon</label>
    <input type="text" class="form-control" id="diskon" name="diskon" Required>
  </div>
  <div class="form-group">
    <label for="jml_barang">Jumlah Barang</label>
    <input type="number" class="form-control" id="jml_barang" name="jml_barang" Required>
  </div> -->
  <button type="submit" name="submit" class="btn btn-primary">Sumbit</button>

</form>

<hr>
    <?php
    if(isset($_POST['submit'])){
      $nama =$_POST['nm'];
      $kelas =$_POST['kelas'];
      $jurusan =$_POST['jurusan'];



    ?>
     <div class="container">

            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Kelas</th>
                        <th scope='col'>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $kelas ?></td>
                        <td><?php echo $jurusan ?></td>

                    </tr>

                </tbody>
            </table>

    </div>
    <?php } ?>
    </div>
</body>
</html>
<br><br><br><br><b><b></b><br><br>
<footer class="bg-dark text-light text-center py-3">
    <p>&copy; 2023 Siswa SMK Bakti Nusantara 666</p>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
