        <link href='https://fonts.googleapis.com/css?family=Libre Barcode 39' rel='stylesheet'>
        <style>
        #invoice-POS{
        box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
        padding:1mm;
        margin: 0 auto;
        width: 58mm;
        background: #FFF;
        
        
        ::selection {background: #f31544; color: #FFF;}
        ::moz-selection {background: #f31544; color: #FFF;}
        @media print{@page {size: landscape}}
        @page { size : portrait }
        @page rotated { size : landscape }  
        h1{
        font-size: 1.5em;
        color: #222;
        }
        
        h2{font-size: .9em;}
        h3{
        font-size: 1.2em;
        font-weight: 300;
        line-height: 2em;
        }
        svg {
          margin: 30px;
        }
        p{
        font-size: .7em;
        color: #666;
        line-height: 1.2em;
        }
        
        #top, #mid,#bot{ /* Targets all id with 'col-' */
        border-bottom: 1px solid #EEE;
        }

        #top{min-height: 100px;}
        #mid{min-height: 80px;} 
        #bot{ min-height: 50px;}

        #top .logo{
        //float: left;
            height: 60px;
            width: 60px;
            background: url(http://michaeltruong.ca/images/logo1.png) no-repeat;
            background-size: 60px 60px;
        }
        .clientlogo{
        float: left;
            height: 60px;
            width: 60px;
            background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
            background-size: 60px 60px;
        border-radius: 50px;
        }
        .info{
        display: block;
        //float:left;
        margin-left: 0;
        }
        .title{
        float: right;
        }
        .title p{text-align: right;} 
        table{
        width: 100%;
        border-collapse: collapse;
        }
        td{
        //padding: 5px 0 5px 15px;
        //border: 1px solid #EEE
        }
        .tabletitle{
        //padding: 5px;
        font-size: .5em;
        background: #EEE;
        }
        .service{border-bottom: 1px solid #EEE;}
        .item{width: 24mm;}
        .itemtext{font-size: .5em;}

        #legalcopy{
        margin-top: 5mm;
        }

        
        
        }
        </style>
  <body onload="window.print()">
  <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>CarWASH</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <p style="text-align: center;"><?php echo $cetak['tgl_masuk'] ?></p>
        <p style="text-align: center;"><?php echo $cetak['nama_pelanggan'] ?></p>
        <p style="text-align: center; font-family: 'Libre Barcode 39';font-size: 25pt;"> 
        <?php echo $cetak['kd_masuk'] ?></p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">
          
          <!--
					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h5>Item</h5></td>
								<td class="Hours"><h2></h2></td>
								<td class="Rate"><h2></h2></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext"></p></td>
								<td class="tableitem"><p style="font-size: 10px; text-align: center;" class="itemtext"><?php echo $cetak['plat_masuk'] ?></p></td>
								<td class="tableitem"><p class="itemtext"></p></td>
							</tr>

                            <tr class="service">
								<td class="tableitem"><p class="itemtext"></p></td>
								<td class="tableitem"><p style="font-size: 10px; text-align: center;" class="itemtext"><?php echo $cetak['tgl_masuk'] ?></p></td>
								<td class="tableitem"><p class="itemtext"></p></td>
							</tr>


							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h5>Total</h5></td>
								<td class="payment"><h2></h2></td>
							</tr>

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2></h2></td>
								<td class="payment"><h4 style="margin: -20px 0px 0px -20px;">$3,644.25</h4></td>
							</tr>

						</table>
					</div>-->

					<div id="legalcopy">
            <center><p class="legal" style="font-size: 10px;">
            <strong>SIMPANLAH TIKET DENGAN AMAN!</strong>
            KERUSAKAN DAN KEHILANGAN BARANG BUKAN TANGGUNG JAWAB PENGELOLA
            KEHILANGAN TIKET DI KENAKAN DENDA Rp.10.000,-</center>
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
  </body>