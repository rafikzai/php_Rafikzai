<?php 
$conn = mysqli_connect("localhost","root","","testdb");

if (!$conn){
  echo "koneksi gagal" . mysqli_connect_error();
}
?>
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="soal2.css">
    <title>Terrakorp_tabel</title>
  </head>
  <body>
    <br><br>
  <h1><center>Data<center></h1>
 
  </div>
<div class="container">
<table border=2 width= "1000px" height="5px" align="center" style="background-color:white;">
<thead>
      <tr align="center">
          <td>id </td>
          <td>Nama</td>
          <td>Alamat</td>
      </tr>
</thead

<?php
$id = 1;
?>
      <?php
      $query = mysqli_query($conn, "SELECT * FROM person");
      while ($dt = mysqli_fetch_assoc($query)) {
        
      
      ?>

      <tr>
        <td><?=$id++; ?></td>
        <td><?=$dt['nama']; ?></td>
        <td><?=$dt['alamat']; ?></td>
    </tr>

    <?php
    }
    ?>
    </tbody>
    </table>

    <h2><center> Pencarian Data </h2>
    <table border=2 width= "500px" height="300px" align="center" style="background-color:white;">
<tr align="center">
          <td>
          <form method="GET" action="">
          <div class="form-group">
                  <label for="cari">Nama Anda : </label>
                  <input type="text" class="form-control" id="cari" name="cari" placeholder="Nama Anda">
                </div>

                <button class="btn btn-primary">Submit</button>
           <?php
           if(isset($_GET['cari'])) {
            $word = $_GET['cari'];
            $query = mysqli_query($conn, "SELECT * FROM person WHERE nama LIKE '%$word%'"); 
          }
               ?>
                
  </td>
          </body>
</html>