<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Legalisir Online</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/riwayat-ajuan.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
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
      <li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle">Ajuan</a>
				<ul class="dropdown-menu">
					<li><a href="/status-ajuan1">Status Ajuan</a></li>
					<li><a href="/riwayat-ajuan">Riwayat Ajuan</a></li>
					<li><a href="/invoice">Invoice</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle">Profile</a>
				<ul class="dropdown-menu">
					<li><a href="/biodata">Biodata</a></li>
					<li><a href="/kuisioner">Kuisioner</a></li>
					<li><a href="/login">Logout</a></li>
				</ul>
			</li>
    </ul>
  </nav>

  <div class="show">
    <label>Show</label><input type="number" min="10" max="25" name="jumlah" /> 
    <label class="search">Search</label><input type="text" name="jumlah" />
  </div>

  <table>
    <tr>
      <th>No</th>
      <th>Riwayat Ajuan</th>
      <th>Tanggal</th>
      <th>Status</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Legalisir berkas ijazah dan transkrip nilai</td>
      <td>12/03/2023</td>
      <td>
        <div class="col1"><b><p>Passed</p></b></div>
        <img src="{{ asset('images/view.png') }}" alt="View">
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Legalisir berkas ijazah dan transkrip nilai</td>
      <td>12/03/2023</td>
      <td>
        <div class="col1"><b><p>Passed</p></b></div>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Legalisir berkas ijazah dan transkrip nilai</td>
      <td>12/03/2023</td>
      <td>
        <div class="col1"><b><p>Passed</p></b></div>
      </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Legalisir berkas ijazah dan transkrip nilai</td>
      <td>12/03/2023</td>
      <td>
        <div class="col1"><b><p>Passed</p></b></div>
      </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Legalisir berkas ijazah dan transkrip nilai</td>
      <td>12/03/2023</td>
      <td>
        <div class="col1"><b><p>Passed</p></b></div>
      </td>
    </tr>
    <tr>
      <td>6</td>
      <td>Legalisir berkas ijazah dan transkrip nilai</td>
      <td>12/03/2023</td>
      <td>
        <div class="col1"><b><p>Passed</p></b></div>
      </td>
    </tr>
    <tr>
      <td>7</td>
      <td>Legalisir berkas ijazah dan transkrip nilai</td>
      <td>12/03/2023</td>
      <td>
        <div class="col1"><b><p>Passed</p></b></div>
      </td>
    </tr>
  </table>

  <footer class="footer">
    <div class="footer-text">
      &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
    </div>
  </footer>
</body>

</html>