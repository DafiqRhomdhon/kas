    <!-- Content Header (Page header) -->
 <?php $query=$this->db->get_where('kasmasuk',['Jenis'=>'Masuk']); ?>
    <section class="content-header">
      <h1>
        Kas Masuk
        <small>Data Kas Masuk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
         <li class="active">kas_masuk</li>
      </ol>
    </section>
    <div class="table-responsive" style="padding: 20px 0px 0px 0px">
      <a href="<?=base_url('Kasmasuk/tambah') ?>" class="btn btn-success">Tambah Data</a>
      <table class="table table-bordered table-striped">
        <thead>
          <th>No</th>
          <th>Kode</th>
          <th>Keterangan</th>
          <th>Tanggal</th>
          <th>Jenis</th>
          <th>Jumlah</th>
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
          <td><?=$masuk->Jumlah?></td>

          <td><a href="<?=base_url('kasmasuk/edit/'.$masuk->Kode)?>" class="btn btn-warning">Edit</a><a href="<?=base_url('kasmasuk/hapus/'.$masuk->Kode)?>" class="btn btn-danger">Hapus</a></td>
        </tr>

  <?php 
$total=$total+$masuk->Jumlah;
   ?>

  <?php  }
 ?>  <tr>
     <th colspan="5" style="text-align: center;font-weight: bold;">Total Kas Masuk</th>
     <th>Rp. <?=number_format($total)?></th>
   </tr>
<?php } else{?>
  <tr><td colspan="8" style="text-align: center;">Data Masih Kososng</td></tr>

<?php 
} ?>
         
        </tbody>
        
      </table>
    </div>