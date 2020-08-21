

<?php if ($this->session->flashdata('message')) { ?>
<div class="alert alert-dismissible alert-light">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
</div>
<?php } ?>
<div class="callout callout-success">
<p>Selamat Datang, <strong><?=$this->session->userdata('nama');?></strong></p>
<p><?=$this->fungsi->aplikasi()['home_txt'];?></p></div>

		<?php if ($this->session->userdata('akses') == 1) { ?>
		<br />
		<div class="row">
			<div class="col-sm-4">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Rp <?=$this->fungsi->rupiah($pj_hari_ini);?></h3>

              <p>Total Penjualan Hari Ini</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        
			<!-- <div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Penjualan Hari Ini</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=$this->fungsi->rupiah($pj_hari_ini);?></strong></h4>
							&nbsp;
						</div>
				</div> -->
			</div>
			<div class="col-sm-4">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Rp <?=$this->fungsi->rupiah($pj_kemarin);?></h3>

              <p>Total Penjualan Kemarin</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
			<!-- <div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Penjualan Kemarin</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=$this->fungsi->rupiah($pj_kemarin);?></strong></h4>
							&nbsp;
						</div>
				</div>
			</div> -->
			<div class="col-sm-4">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Rp <?=$this->fungsi->rupiah($total_wdisc);?></h3>

              <p>Total Penjualan</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
			<!-- <div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Penjualan</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=$this->fungsi->rupiah($total_wdisc);?></strong></h4>
							&nbsp;
						</div>
				</div>
			</div> -->
		</div>
		<!-- CHART START -->
		<div class="row">
			<div class="col-md-12">
            	 <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Penjualan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  
                  <br><br>
                  <div class="chart">
                      <canvas id="myChart"></canvas>
                      
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Table Profit & Modal</strong>
                  </p>

                  <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Profit</span>
              <span class="info-box-number">Rp <?=$this->fungsi->rupiah($total_wdisc - $total_pj_modal + $sum_minus);?></span>

              <div class="progress">
                
              </div>
              <span class="progress-description" style="font-size: 12px;">
                    Rp <?=$this->fungsi->rupiah($total_ndisc - $total_pj_modal + $sum_minus);?> - Diskon Rp <?=$this->fungsi->rupiah($total_ndisc-$total_wdisc);?>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.progress-group -->
                  <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Profit Tertunda</span>
              <span class="info-box-number">Rp <?=ltrim($this->fungsi->rupiah($sum_minus), '-');?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
                  Keuntungan Tertunda
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.progress-group -->
                  <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">MODAL</span>
              <span class="info-box-number">Rp <?=$this->fungsi->rupiah($modal);?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 50%"></div>
              </div>
              <span class="progress-description">
                    Total Modal Belanja
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            
          </div>
          <!-- /.box -->
            </div>
		</div>
		<!-- CHART END -->
		<!-- <div class="row">
			<div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Keuntungan</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=$this->fungsi->rupiah($total_wdisc - $total_pj_modal + $sum_minus);?></strong></h4>
						Rp <?=$this->fungsi->rupiah($total_ndisc - $total_pj_modal + $sum_minus);?> - Diskon Rp <?=$this->fungsi->rupiah($total_ndisc-$total_wdisc);?></div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Keuntungan Tertunda</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=ltrim($this->fungsi->rupiah($sum_minus), '-');?></strong></h4>
							&nbsp;
						</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Modal</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=$this->fungsi->rupiah($modal);?></strong></h4>
							&nbsp;
						</div>
				</div>
			</div>
		</div> -->

		<div class="row">
			<div class="col-sm-4">
				<div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Barang Terjual</span>
              <span class="info-box-number"><?php if ($sum_pj_barang) { echo $sum_pj_barang; } else { echo 0; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
				<!-- <div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Barang Terjual</div>
					<div class="card-body">
						<h4 class="card-title"><strong><?php if ($sum_pj_barang) { echo $sum_pj_barang; } else { echo 0; } ?> Barang</strong></h4>
							&nbsp;
						</div>
				</div> -->
			</div>
			<div class="col-sm-4">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sisa Barang</span>
              <span class="info-box-number"><?php if ($sum_br_master) { echo $sum_br_master; } else { echo 0; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
			<!-- <div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Sisa Barang</div>
					<div class="card-body">
						<h4 class="card-title"><strong><?php if ($sum_br_master) { echo $sum_br_master; } else { echo 0; } ?> Barang</strong></h4>
							&nbsp;
						</div>
				</div>
			</div> -->
			<div class="col-sm-4">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Barang Masuk</span>
              <span class="info-box-number"><?php if ($sum_br_master || $sum_pj_barang) { echo $sum_br_master+$sum_pj_barang; } else { echo 0; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
			<!-- <div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Barang Masuk</div>
					<div class="card-body">
						<h4 class="card-title"><strong><?php if ($sum_br_master || $sum_pj_barang) { echo $sum_br_master+$sum_pj_barang; } else { echo 0; } ?> Barang</strong></h4>
							&nbsp;
						</div>
				</div>
			</div> -->
		</div>

		<?php } else { ?>

		<br />
		<div class="row">
			<div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Penjualan Hari Ini</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=$this->fungsi->rupiah($kasir_pj_hari_ini);?></strong></h4>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Penjualan Kemarin</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=$this->fungsi->rupiah($kasir_pj_kemarin);?></strong></h4>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card border-primary mb-3" style="max-width: 20rem;">
					<div class="card-header">Total Penjualan</div>
					<div class="card-body">
						<h4 class="card-title"><strong>Rp <?=$this->fungsi->rupiah($kasir_total_wdisc);?></strong></h4>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

 <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
          <?php
            if (count($graph)>0) {
              foreach ($graph as $data) {
                echo "'" .$data->nama_barang ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Grafik Transaksi',
            backgroundColor: '#156EA4',
            borderColor: '#156EA4',
            data: [
              <?php
                if (count($graph)>0) {
                   foreach ($graph as $data) {
                    echo $data->jml_jual . ", ";
                  }
                }
              ?>
            ]
        }]

    },
});
 
  </script>