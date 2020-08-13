<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title><?=$this->fungsi->aplikasi()['nama_toko'];?> | <?=$this->fungsi->aplikasi()['nm_app'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="icon" href="<?=base_url('assets/ico.png');?>">

  
      <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url('asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('asset/bower_components/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('asset/bower_components/Ionicons/css/ionicons.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('asset/dist/css/skins/_all-skins.min.css')?>">
      <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url('asset/bower_components/jvectormap/jquery-jvectormap.css')?>">
    <link rel="stylesheet" href="<?=base_url('asset/dist/css/AdminLTE.min.css')?>">


    <script src="<?=base_url('assets/gijgo/js/gijgo.min.js');?>" type="text/javascript"></script>

    <script src="<?=base_url('assets/jquery/jquery-3.2.1.js');?>"></script>
    <script src="<?=base_url('assets/jquery/jquery-3.2.1.min.js');?>"></script>
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
	<!-- New Template -->

		<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=base_url()?>" class="navbar-brand"><b><i class="ion ion-bag"></i> <?=$this->fungsi->aplikasi()['nm_app'];?></b>App</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <?php if ($this->session->userdata('akses') == 1) { ?>
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=base_url('home');?>"><i class="fa fa-home"></i> Branda <span class="sr-only">(current)</span></a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i> Transaksi <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=base_url('cart');?>">Penjualan</a></li>
                <li><a href="<?=base_url('add');?>">Pembelian</a></li>
                
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-suitcase"></i> Master Data <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=base_url('barang');?>">Data Barang</a></li>
                <li><a href="<?=base_url('addcat');?>">Data Kategori</a></li>
                <li><a href="<?=base_url('satuan');?>">Data Satuan</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i> Pengaturan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=base_url('pengguna');?>">Pengguna</a></li>
                <li><a href="<?=base_url('aplikasi');?>">Aplikasi</a></li>
                <li><a href="<?=base_url('bersihkan');?>">Bersihkan</a></li>
              </ul>
            </li>
            <li><a href="<?=base_url();?>page/lihat_laporan/<?php $time = mktime(0, 0, 0, date('m')-1, date('d'), date('Y')); echo date('Y-m-d', $time);?>/<?=date('Y-m-d');?>/"><i class="fa fa-area-chart"></i> Laporan</a></li>
          </ul>
          <form class="navbar-form navbar-right" role="search" action="<?=base_url('page/search');?>" method="GET">
            <div class="form-group">
              <input class="form-control" id="navbar-search-input" type="text" name="s" placeholder="Cari Barang . . ." required="">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?=base_url('asset/dist/img/user2-160x160.jpg')?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?=$this->session->userdata('nama');?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?=base_url('asset/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">

                  <p>
                    <?=$this->session->userdata('nama');?>
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                 <!--  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div> -->
                  <div class="pull-left">
                    <a href="<?=base_url('logout');?>" class="btn btn-danger btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            
          </ul>
          <!-- AKSES MENU KASIR -->
            <?php } else if ($this->session->userdata('akses') == 2) { ?>
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=base_url('home');?>"><i class="fa fa-home"></i> Branda <span class="sr-only">(current)</span></a></li>

            <li>
                <a href="<?=base_url('cart');?>">
                  <i class="fa fa-qrcode"></i> <span>Penjualan</span>
                  </span>
                </a>
            </li>

            <li>
                <a href="<?=base_url('barang');?>">
                  <i class="fa fa-book"></i> <span>Barang</span>
                  </span>
                </a>
            </li>

          </ul>
          <form class="navbar-form navbar-right" action="<?=base_url('page/search');?>" method="GET">
            <div class="form-group">
              <input class="form-control mr-sm-2" type="text" name="s" placeholder="Nama atau Kode Barang" required="">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?=base_url('asset/dist/img/user2-160x160.jpg')?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?=$this->session->userdata('nama');?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?=base_url('asset/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">

                  <p>
                    <?=$this->session->userdata('nama');?>
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                  <a href="<?=base_url('logout');?>"> <input type="button" class="btn btn-flat btn-danger"  type="" name="" value="Sign out"></a> 
                  </div>
                  
                </li>
              </ul>
            </li>
            
          </ul>
          <?php } ?>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
	<!-- End New Template -->
  <div class="content-wrapper">
    <div class="container">
	     <section class="content">
         <?php echo $_content;?>
       </section>
     </div>
  </div>	

		<footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <?=$this->fungsi->aplikasi()['footer_txt'];?> | <?=$this->fungsi->aplikasi()['nm_app'];?> | <b>Version</b> 2.0.0
      </div>
      <strong>Copyright &copy; <?=date('Y');?> <a href="http://facebook.com/gagaw.os">Rangga Anggarawan</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
	</div>

  <script src="<?=base_url('asset/canvas.js')?>"></script>
	<script src="<?=base_url('asset/dist/js/adminlte.min.js')?>"></script>
	<script src="<?=base_url('asset/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('asset/dist/js/pages/dashboard2.js')?>"></script>

	<script src="<?=base_url('assets/vendor/jquery/dist/jquery.min.js');?>"></script>
	<script src="<?=base_url('assets/vendor/popper.js/dist/umd/popper.min.js');?>"></script>
	<script src="<?=base_url('assets/vendor/bootstrap/dist/js/bootstrap.min.js');?>"></script>
	<script src="<?=base_url('assets/js/custom.js');?>"></script>
	<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?=base_url('asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?=base_url('asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
<script src="<?=('asset/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?=('asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<!-- SlimScroll -->
<script src="<?=base_url('asset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?=base_url('asset/bower_components/chart.js/Chart.js')?>"></script>
<script src="<?=base_url('asset/dist/js/demo.js')?>"></script>


<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>