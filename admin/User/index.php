<?php
@session_start();
include "../../koneksi.php";
include "../../config/fungsi_seo.php";
include "../../config/fungsi_indotgl.php";

error_reporting(0);
ob_start();

?>
<?php
if (1 != 1) {
  header('Location: ../login.php');
} else {
  ob_start();
?>

  <!-- /*Create Nopen rianto - date 2017-06-02 */ -->
  <!DOCTYPE html>

  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="shortcut icon" href="../../foto/icon.jpg" /> -->
    <title>Administrator</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.min.css" />
    <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="../assets/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../assets/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


  </head>

  <body class="hold-transition skin-blue sidebar-mini">
    <!-- jQuery 2.1.4 -->
    <script src="../assets/js/jquery-1.10.2.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <div class="wrapper">
      <div class="logo">
        <img src="../../img/head1.png" width="170">
        <span class="nm-sek"></span>
      </div>
      <header class="main-header">
        <!-- Logo -->
        <div href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Adm</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Administrator</b></span>
        </div>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->


              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../assets/images/user.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../assets/images/user.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_SESSION['nama']; ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">

                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user"> Profil</i></a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat"><i class="fa fa-sign-out"> Keluar</i></a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" style="margin-top: 60px;">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../assets/images/user.png" class="img-rounded" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li>
              <a href="?module=home">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>

              </a>
            </li>
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-list"></i>
                <span>Profil Sekolah</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?module=sejarah"><i class="fa fa-bookmark"></i>Sejarah</a></li>
                <li><a href="?module=visi_misi"><i class="fa fa-bookmark"></i> <span>Misi & Visi</span></a></li>
                <li><a href="?module=sarana_prasarana"><i class="fa fa-bookmark"></i> <span>Sarana Prasarana</span></a></li>
              </ul>
            </li> -->
            <li>
              <a href="?module=profil">
                <i class="fa fa-list"></i> <span> Profil</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-list"></i>
                <span>Data Website</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="?module=pengumuman">
                    <i class="fa fa-book"></i> <span>Pengumuman</span>
                  </a>
                </li>
                <li>
                  <a href="?module=agenda">
                    <i class="fa fa-book"></i> <span> Agenda Sekolah</span>
                  </a>
                </li>
                <li>
                  <a href="?module=osim">
                    <i class="fa fa-files-o"></i> <span>Berita</span>
                  </a>
                </li>
                <li>
                  <a href="?module=galery">
                    <i class="fa fa-image"></i> <span>Galeri</span>
                  </a>
                </li>
                <li>
                  <a href="?module=album">
                    <i class="fa fa-image"></i> <span>Album</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- <li>
              <a href="?module=ppdb">
                <i class="fa fa-list"></i> <span> PPDB</span>
              </a>
            </li> -->
            <li>
              <a href="?module=guru_tkp">
                <i class="fa fa-list"></i> <span> Guru</span>
              </a>
            </li>
            <!-- <li>
              <a href="?module=ppid">
                <i class="fa fa-list"></i> <span> PPID</span>
              </a>
            </li> -->
            <li>
              <a href="?module=slide">
                <i class="fa fa-list"></i> <span> Slide</span>
              </a>
            </li>
            <li>
              <a href="?module=video">
                <i class="fa fa-list"></i> <span> Video</span>
              </a>
            </li>
            <li>
              <a href="?module=download">
                <i class="fa fa-list"></i> <span> Download</span>
              </a>
            </li>
            <li>
              <a href="logout.php">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <content>
        <?php include "content.php"; ?>
      </content>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b></b>
        </div>
        &copy; Copyright <?php echo date('Y');  ?> CV. Mediatama Web Indonesia
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark" style="top:50px;">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
          </div>
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->

    </div><!-- ./wrapper -->


    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.5 -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../assets/js/datatables.min.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/js/backtoTop.js"></script>
    <script src="../assets/ckeditor/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script> -->
    <script src="../assets/select2/dist/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
      $(function() {
        $('.textarea').wysihtml5();
        $('.select2').select2();
        $('#datepicker').datepicker({
          autoclose: true
        });

        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        CKEDITOR.replace('editor');
      });
    </script>
  </body>

  </html>
<?php

  $html = ob_get_clean();
  echo $html;
}

?>