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
    <link rel="stylesheet" href="stylelogin.css" />
    <title>Pendaftaran Beasiswa</title>
  </head>

  <body>
    <header>
      <h1>
        <img src="logo.png" alt="header image" />
        Perpustakaan Universitas Muhammadiyah Tasikmalaya
      </h1>
    </header>

    <section class="background-section-center">
      <div class="card-center">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="mb-0 p-1">
            <h1 class="text-center">
              <strong>Login</strong>
            </h1>
            <br />
          </div>
          <div class="mb-0 p-1">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" />
            <div class="form-text"></div>
          </div>
          <div class="mb-0 p-1">
            <label for="psw" class="form-label">Password</label>
            <input
              type="password"
              name="password"
              class="form-control"
              id="password"
            />
            <div id="password" class="mb-0 p-1"></div>
          </div>

          <button
            name="simpan"
            type="submit"
            class="btn btn-primary text-light"
          >
            Login
          </button>
          <button
            type="reset"
            name="reset"
            id="reset"
            class="btn btn-danger text-light"
          >
            <a class="cancelbtn text-light"> Cancel</a>
          </button>
        </form>
      </div>
    </section>

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
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "hana";
    $password = "111";

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username === $username && $input_password === $password) {
        // Autentikasi berhasil
        $_SESSION['loggedin'] = true;
        // Redirect ke halaman admin atau tindakan selanjutnya setelah login berhasil
        header("Location: admin_page.php");
        exit;
    } else {
        // Autentikasi gagal
        echo "Username atau password salah!";
    }
}
?>
