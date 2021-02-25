<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahosim":

        if (isset($_POST['save'])) {
          $tglskrg = date('Y-m-d');
          $judulseo = seo_title($_POST['judul']);
          $nmberkas  = $_FILES["gambar"]["name"];
          $lokberkas = $_FILES["gambar"]["tmp_name"];

          $valid    = array('jpg', 'png', 'gif', 'jpeg');
          list($txt, $ext) = explode(".", $nmberkas);
          if (in_array($ext, $valid)) {

            $nmfoto = date('YmdHis') . "-" . substr(uniqid('', true), -5) . "." . $ext;
            if (!empty($lokberkas)) {
              move_uploaded_file($lokberkas, "../../img/osim/$nmfoto");
            }

            $save = mysqli_query($con, "INSERT INTO osim (osim_judul, osim_tgl, osim_isi, osim_gambar) VALUE ('$_POST[judul]','$tglskrg', '$_POST[deskripsi]' , '$nmfoto')");

            if ($save) {
              echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=osim';
            </script>";
              exit;
            } else {
              echo "<script>alert('Gagal');
            </script>";
            }
          } else {
            echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
            </script>";
          }
        }
  ?>
        <section class="content-header">
          <h1>
            Berita
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Berita</li>
          </ol>
        </section>
        <!-- Content Header (Page header) -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">

                </div>
                <!-- form start -->
                <form method="POST" class="form-horizontal" action="" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="kdp" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-8">
                          <input type="text" name="judul" id="kdp" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"></textarea>

                        </div>
                      </div>



                      <div class="form-group">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-4">
                          <input type="file" name="gambar" id="gam" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      <?php
        break;
      case "editosim":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($con, "SELECT * FROM osim where osim_id='$_GET[id]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['save'])) {
          $judulseo = seo_title($_POST['judul']);
          $nmberkas  = $_FILES['foto']["name"];
          $lokberkas = $_FILES["foto"]["tmp_name"];
          $nmfoto = date("YmdHis") . $nmberkas;
          $valid    = array('jpg', 'png', 'gif', 'jpeg');

          if (empty($lokberkas)) {

            $save = mysqli_query($con, "UPDATE osim set osim_judul='$_POST[judul]', osim_isi = '$_POST[deskripsi]' where osim_id = '$_GET[id]'");
            if ($save) {
              echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=osim';
              </script>";
            } else {
              echo "<script>alert('Gagal');
              </script>";
            }
          } elseif (!empty($lokberkas)) {
            list($txt, $ext) = explode(".", $nmberkas);
            if (in_array($ext, $valid)) {
              $nmfoto = date('YmdHis') . "-" . substr(uniqid('', true), -5) . "." . $ext;
              move_uploaded_file($lokberkas, "../../img/osim/$nmfoto");
              $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM osim where osim_id='$_GET[id]'"));

              unlink("../../img/osim/" . $lihat['osim_gambar']);

              $save = mysqli_query($con, "UPDATE osim set osim_judul = '$_POST[judul]', osim_isi='$_POST[deskripsi]', osim_gambar='$nmfoto' where osim_id='$_GET[id]'");
              if ($save) {
                echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=osim';
              </script>";
              } else {
                echo "<script>alert('Gagal');
              </script>";
              }
            } else {
              echo "<script>
               alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
               </script>";
            }
          }
        }
      ?>
        <section class="content-header">
          <h1>
            Berita
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Berita</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header with-border">
                </div>
                <!-- form start -->
                <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
                  <div class="box-body ">
                    <div class="form-group">
                      <label for="jdl" class="col-sm-2 control-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" name="judul" id="jdl" class="form-control" value="<?= $data['osim_judul']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="des" class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"><?= $data['osim_isi']; ?></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="gam" class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-4">
                        <input type="file" name="foto" id="gam" class="form-control">
                        <input type="hidden" name="gambarlama" id="jdl" class="form-control" value="<?= $data['gambar']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="gam" class="col-sm-2 control-label">&nbsp;</label>
                      <div class="col-sm-4">
                        <img src="../../img/osim/<?= $data['osim_gambar']; ?>" style="width:250px;">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-4 col-md-offset-2">
                        <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      <?php
        break;
      case "hapusosim":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM osim where osim_id='$_GET[id]'"));

          unlink("../../img/osim/" . $lihat['osim_gambar']);
          $del = mysqli_query($con, "DELETE FROM osim where osim_id='$_GET[id]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=osim';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=osim';
              </script>";
          }
        }
      ?>
    <?php
        break;
    }
  } else {
    ?>

    <!-- dashboard/ template -->

    <section class="content-header">
      <h1>
        Berita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Berita</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=osim&aksi=tambahosim" class="btn btn-flat btn-primary">Tambah Berita</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Judul</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($con, "SELECT * FROM osim ORDER BY osim_id DESC");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                      $des = substr($r['osim_isi'], 0, 50) . "...";
                    ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><img src="../../img/osim/<?= $r["osim_gambar"]; ?>" style="width:100px;"></td>
                        <td><?= $r["osim_judul"]; ?></td>
                        <td><?= $des; ?></td>
                        <td><a href="?module=osim&aksi=editosim&id=<?= $r['osim_id']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=osim&aksi=hapusosim&id=<?= $r['osim_id']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                        </td>
                      </tr>
                    <?php $no++;
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- /.box -->
    </section>
  <?php } ?>

</div>