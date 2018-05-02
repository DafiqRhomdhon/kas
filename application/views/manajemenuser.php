    <!-- Content Header (Page header) -->
 <?php $query=$this->db->get('user'); ?>
    <section class="content-header">
      <h1>
        Manajemen User
        <small>Data Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
         <li class="active">pengguna</li>
      </ol>
    </section>
    <div class="table-responsive" style="padding: 20px 0px 0px 0px">
      <a href="<?=base_url('manajemenuser/tambah') ?>" class="btn btn-success">Tambah Data</a>
      <table class="table table-bordered table-striped">
        <thead>
          <th>No</th>
          <th>Username</th>
          <th>Level</th>
          <th>Aksi</th>
        </thead>
        <tbody>
<?php if ($query->num_rows()>0) {$no=0;$total=0;
  foreach ($query->result() as $masuk){$no++;
  ?>
  <tr>
         <td><?=$no?></td>
          <td><?=$masuk->user_nama?></td>
          <td><?=$masuk->user_level?></td>

          <td><a href="<?=base_url('manajemenuser/edit/'.$masuk->user_id)?>" class="btn btn-warning">Edit</a><a href="<?=base_url('manajemenuser/hapus/'.$masuk->user_id)?>" class="btn btn-danger">Hapus</a></td>
        </tr>


  <?php  }
   } else{?>
  <tr><td colspan="8" style="text-align: center;">Data Masih Kosong</td></tr>

<?php 
} ?>
         
        </tbody>
        
      </table>
    </div>