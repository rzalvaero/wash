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
          
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>List Costumer</h4>
                  <div class="card-header-action" >
                    <a href="#" class="btn btn-danger" >
                    
                    <?php 

                    $tanggal = mktime(date('m'), date("d"), date('Y'));

                    echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";

                    date_default_timezone_set("Asia/Jakarta");

                    $jam = date ("H:i:s");
                    echo " | Pukul : <b> " . $jam . " " ." </b> ";

                    $a = date ("H");
                    ?>

                    
                    <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>Kode Karcis</th>
                        <th>Plat Nomor</th>
                        <th>Tanggal</th>
                        <th>Jam Masuk</th>
                        <th>Status</th>
                      </tr>
                      <?php foreach ($masuk as $row) { ?>
                      <tr >
                        <td><a href="#"><?php echo $row['kd_masuk'] ?></a></td>
                        <td>
                          <a href="#" class="btn btn-primary"><?php echo $row['plat_masuk'] ?></a>
                        </td>
                        <td><?php echo hari_indo(date('N',strtotime($row['tgl_masuk']))).', '.tanggal_indo(date('Y-m-d',strtotime(''.$row['tgl_masuk'].''))) ?></td>
                        <td class="font-weight-600"><?php echo date('H:i:s',strtotime($row['tgl_masuk'])) ?></td>
                        <td>
                        <?php
                          if ($row['status_masuk'] == 1) {
                            echo '<div class="badge badge-warning">Book</div>';
                          }
                          elseif($row['status_masuk'] == 2) {
                            echo '<div class="badge badge-primary">Waiting</div>';
                          }
                          elseif($row['status_masuk'] == 3) {
                            echo '<div class="badge badge-success">Prosses</div>';
                          }
                        ?>
                        </td>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php $this->load->view('front/footer'); ?>