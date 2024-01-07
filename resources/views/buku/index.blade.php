<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-gray shadow">
		<div class="container">
		<a class="navbar-brand" href="index.php">Sistem Informasi Perpustakan</a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
				<li class="nav-item"><a class="nav-link" href="/anggota">Data Anggota</a></li>
				<li class="nav-item"><a class="nav-link active" href="/buku">Data Buku</a></li>
				<li class="nav-item"><a class="nav-link" href="/peminjam">Daftar Peminjam</a></li>
				<a class="btn btn-primary shadow" href="/login" role="button">Logout</a>
			</ul>
		</div>
	</nav>
	<div class="container">
		<h1 class="display text-white">.</h1>
		<div class="card shadow">
			<h5 class="card-header bg-white text-dark">Data Buku</h5>
			<div class="card-body">
				<button type="button" class="btn btn-success shadow" data-toggle="modal" data-target="#exampleModal" 
				style="margin-bottom: 20px">TAMBAH BUKU</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Input Data Buku</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{ route('buku.store') }}" method="POST">
                                    @csrf
									<div class="row">
										<div class="col-sm-3" style="margin-bottom: 30px;">Judul</div>
										<div class="col-sm-8"><input type="text" name="judul" class="form-control" required></div>
									</div>
									<div class="row">
										<div class="col-sm-3" style="margin-bottom: 30px;">Penulis</div>
										<div class="col-sm-8"><input type="text" name="penulis" class="form-control" required></div>
									</div>
									<div class="row">
										<div class="col-sm-3" style="margin-bottom: 30px;">Tahun</div>
										<div class="col-sm-8"><input type="text" name="tahun" class="form-control" required></div>
									</div>
									<div class="row">
										<div class="col-sm-3"></div>
										<div class="col-sm-8"><input type="submit" class="btn btn-primary shadow" value="Simpan"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-hover" width="99%" cellspacing="0"  id="example" class="display">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Penulis</th>
								<th>Tahun</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php 
							$count = 0; 
							foreach($data as $value){ 
								$id = $value->id;
								$judul = $value->judul;
								$penulis = $value->penulis;
								$tahun = $value->tahun;
								$count++;
								?>
								<tr>
									<td><?php echo $count; ?></td>
									<td><?php echo $judul; ?></td>
									<td><?php echo $penulis; ?></td>
									<td><?php echo $tahun; ?></td>
									<td>
										<form action="{{ route('buku.destroy', $value->id) }}" method="POST">
											@csrf
											@method('delete')
											<button type="submit" class="btn btn-danger btn-sm shadow" href="">Delete</button>
											<a class="btn btn-info btn-sm shadow" href="{{ route('buku.edit', $value->id) }}">Edit</a>
										</form>
									</td>
								</tr>
							<?php }; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>