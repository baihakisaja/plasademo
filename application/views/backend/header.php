<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/indihome-favicon.png" type="image/x-icon">

    <title>Virtual XL Center | Admin</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/gentelella-master/build/css/custom.min.css" rel="stylesheet">

     <!-- Datatables -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    

    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url();?>assets/gentelella-master/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

              <link href="<?php echo base_url();?>assets/alert/sweetalert2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/alert/sweetalert2.min.css" rel="stylesheet">
  <script src="<?php echo base_url();?>assets/alert/sweetalert2.min.js"></script>
 <script src="<?php echo base_url();?>assets/alert/sweetalert2.js"></script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"> <span><center>Virtual XL Center</center></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php
            $id_pengguna__=$this->session->userdata('id_pengguna');
            $qqq=$this->db->query("SELECT * FROM pengguna WHERE id_pengguna='$id_pengguna__'");
            $datalogin3=$qqq->row_array();
?>
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php if($datalogin3['gambar']==""): ?>
                      <img src="<?php echo base_url();?>assets/image/profil2.png" alt="..." class="img-circle profile_img">
                    <?php else: ?>
                      <img src="<?php echo base_url().'assets/image/'.$datalogin3['gambar'];?>" alt="..." class="img-circle profile_img">
                    <?php endif;?>
                
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2> <?php
            $name=$datalogin3['username'];
            echo $name;
            ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <center><h3>DAFTAR MENU</h3></center>
                <ul class="nav side-menu menu_fixed">
                  <li><a href="<?php echo base_url();?>dashboard"><i class="fa fa-home"></i> Dashboard </a> 
                  </li>

                  
                  <li class="sub-menu always-open"><a><i class="fa fa-mail-forward"></i> Antrian Menunggu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>pasang_baru">Antrian Registrasi Prioritas <span class="label label-success pull-right"><?= $jumlah_regis; ?></span></a></li></li>
                      <li><a href="<?php echo base_url();?>gangguan">Antrian Gangguan <span class="label label-success pull-right"><?= $jumlah_gangguan; ?></span></a></li>
                      <li><a href="<?php echo base_url();?>informasi">Antrian Informasi Product <span class="label label-success pull-right"><?= $jumlah_informasi; ?></span></a></li>
                    </ul>
                  </li>

                  <li class="sub-menu always-open"><a><i class="fa fa-newspaper-o"></i> Report Antrian <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>report_pasang_baru">Report Registrasi Prioritas</a></li>
                      <li><a href="<?php echo base_url();?>report_gangguan">Report Gangguan</a></li>
                      <li><a href="<?php echo base_url();?>report_informasi">Report Informasi Product</a></li>
                    </ul>
                  </li>

                  <li class="sub-menu always-open"><a><i class="fa fa-gear"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>pengguna">Pengguna</a></li>
                      <li><a href="<?php echo base_url();?>daerah">Daerah</a></li>
                    </ul>
                  </li>


                  

                  
                </ul>


                 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->

            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php if($datalogin3['gambar']==""): ?>
                      <img src="<?php echo base_url();?>assets/image/profil2.png" alt="">
                    <?php else: ?>
                      <img src="<?php echo base_url().'assets/image/'.$datalogin3['gambar'];?>" alt="">
                    <?php endif;?>
                    <?php
                    $name=$datalogin3['username'];
                    echo $name;
                    ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="javascript:;"> Settings</a></li>
                    <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

          
              </ul>
            </nav>
          </div>
        </div>