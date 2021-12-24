<div class="container">

	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim">
							<small class="form-text text-danger"><?= form_error('nim'); ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email">
							<small class="form-text text-danger"><?= form_error('email'); ?></small>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" id="jurusan" name="jurusan">
								<option value="TRPL">TRPL</option>
								<option value="Teknologi Informasi">Teknologi Informasi</option>
								<option value="Teknologi Komputer">Teknologi Komputer</option>
								<option value="Informatika">Informatika</option>
								<option value="Sistem Informasi">Sistem Informasi</option>
							</select>
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">
							Tambah Data
						</button>
					</form>
				</div>
			</div>

		</div>
	</div>

</div>