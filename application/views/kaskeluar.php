    <!-- Content Header (Page header) -->
 <?php $query=$this->db->get_where('kasmasuk',['Jenis'=>'Keluar']); ?>
    <section class="content-header">
      <h1>
        Kas Keluar
        <small>Data Kas Keluar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
         <li class="active">kas_keluar</li>
      </ol>
    </section>
    <div class="table-responsive" style="padding: 20px 0px 0px 0px">
      <a href="<?=base_url('kaskeluar/tambah') ?>" class="btn btn-success">Tambah Data</a>
      <table class="table table-bordered table-striped">
        <thead>
          <th>No</th>
          <th>Kode</th>
          <th>Keterangan</th>
          <th>Tanggal</th>
          <th>Jenis</th>
          <th>Keluar</th>
          <th>Aksi</th>
        </thead>
        <tbody>
<?php if ($query->num_rows()>0) {$no=0;$total=0;
  foreach ($query->result() as $masuk){$no++;
  ?>
  <tr>
         <td><?=$no?></td>
          <td><?=$masuk->Kode?></td>
          <td><?=$masuk->Keterangan?></td>
          <td><?=$masuk->Tgl?></td>
          <td><?=$masuk->Jenis?></td>
          <td><?=$masuk->Keluar?></td>

          <td><a href="<?=base_url('kaskeluar/edit/'.$masuk->Kode)?>" class="btn btn-warning">Edit</a><a href="<?=base_url('kaskeluar/hapus/'.$masuk->Kode)?>" class="btn btn-danger">Hapus</a></td>
        </tr>

  <?php 
$total=$total+$masuk->Keluar;
   ?>

  <?php  }
 ?>  <tr>
     <th colspan="5" style="text-align: center;font-weight: bold;">Total Kas Keluar</th>
     <th>Rp. <?=number_format($total)?></th>
   </tr>
<?php } else{?>
  <tr><td colspan="8" style="text-align: center;">Data Masih Kosong</td></tr>

<?php 
} ?>
         
        </tbody>
        
      </table>
    </div>