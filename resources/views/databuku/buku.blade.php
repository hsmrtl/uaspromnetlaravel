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
    <link rel="stylesheet" href="stylehasil.css" />
    <title>Pendaftaran Beasiswa</title>
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
    
    <div class="table-container">
      <table class="mx-auto" cellspacing="0" border="1" cellpadding="5">
        <tr>
          <td><strong>No</strong></td>
          <td><strong>Judul Buku</strong></td>
          <td><strong>Penulis</strong></td>
          <td><strong>Tahun</strong></td>
          <td><strong>ISBN</strong></td>
          <td><strong>Aksi</strong></td>
        </tr>
       
    <tr>
        <td><?= $no; ?> </td>
        <td><?= $r['judul'];?></td>
        <td><?= $r['penulis'];?></td>
        <td><?= $r['tahun'];?></td>
        <td><?= $r['isbn'];?></td>
        <td>
        <a class="text-dark" href="?hapus&id=<?= $r ['id']; ?>">   Hapus 
        <svg  xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="black" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
        </svg>
        </a>
        <a class="text-dark" href="edit.php?id=<?= $r ['id']; ?>">   Edit 
        <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil" viewBox="0 0 16 16">
        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
        </svg>
        </a></td>
    </tr>

      </table>
    </div>

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
