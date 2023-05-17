<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Legalisir Online</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homepage.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dropdown.css') }}">
</head>

<body>
    <nav class="navbar">
		<div class="navbar-logo">
			<img src="{{ asset('images/logo.png') }}" alt="Logo">
		</div>
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="/homepage" class="nav-link">Home</a>
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

    <div class="homepage">
		<div class="icon">
		<img src="{{ asset('images/alumni.png') }}" alt="Alumni" width="250px" height="auto">
		</div>
        <div class="container">
		<h1>Selamat Datang di <br> SISTEM LEGALISIR ONLINE FATISDA UNS <br> <br> </h1>
            <div class="container-content">
                <h2>Sistem legalisir online merupakan sistem yang dibuat dengan tujuan memberikan kemudahan bagi alumni Fakulltas Teknologi Informasi dan Sains Data UNS untuk melakukan legalisir secara online</h2>
            </div>
			<br>
			<div class="button-ajukan">
				<a href="form-legalisir">Ajukan Legalisir<a\>
            </div>
        </div>
	</div>

    <footer class="footer">
        <div class="footer-text">
            &copy; Fakultas Teknologi Informasi Dan Sains Data UNS - 2023
        </div>
    </footer>
</body>
</html>