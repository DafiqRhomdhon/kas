<?php 
$kas=$this->db->get('kasmasuk');
if ($kas->num_rows()>0) {
  $masuk=0;
  $keluar=0;
  foreach ($kas->result() as $kass) {
    $jml=$kass->Jumlah;
    $masuk=$masuk+$jml;
    $keluar=$keluar+$kass->Keluar;
    $total=$masuk-$keluar;
  }
}
 ?>

    <!-- Content Header (Page header) -->
    <section class="content-header" style="margin-bottom:  100px;">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  <div class="row">
        <div class="col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-download"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rp. <?=number_format($masuk)?>,-</span>
              <span class="info-box-number">Total Kas Masuk</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-upload"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rp. <?=number_format($keluar)?>,-</span>
              <span class="info-box-number">Total Kas Keluar</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rp. <?=number_format($total)?>,- </span>
              <span class="info-box-number">Total Saldo Akhir</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->