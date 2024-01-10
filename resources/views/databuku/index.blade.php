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
  padding: 0;
  background-color: rgba(193, 234, 241, 0.603);
}

header {
  background-color: #3a03ff;
  color: white;
  padding: 10px;
  text-align: center;
}

div.table-container {
  margin-left: 250px; /* Jarak kiri */
  margin-right: 250px; /* Jarak kanan */
}
table {
  margin-left: 20px;
  margin-right: 20px;
  margin-bottom: auto;
  margin-top: auto;
  background-color: #9ec3f383; /* Warna latar belakang tabel */
  color: #212529; /* Warna teks tabel */
  border-collapse: collapse; /* Menghilangkan border antar sel */
  width: 100%; /* Lebar tabel */
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif; /* Jenis font */
  font-size: 14px; /* Ukuran teks */
}

tr,
td {
  border: 1px solid #000000; /* Warna border sel */
  padding: 8px; /* Ruang padding di dalam sel */

  text-align: center; /* Posisi teks di dalam sel */
}

tr:nth-child(even) {
  background-color: #eecb6cc9; /* Warna latar belakang baris genap */
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
     

      <br/>
      <br/>
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
        <tbody>
            <?php $no=$data->firstItem()?>
            @foreach ($data as $item)
            <tr>
                <td>{{$no}}</td>
                <td>{{$item->judul}}</td>
                <td>{{$item->penulis}}</td>
                <td>{{$item->tahun}}</td>
                <td>{{$item->isbn}}</td>
                <td>
                    <button class="btn btn-outline-primary"><a style="color: #115a77" href="{{url('databuku/'.$item->id.'/edit')}}" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                          </svg>Edit</a></button>
                    <form onsubmit="return confirm('yakin akan menghapus data?')" class="d-inline" action="{{url('databuku/'.$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger"><a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                          </svg>Hapus</a></button>
                    </form>
                </td>
            </tr>
            <?php $no++ ?>
            @endforeach
        </tbody>
    </table>
    <br/>
    <br/>
    <button type="button" class="btn btn-primary ">
      <a class="text-light" href="{{url('databuku/create')}}">Tambahkan</a>
  </button>
      </div>
        
        
    </body>
    <br/>
    <br/>
    <br/>
    <br/>
    <footer>
        <p>&copy; 2024 PerpusUmtas. All rights reserved.</p>
      </footer>    
</html>