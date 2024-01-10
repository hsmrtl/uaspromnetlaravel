<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
   

    <title>UAS Pemprograman Internet</title>
    <style>
     body {
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
  margin: 0;
  margin-bottom: 10px;
  padding: 0;
  background-color: rgba(104, 170, 255, 0.247);
}

header {
  background-color: #3a03ff;
  color: white;
  padding: 10px;
  text-align: center;
}
section {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
}

/* Container styling using Flexbox */
.background-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 800px;
  margin: 10px auto;
  padding: 10px;
  position: relative;
}

/* Set order untuk kartu di sebelah kanan */
.card-center {
  order: -1; /* Kartu ini akan diletakkan di sebelah kanan */
  border-radius: 8px;
  box-shadow: 0 4px 8px rgb(56, 56, 54);
  transition: box-shadow 0.3s ease;
  background-color: rgb(255, 249, 241);
  padding: 40px;
  margin: 0 auto;
  transition: box-shadow 0.3s ease;
  padding-top: 10px auto;
  padding-bottom: 10px auto;
  max-width: 900px;
}
.card-center a {
  color: rgb(201, 38, 38);
}

.form-container {
  max-width: 100px; /* Lebar maksimum formulir */
  margin: 0px auto; /* Pusatkan formulir di tengah halaman */
  margin-bottom: 30px;
  box-shadow: #fdd007;
}

h1 {
  font-size: 24px; /* Ganti dengan ukuran yang diinginkan, contohnya 24px */
}

/* Menyesuaikan ukuran elemen-elemen formulir */
.form-label {
  font-weight: bold;
}

.form-control {
  width: 100%;
  background-color: #fddf574f;
}

.btn {
  margin-top: 10px;
}

/* Menyesuaikan ukuran file input */
.input-group {
  width: 100%;
  background-color: #fddf574f;
}

.input-group-text {
  width: 20%; /* Lebar elemen label 'Upload' */
}

#inputGroupFile02 {
  width: 80%; /* Lebar elemen input file */
  background-color: #fddf574f;
}

footer {
  background-color: #3a03ff;
  color: white;
  text-align: center;
  padding: 10px;
  position: fixed;
  bottom: 0;
  width: 100%;
  margin-top: 30px;
}

    </style>
</head>
<body>
     
      <header>
        <h1>
          Perpustakaan Universitas Muhammadiyah Tasikmalaya
        </h1>
      </header>
      
      
      
      <section class="background-section">
        <div class="card-center">
          <form action="{{url('databuku')}}" method="POST">
            @csrf
            <div class="mb-0 p-1">
              <h1 class="text-center">
                <strong>Data Buku</strong>
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
                aria-describedby="penulis"
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
      <br/>
      <br/>
    </body>
    <footer>
      <p>&copy; 2024 PerpusUmtas. All rights reserved.</p>
    </footer>
    
</html>