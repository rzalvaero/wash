<?php
  $this->load->view('front/header');
  $this->load->view('front/layout-3');
  $this->load->view('front/navbar');
//  $this->load->view('front/layout-2');
//  $this->load->view('front/sidebar-2');
//  $this->load->view('front/layout');
//  $this->load->view('front/sidebar');
?>



      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1 class="section-title">Booking WashNEWss</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Pinsoft</a></div>
              <div class="breadcrumb-item">Booking Forms</div>
            </div>
          </div>

          <div class="section-body">
            
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                
               
                <div class="card">
                  <div class="card-header">
                    <h4>Online Booking - System</h4>
                  </div>
                  <div class="card-body">
                  <form action="<?php echo base_url('masuk/kendaraanmasuk') ?>" method="post">  

                    <div class="form-group">
                      <label>Date Time Picker</label>
                      <input type="text" class="form-control datetimepicker">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                        <select class="form-control" name="jenis" >
                          <option value="" selected disabled="">Pilih Kendaraan</option>
                          <?php foreach ($jenis as $row) { ?>
                          <option value="<?php echo $row['kd_kendaraan'] ?>"><?php echo strtoupper($row['nama_kendaraan']) ?></option>
                          <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                            <label for="">Nama Pelangggan</label>
                            <input type="text" class="form-control" id="" placeholder="Nama Pelanggan" name="nama_pelanggan">
                      </div>

                      <div class="form-group">
                        <label for="">Nomor Plat</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><input class="form-control" type="text" name="plat" size="4" value="B"></span>
                            <input type="number" class="form-control" id="" placeholder="Nomor Plat" name="nomor">
                            <span class="input-group-text"><input class="form-control" type="text" name="back" size="8" ></span>
                          </div>
                        </div>
                        <?php echo $this->session->flashdata('pesan') ?>
                      </div>

                      <div class="card-footer">
                      <button type="submit" class="btn btn-primary pull-right">Book</button>
                    </div>
                  </form>

                  </div>
                </div>
              </div>
              
              <!-- SECTION DIA 

              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4></h4>
                  </div>
                  <div class="card-body">
                   
                      <div class="form-group">
                            <label for="">Nama Pelangggan</label>
                            <input type="text" class="form-control" id="" placeholder="Nama Pelanggan" name="nama_pelanggan">
                      </div>

                      <div class="form-group">
                        <label for="">Nomor Plat</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><input class="form-control" type="text" name="plat" size="4" value="B"></span>
                            <input type="number" class="form-control" id="" placeholder="Nomor Plat" name="nomor">
                            <span class="input-group-text"><input class="form-control" type="text" name="back" size="8" ></span>
                          </div>
                        </div>
                      </div>


                  </div>
                </div>
              </div>-->
            </div>
          </div>
        </section>
      </div>

      <?php $this->load->view('front/footer'); ?>