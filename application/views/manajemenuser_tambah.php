    <section class="content-header">
      <h1>
       Manajemen User
        <small>Data Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
         <li class="active">Tambah user</li>
      </ol>
    </section>
<div class="container-fluid" style="padding-top: 20px;">
	<h3>Tambah Data Users</h3>
	<form action="<?=base_url('manajemenuser/simpan') ?>" method="POST">
		<div class="form-group">
			<label>Usernamae</label>
			<input type="text" name="user" class="form-control" placeholder="Masukkan Username">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="pass" class="form-control"  placeholder="Masukkan Password">
		</div>
		<div class="form-group">
			<label>Level</label>
			<input type="radio" name="level" value="Admin"> Admin
			<input type="radio" name="level" value="User"> User
		</div>
	<input type="submit" name="submit" value="Simpan" class="btn btn-success">
	<a href="<?=base_url('manajemenuser')?>" type="button" name="button" class="btn btn-warning">Kembali</a>
	</form>
</div>