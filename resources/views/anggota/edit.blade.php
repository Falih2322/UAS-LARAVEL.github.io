<html>

<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
		integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-gray shadow">
		<div class="container">
			<a class="navbar-brand" href="/">Sistem Informasi Perpustakan</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
				<li class="nav-item"><a class="nav-link" href="/anggota">Data Anggota</a></li>
				<li class="nav-item"><a class="nav-link active" href="/buku">Data Buku</a></li>
				<li class="nav-item"><a class="nav-link" href="/peminjam">Daftar Peminjam</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<h1 class="display text-white">.</h1>
		<div class="card shadow">
			<h5 class="card-header bg-white text-dark">Data Buku</h5>
			<div class="card-body">
				<form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
					@csrf
					@method('PUT')
					<input type="hidden" name="id" value="{{old('id', $anggota->id)}}">
					<div class="row">
						<div class="col-sm-3" style="margin-bottom: 30px;">Nama</div>
						<div class="col-sm-8"><input type="text" name="nama" value="{{old('nama', $anggota->nama)}}"
								class="form-control"></div>
					</div>
					<div class="row">
						<div class="col-sm-3" style="margin-bottom: 30px;">Alamat</div>
						<div class="col-sm-8"><input type="text" name="alamat"
								value="{{old('alamat', $anggota->alamat)}}" class="form-control"></div>
					</div>
					<div class="row">
						<div class="col-sm-3" style="margin-bottom: 30px;">Telepon</div>
						<div class="col-sm-8"><input type="text" name="telepon"
								value="{{old('telepon', $anggota->telepon)}}" class="form-control"></div>
					</div>
					<div class="row">
						<div class="col-sm-3" style="margin-bottom: 30px;">Email</div>
						<div class="col-sm-8"><input type="text" name="email" value="{{old('email', $anggota->email)}}"
								class="form-control"></div>
					</div>
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-8"><input type="submit" class="btn btn-primary shadow" value="Simpan"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
		integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
		crossorigin="anonymous"></script>
</body>
</html>