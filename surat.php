<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/font/css/all.css">
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: yellow;">
        <div class="container">
          <a class="navbar-brand ms-auto" href="#"> <img src="foto/Logohima.png" width="40px" height="40px" alt="logo"> Himpunan Mahasiswa Informatika</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html#visi">Visi Misi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pendaftaran.html">Pendaftaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="surat.php">Surat</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Kepengurusan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="harian.html">Pengurus Harian</a></li>
                  <li><a class="dropdown-item" href="jarkom.html">Departemen JARKOM</a></li>
                  <li><a class="dropdown-item" href="psdm.html">Departemen PSDM</a></li>
                  <li><a class="dropdown-item" href="dppt.html">Departemen PPT</a></li>
                  <li><a class="dropdown-item" href="agama.html">Departemen Agama</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <section class="container visi" style="padding-top: 30px; padding-bottom: 50px; color: aliceblue; ">
        <form class="row g-3" method="POST" action="cetak.php">
          <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="inputEmail4" name="nama">
            
          </div>
          <div class="col-md-12">
            <label for="inputPassword4" class="form-label">NIM</label>
            <input type="text" class="form-control" id="inputPassword4" name="nim">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Kelas</label>
            <input class="form-control" type="text" id="inputPassword4" name="kelas" >
          </div>
          <br>
        <button type="submit" class="btn btn-light " >Proses Data</button>
        <button type="reset" class="btn btn-light " >reset</button>
          
        </form>
        
      </section>
<section class="text-center">
      <h1>Cetak Surat Keaktifan HIMATIKA</h1>
      <h3>Silahkan isi data di bawah ini</h3>
    <form method="POST" action="cetak.php" >
        <table rules="rows" >
            <div class="m-auto">
            <tr>
                <td><b>NIM</b></td>
                <td><input type="text" class="form-control" name="nim"</td>
            </tr>
            </div>
            <tr>
                <td><b>Nama</b></td>
                <td><input type="text" class="form-control" name="nama"</td>
            </tr>
            <tr>
                    <td><b>Kelas</b></td>
                    <td><input type="text" class="form-control" name="alamat"</td>
                </tr>
           
        </table>
        <br>
        <button type="submit" >Proses Data</button>
        <button type="reset" >reset</button>
        </section>


      <section style="background-color: black;">
      <div  class="container">
      <div class="row ">
        <div class="card m-auto border-0 ms-auto" style=" height: 150px; width: 150px ; background-color: black;">
          <img src="foto/Logohima.png" class="card-img-top rounded-circle" alt="logo">
      </div>
      <div class="card mb-3 border-0" style="width: 25rem; background-color: black; color: aliceblue;">
        <div class="card-body">
          <h5 class="card-title">HIMTEKOM</h5>
          <div class="card-text">Jl. Karangdowo No.9, Karangdowo
            Kec.Kedungwuni, Pekalongan, Jawa Tengah 51173</div>
          <div class="card-text">Email : himtekom.itsnu@gmail.com</div>
          <div class="card-text">Tlp/Wa : 088227561673</div>
        </div>
      </div>
      <div class="card mb-3 border-0" style="width: 18rem; background-color: black; color: aliceblue;">
        <div class="card-body">
          <h5 class="card-title">Kepengurusan</h5>
          <li><a href="#" style="text-decoration: none; color: aliceblue;" class="card-text">Pengurus Harian</a></li>
          <li><a href="#" style="text-decoration: none; color: aliceblue;" class="card-text">Departemen JARKOM</a></li>
          <li><a href="#" style="text-decoration: none; color: aliceblue;" class="card-text">Departemen PSDM</a></li>
          <li><a href="#" style="text-decoration: none; color: aliceblue;" class="card-text">Departemen PPT</a></li>
          <li><a href="#" style="text-decoration: none; color: aliceblue;" class="card-text">Departemen Agama</a></li>
        </div>
      </div>
      <div class="card mb-3 border-0" style="width: 18rem; background-color: black; color: aliceblue;">
        <div class="card-body">
          <h5 class="card-title">Hubungi Kami</h5>
    
            <div><a href="https://instagram.com/himtekom_itsnupkl?igshid=MmU2YjMzNjRlOQ==" style="text-decoration: none; color: aliceblue;"><i class="fa-brands fa-instagram"></i> himtekom_itsnupkl</a></div>
            <div><a href="#" style="text-decoration: none; color: aliceblue;"><i class="fa-brands fa-tiktok"></i> himtekom_itsnu</a></div>
            <div><a href="https://wa.me/6288227561673?text=Mari Gabung HIMTEKOM" style="text-decoration: none; color: aliceblue;"><i class="fa-brands fa-whatsapp"></i> 088227561673</a></div>
            <div><a href="#" style="text-decoration: none; color: aliceblue;"><i class="fa-brands fa-facebook"></i> himtekom_itsnupkl</a></div>
        
        </div>
      </div>
    </div>
  </div>
  </section>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
