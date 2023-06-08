<!DOCTYPE html>
<html lang="en">

<head>
  {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <title>Sistem Legalisir Online</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/biodata.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar-footer.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">

</head>


<body>
  @include('alumni.includes.navbar')
  <div class="container">
    <div class="container-head">
      Isi Biodata
    </div> <br><br>

    <div class="content">
      <form id="form">

        <!-- Details -->
        <div class="tab">
          <div class="form-control">
            <label for="name" id="label-name">
              Nama
            </label>

            <!-- Input Type Text -->
            <input type="text" id="name" placeholder="Nama lengkap" />
          </div>

          <div class="form-control">
            <label for="nim" id="label-nim">
              NIM
            </label>

            <!-- Input Type Email-->
            <input type="text" id="nim" placeholder="NIM Tanpa Spasi contoh M0520001" />
          </div>

          <div class="form-control">
            <label for="tempat-lahir" id="label-tempatlahir">
              Tempat Lahir
            </label>

            <!-- Input Type Text -->
            <input type="text" id="age" placeholder="Tempat Lahir" />
          </div>

          <div class="form-control">
            <label for="age" id="label-age">
              Tanggal Lahir
            </label>

            <input type="date" id="Test_DatetimeLocal">
          </div>

          <div class="form-control">
            <label for="role" id="label-role">
              Agama
            </label>

            <!-- Dropdown options -->
            <select name="agama" id="agama">
              <option value="islam">Islam</option>
              <option value="kristen">Kristen</option>
              <option value="katholik">Katholik</option>
              <option value="konghucu">Konghucu</option>
              <option value="budha">Budha</option>
              <option value="hindu">Hindu</option>
            </select>
          </div>
        </div>

      </form>
    </div>


    <ul class="pagination">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
      <!-- <li><button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button></li> -->
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
  </div>

</body>

@include('alumni.includes.footer')

</html>