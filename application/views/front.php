<?php $this->load->view('front/header'); ?>

      <!-- Main Content -->
        <section class="section">
          <div class="row">
            <div class="col-md-8">
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

                    if (($a>=6) && ($a<=11)) {

                      echo " <b>, Selamat Pagi !! </b>";

                    }else if(($a>=11) && ($a<=15)){

                      echo " , Selamat  Pagi !! ";

                    }elseif(($a>15) && ($a<=18)){

                      echo ", Selamat Siang !!";

                    }else{

                      echo ", <b> Selamat Malam </b>";
                    }


                  ?>

                    
                    <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice" >
                    <table class="table table-striped" >
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
            <!--<td><div class="badge badge-success">Paid</div></td>
            <td><div class="badge badge-warning">Unpaid</div></td>
            <td><div class="badge badge-danger">Paid</div></td>-->

            <div class="col-md-4">
              <div class="card card-hero">
                <div class="card-header">
                  <div class="card-icon">
                    <i class="far fa-question-circle"></i>
                  </div>  
                  <h4><?php echo $count['count(kd_masuk)'] ?></h4>
                  <div class="card-description">Waiting Costumer</div>
                </div>
                <div class="card-body p-0">
                  <div class="tickets-list">
                    
                <!--  <iframe width="428" height="315" src="https://www.youtube.com/embed/l9ADH2zuA8I?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/l9ADH2zuA8I?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<?php $this->load->view('front/footer'); ?>