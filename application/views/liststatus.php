<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css -->
    <?php $this->load->view('include/base_css'); ?>
    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.css">
    <!-- Memanggil file .css untuk style saat data dicari dalam filed -->
    <link href='<?php echo base_url();?>assets/dist/js/jquery.autocomplete.css' rel='stylesheet' />
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- navbar -->
    <?php $this->load->view('include/base_nav'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Washin</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
               <!--<li class="breadcrumb-item"><a href="<?php echo base_url('Masuk') ?>">Parkir Masuk</a></li>-->
              </ol>
            </div>
          </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title">Input Kendaraan Masuk</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <?php foreach($editstatus as $u){ ?>
                  <form action="<?php echo base_url('masuk/listupdate') ?>" method="post">
                    <div class="card-body">
                      <input value="<?php echo $u->kd_masuk ?>" placeholder="id" name="kd_masuk" type="hidden" class="validate" >	
                      <!--<div class="form-group">
                        <label for="exampleInputEmail1">Update Status</label>
                        <select class="form-control" name="status_masuk" >
                          <option value="<?php echo $u->status_masuk ?>" disabled>
                          <?php
                          if ($u->status_masuk == 1) {
                            echo '<small class="label label-info">BOOK</small>';
                          }
                          elseif($u->status_masuk == 2) {
                            echo '<small class="label label-danger">WAITING</small>';
                          }
                          elseif($u->status_masuk== 3) {
                            echo '<small class="label label-success">PROCESS</small>';
                          }
                          ?>
                          </option>
                          <?php foreach ($jenis as $row) { ?>
                          <option value="<?php echo $row['id'] ?>"><?php echo strtoupper($row['description']) ?></option>
                          <?php } ?>
                        </select>
                      </div>-->

                      <div class="form-group">
                        <select class="form-control" name="status_masuk" required="">
                          <option value="" selected disabled="">Pilih Status</option>
                          <option value="2" >WAITING</option>
                          <option value="3" >PROCESS</option>
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="">Nama Pelangggan</label>
                        <input type="text" class="form-control" id="" value="<?php echo $u->nama_pelanggan ?>" placeholder="Nama Pelanggan" name="nama_pelanggan">
                      </div>

                      <div class="form-group">
                        <label for="">Plat Nomer</label>
                        <input type="text" class="form-control" value="<?php echo $u->plat_masuk ?>" placeholder="Plat Nomer" name="plat_masuk" disabled>
                      </div>
                    
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                  </form>
                  <?php } ?>
                </div>
                <!-- /.card -->
              </div>
            </div>
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- footer -->
        <?php $this->load->view('include/base_footer'); ?>
      </div>
      <!-- ./wrapper -->
      <!-- script -->
      <?php $this->load->view('include/base_js'); ?>
      <script type='text/javascript' src='<?php echo base_url();?>assets/dist/js/jquery.autocomplete.js'></script>
      <script src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url('assets') ?>/plugins/datatables/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript">
        //Pertama sembunyikan elemen class gambar
        $('.gambar').hide();        
        //Ketika elemen class tampil di klik maka elemen class gambar tampil
        $('.tampil').click(function(){
            $('.gambar').show();
            $('.hidden').hide()
        });
        //Ketika elemen class sembunyi di klik maka elemen class gambar sembunyi
        $('.sembunyi').click(function(){
        //Sembunyikan elemen class gambar
        $('.gambar').hide();
                    $('.hidden').show()        
        });
      </script>
      <script>
      $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
      });
      });
      </script>
    </body>
  </html>