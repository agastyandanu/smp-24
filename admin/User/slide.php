<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahslide":

        if (isset($_POST['save'])) {
          // cek tipe yg dikirim
          $nmberkas  = $_FILES["slide_foto"]["name"];
          $lokberkas = $_FILES["slide_foto"]["tmp_name"];

          $valid = array('png', 'jpg', 'jpeg');
          list($txt, $ext) = explode(".", $nmberkas);
          if (in_array($ext, $valid)) {

            $nmfoto = date('YmdHis') . "-" . substr(uniqid('', true), -5) . "." . $ext;
            if (!empty($lokberkas)) {
              move_uploaded_file($lokberkas, "../../img/slide/$nmfoto");
            }

            $save = mysqli_query($con, "INSERT INTO slide (slide_judul, slide_foto) VALUE ('$_POST[slide_judul]', '$nmfoto')");
          } else {
            echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/jpeg');
            </script>";
          }

          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=slide';
            </script>";
            exit;
          } else {
            echo "<script>alert('Gagal');
            </script>";
          }
        }
  ?>
        <section class="content-header">
          <h1>
            slide
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah</li>
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
                          <input type="text" name="slide_judul" id="kdp" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="gam" class="col-sm-2 control-label">File</label>
                        <div class="col-sm-4">
                          <input type="file" name="slide_foto" id="gam" class="form-control">
                          <span style="color: red; font-style: italic;">*Foto berupa png/jpg/jpeg</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                        </div>
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
      case "editslide":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($con, "SELECT * FROM slide WHERE slide_id='$_GET[id]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['save'])) {
          $slide_judul_seo = seo_title($_POST['slide_judul']);

          $nmberkas  = $_FILES["slide_foto"]["name"];
          $lokberkas = $_FILES["slide_foto"]["tmp_name"];

          if (empty($lokberkas)) {
            $save = mysqli_query($con, "UPDATE slide SET 
                                      slide_judul = '$_POST[slide_judul]'
                                      WHERE slide_id = '$_GET[id]'
                                      ");
          } else {
            $valid = array('png', 'jpg', 'jpeg');
            list($txt, $ext) = explode(".", $nmberkas);
            if (in_array($ext, $valid)) {
              $nmfoto = date('YmdHis') . "-" . substr(uniqid('', true), -5) . "." . $ext;

              if (!empty($lokberkas)) {
                move_uploaded_file($lokberkas, "../../img/slide/$nmfoto");
              }
              if (!empty($data['slide_foto'])) {
                unlink("../../img/slide/" . $data['slide_foto']);
              }

              $save = mysqli_query($con, "UPDATE slide SET 
                                      slide_judul = '$_POST[slide_judul]',
                                      slide_foto = '$nmfoto'
                                      WHERE slide_id = '$_GET[id]'");
            } else {
              echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
            </script>";
            }
          }



          if ($save) {
            echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=slide';
            </script>";
            exit;
          } else {
            echo "<script>alert('Gagal');
            </script>";
          }
        }
      ?>
        <section class="content-header">
          <h1>
            slide
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit slide</li>
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
                  <div class="box-body">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="kdp" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-8">
                          <input type="text" name="slide_judul" id="kdp" class="form-control" value="<?php echo $data['slide_judul'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-4">
                          <input type="file" name="slide_foto" id="gam" class="form-control">
                          <span style="color: red; font-style: italic;">*Foto berupa png,jpg,jpeg</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-4 col-md-offset-2">
                          <button type="submit" name="save" class="btn btn-primary btn-flat">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <script>
          $(document).ready(function() {
            var tipe = "<?= $data['slide_tipe'] ?>"
            if (tipe == 'teks') {
              document.getElementById("slide_berkas").style.display = "none";
              document.getElementById("gam").disabled = true;
              document.getElementById("editor").disabled = false;
              document.getElementById("slide_teks").style.display = "block";
            } else {
              document.getElementById("slide_teks").style.display = "none";
              document.getElementById("editor").disabled = true;
              document.getElementById("gam").disabled = false;
              document.getElementById("slide_berkas").style.display = "block";
            }
          });


          $('#slide_tipe').change(function() {
            // alert(this.value);
            if (this.value == 'teks') {
              document.getElementById("slide_berkas").style.display = "none";
              document.getElementById("gam").disabled = true;
              document.getElementById("editor").disabled = false;
              CKEDITOR.instances['editor'].setReadOnly(false);
              document.getElementById("slide_teks").style.display = "block";
            }
            if (this.value == 'berkas') {
              document.getElementById("slide_teks").style.display = "none";
              document.getElementById("gam").disabled = false;
              document.getElementById("editor").disabled = true;
              document.getElementById("slide_berkas").style.display = "block";
            }
          });
        </script>
      <?php
        break;
      case "hapusslide":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM slide WHERE slide_id = '$_GET[id]'"));

          if (!empty($lihat['slide_foto'])) {
            unlink("../../img/slide/" . $lihat['slide_foto']);
          }

          $del = mysqli_query($con, "DELETE FROM slide WHERE slide_id='$_GET[id]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=slide';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=slide';
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
        Slider
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=slide&aksi=tambahslide" class="btn btn-flat btn-primary">Tambah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Foto</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($con, "SELECT * FROM slide");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                    ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r["slide_judul"]; ?></td>
                        <td><img src="../../img/slide/<?= $r['slide_foto'] ?>" style="width: 150px; height: 150px;"> </td>
                        <td><a href="?module=slide&aksi=editslide&id=<?= $r['slide_id']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=slide&aksi=hapusslide&id=<?= $r['slide_id']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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