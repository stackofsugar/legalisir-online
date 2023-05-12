<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Legalisir Online</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/kuisioner.css') }}">
</head>

<body>
  <nav class="navbar">
    <div class="navbar-logo">
      <a href="/riwayat-ajuan"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Ajuan</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Profile</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="container-head">
        Isi Kuisioner
    </div> <br> <br>
    
    <div class="content">
      <div class="content-pertanyaan">
        Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
      </div>
      <div>
        <input type="text" class="content-essay" placeholder="Jawaban">
      </div>
    </div>
    <br>
    <div class="content">
      <div class="content-pertanyaan">
        Menurut anda, apakah sistem pelayanan mahasiswa alumni yang diberikan oleh Fakultas Teknologi Informasi dan Sains Data sudah memuaskan?
      </div>
      <div>
        <input type="text" class="content-essay" placeholder="Jawaban">
      </div>
    </div>
    
    <!-- <div class="selesai">
      <button>Selesai</button>
    </div> -->
    <!-- <div class="content-pilihan">
      <table>
        <tr>
          <td>Sangat tidak setuju</td>
          <td>Tidak setuju</td>
          <td>Netral</td>
          <td>Setuju</td>
          <td>Sangat Setuju</td>
        </tr>
      </table>
      <input type="radio">
      <input type="radio">
      <input type="radio">
      <input type="radio">
      <input type="radio">
      <input type="radio">
    </div> -->
  </div>

</body>

<footer class="footer">
    <div class="footer-text">
        &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
    </div>
</footer>

</html>