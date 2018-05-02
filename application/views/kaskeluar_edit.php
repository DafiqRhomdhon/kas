    <section class="content-header">
      <h1>
        Kas Keluar
        <small>Data Kas Keluar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
         <li class="active">Edit kas_keluar</li>
      </ol>
    </section>
<div class="container-fluid" style="padding-top: 20px;">
	<h3>Tambah Data Kas Keluar</h3>
	<form action="<?=base_url('kaskeluar/update') ?>" method="POST">
		<div class="form-group">
			<label>Kode</label>
			<input type="text" name="kode" class="form-control" placeholder="Masukkan Kode" value="<?=$masuk->Kode?>" readonly>
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" class="form-control" placeholder="Masukkan Keterangan" value="<?=$masuk->Keterangan?>">
		</div>
		<div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tgl" class="form-control"  value="<?=$masuk->Tgl?>">
		</div>
		<div class="form-group">
			<label>Jumlah Keluar</label>
			<input type="number" name="keluar" class="form-control" placeholder="Rp. x,xxx,xxx" value="<?=$masuk->Keluar?>">
		</div>

	<input type="submit" name="submit" value="Simpan" class="btn btn-success">
	<a href="<?=base_url('kaskeluar')?>" type="button" name="button" class="btn btn-warning">Kembali</a>	
	</form>
</div>