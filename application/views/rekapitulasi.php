    <!-- Content Header (Page header) -->
 <?php $query=$this->db->get('kasmasuk'); ?>
    <section class="content-header">
      <h1>
        Kas Rekapitulasi
        <small>Data Kas Rekapitulasi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
         <li class="active">Rekapiluasi</li>
      </ol>
    </section>
    <div class="callout callout-info" style="margin-top: 30px;">
    	<h3>Data Rekapitulasi</h3>
    </div>
    <div class="table-responsive" style="padding: 20px 0px 0px 0px">
      <table class="table table-bordered table-striped">
        <thead>
          <th>No</th>
          <th>Kode</th>
          <th>Keterangan</th>
          <th>Tanggal</th>
          <th>Masuk</th>
          <th>Jenis</th>
          <th>Keluar</th>
        </thead>
        <tbody>
<?php if ($query->num_rows()>0) {$no=0;$total=0;$keluar=0;
  foreach ($query->result() as $masuk){$no++;
  ?>
  <tr>
         <td><?=$no?></td>
          <td><?=$masuk->Kode?></td>
          <td><?=$masuk->Keterangan?></td>
          <td><?=$masuk->Tgl?></td>
          <td><?=number_format($masuk->Jumlah)?>,-</td>
          <td><?=$masuk->Jenis?></td>
          <td><?=number_format($masuk->Keluar)?>,-</td>
        </tr>

  <?php 
$total=$total+$masuk->Jumlah;
$keluar=$keluar+$masuk->Keluar;
   ?>

  <?php  }
 ?>  <tr>
     <th colspan="4" style="text-align: center;font-weight: bold;">Total Kas Masuk</th>
     <th>Rp. <?=number_format($total)?></th>
   </tr>
    <tr>
     <th colspan="4" style="text-align: center;font-weight: bold;">Total Kas Keluar</th>
     <th></th><th></th>
     <th>Rp. <?=number_format($keluar)?></th>
   </tr>
<?php } else{?>
  <tr><td colspan="8" style="text-align: center;">Data Masih Kosong</td></tr>

<?php 
} ?>
         
        </tbody>
        
      </table>
    </div>