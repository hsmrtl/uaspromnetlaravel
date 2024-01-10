<?php
require_once("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styleform.css" />
    <title>Daftar</title>
  </head>
  <body>
    <header>
      <h1>
        <img src="logo.png" alt="header image" />
        Perpustakaan Universitas Muhammadiyah Tasikmalaya
      </h1>
    </header>

    <nav class="center-nav">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><strong>Beranda</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form.php"><strong>Formulir</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="daftarbuku.php"><strong>Daftar Buku</strong></a>
        </li>
      </ul>
    </nav>


    <section class="background-section">
      <div class="card-center">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-0 p-1">
            <h1 class="text-center">
              <strong>Formulir</strong>
            </h1>
            <br/>
            <div class="mb-0 p-1">
            <label for="id" class="form-label">ID Buku</label>
            <input
              type="text"
              name="id"
              class="form-control"
              aria-describedby="id"
            />
            <div id="id" class="form-text"></div>
          </div>
          <div class="mb-0 p-1">
            <label for="judul" class="form-label">Judul Buku</label>
            <input
              type="text"
              name="judul"
              class="form-control"
              aria-describedby="judul"
            />
            <div id="judul" class="form-text"></div>
          </div>
          <div class="mb-0 p-1">
            <label for="penulis" class="form-label">Penulis</label>
            <input
              type="text"
              name="penulis"
              class="form-control"
              aria-describedby="email"
            />
            <div id="penulis" class="form-text"></div>
          </div>
          <div class="mb-0 p-1">
            <label for="tahun" class="form-label">Tahun Terbit</label>
            <input type="text" name="tahun" class="form-control" />
          </div>

          <div class="mb-0 p-1">
            <label for="isbn" class="form-label">ISBN</label>
            <input
              name="isbn"
              type="text"
              class="form-control"
              aria-describedby="isbn"
            />
          </div>

          <button name="simpan" type="submit" class="btn btn-primary text-light">
            Tambahkan
          </button>
          <button
            type="reset"
            name="reset"
            class="btn btn-danger text-light"
          >
            <a class="text-light"> Batal</a>
          </button>
        </form>
      </div>
    </section>
    <br />
    <br />

    <footer>
      <p>&copy; 2024 PerpusUmtas. All rights reserved.</p>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

<?php
if(isset($_POST['simpan'])){
	$id =$_POST['id'];
	$judul =$_POST['judul'];
	$penulis =$_POST['penulis'];
	$tahun =$_POST['tahun'];
	$isbn =$_POST['isbn'];
	$simpan = mysqli_query($db, "INSERT INTO databuku VALUES ('$id','$judul','$penulis','$tahun','$isbn')");
	if ($simpan){
		header("location: daftarbuku.php");
	}else{
		echo "<script>alert('Data Sudah Ada');</script>";
	}
}
?>



