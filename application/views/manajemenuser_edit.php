    <section class="content-header">
      <h1>
       Manajemen User
        <small>Data Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
         <li class="active">Edit user</li>
      </ol>
    </section>
<div class="container-fluid" style="padding-top: 20px;">
	<h3>Edit Data Users</h3>
	<form action="<?=base_url('manajemenuser/update') ?>" method="POST">
		<input type="hidden" name="id" value="<?=$manajemenuser->user_id?>">
		<div class="form-group">
			<label>Usernamae</label>
			<input type="text" name="user" class="form-control" placeholder="Masukkan Username" value="<?=$manajemenuser->user_nama?>">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" name="pass" class="form-control"  placeholder="Masukkan Password" value="<?=$manajemenuser->user_pass?>">
		</div>

		<?php if ($manajemenuser->user_level=='Admin') {
			$a='checked';
			$b=null;
		} else{
			$a=null;
			$b='checked';
		}?>
		<div class="form-group">
			<label>Level</label>
			<input type="radio" name="level" value="Admin" <?=$a?>> Admin
			<input type="radio" name="level" value="User" <?=$b?>> User
		</div>
	<input type="submit" name="submit" value="Simpan" class="btn btn-success">
	<a href="<?=base_url('manajemenuser')?>" type="button" name="button" class="btn btn-warning">Kembali</a>
	</form>
</div>