<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahdownload":

        if (isset($_POST['save'])) {
          // cek tipe yg dikirim
          $nmberkas  = $_FILES["download_file"]["name"];
          $lokberkas = $_FILES["download_file"]["tmp_name"];

          $valid = array('pdf');
          list($txt, $ext) = explode(".", $nmberkas);
          if (in_array($ext, $valid)) {

            $nmfoto = date('YmdHis') . "-" . substr(uniqid('', true), -5) . "." . $ext;
            if (!empty($lokberkas)) {
              move_uploaded_file($lokberkas, "../../img/download/$nmfoto");
            }

            $save = mysqli_query($con, "INSERT INTO download (download_judul, download_ket, download_file) VALUE ('$_POST[download_judul]', '$_POST[download_ket]', '$nmfoto')");
          } else {
            echo "<script>
              alert('Format File Tidak Mendukung, Upload File Dengan Format pdf');
            </script>";
          }

          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=download';
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
            Download
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
                          <input type="text" name="download_judul" id="kdp" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="des" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="download_ket" id="editor" class="form-control" rows="15" cols="80"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="gam" class="col-sm-2 control-label">File</label>
                        <div class="col-sm-4">
                          <input type="file" name="download_file" id="gam" class="form-control">
                          <span style="color: red; font-style: italic;">*Berkas berupa pdf</span>
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
          $('#download_tipe').change(function() {
            // alert(this.value);
            if (this.value == 'teks') {
              document.getElementById("download_berkas").style.display = "none";
              document.getElementById("gam").disabled = true;
              document.getElementById("editor").disabled = false;
              document.getElementById("download_teks").style.display = "block";
            }
            if (this.value == 'berkas') {
              document.getElementById("download_teks").style.display = "none";
              document.getElementById("editor").disabled = true;
              document.getElementById("gam").disabled = false;
              document.getElementById("download_berkas").style.display = "block";
            }
          });
        </script>
      <?php
        break;
      case "editdownload":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($con, "SELECT * FROM download WHERE download_id='$_GET[id]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['save'])) {
          $download_judul_seo = seo_title($_POST['download_judul']);
          // var_dump($_FILES);
          // var_dump($_POST);
          // exit;
          // cek tipe yg dikirim
          if ($_POST['download_tipe'] == 'teks') {
            if ($data['download_tipe'] == 'berkas') {
              if (!empty($data['download_ket'])) {
                unlink("../../img/download/" . $data['download_ket']);
              }
            }

            $save = mysqli_query($con, "UPDATE download SET 
                                      download_judul = '$_POST[download_judul]',
                                      download_judul_seo = '$download_judul_seo',
                                      download_tipe = '$_POST[download_tipe]',
                                      download_ket = '$_POST[download_ket]'
                                      WHERE download_id = '$_GET[id]'
                                      ");
          } else {
            $nmberkas  = $_FILES["download_ket"]["name"];
            $lokberkas = $_FILES["download_ket"]["tmp_name"];

            if (empty($lokberkas)) {
              $save = mysqli_query($con, "UPDATE download SET 
                                      download_judul = '$_POST[download_judul]',
                                      download_judul_seo = '$download_judul_seo',
                                      download_tipe = '$_POST[download_tipe]'
                                      WHERE download_id = '$_GET[id]'
                                      ");
            } else {
              $valid = array('pdf');
              list($txt, $ext) = explode(".", $nmberkas);
              if (in_array($ext, $valid)) {
                $nmfoto = date('YmdHis') . "-" . substr(uniqid('', true), -5) . "." . $ext;

                if (!empty($lokberkas)) {
                  move_uploaded_file($lokberkas, "../../img/download/$nmfoto");
                }
                if (!empty($data['download_ket'])) {
                  unlink("../../img/download/" . $data['download_ket']);
                }

                $save = mysqli_query($con, "UPDATE download SET 
                                      download_judul = '$_POST[download_judul]',
                                      download_judul_seo = '$download_judul_seo',
                                      download_tipe = '$_POST[download_tipe]',
                                      download_ket = '$nmfoto'
                                      WHERE download_id = '$_GET[id]'");
              } else {
                echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
            </script>";
              }
            }
          }


          if ($save) {
            echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=download';
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
            download
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit download</li>
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
                        <label for="kdp" class="col-sm-2 control-label">Menu</label>
                        <div class="col-sm-8">
                          <input type="text" name="download_judul" id="kdp" class="form-control" value="<?php echo $data['download_judul'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kdp" class="col-sm-2 control-label">Tipe</label>
                        <div class="col-sm-8">
                          <select name="download_tipe" id="download_tipe" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="teks">Teks</option>
                            <option value="berkas">Berkas</option>
                          </select>
                          <script>
                            document.getElementById('download_tipe').value = "<?php echo $data['download_tipe'] ?>";
                          </script>
                        </div>
                      </div>

                      <div class="form-group" id="download_teks" style="display: none;">
                        <label for="des" class="col-sm-2 control-label">Isi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="download_ket" id="editor" class="form-control" rows="15" cols="80"><?php echo $data['download_ket'] ?></textarea>
                        </div>
                      </div>

                      <div class="form-group" id="download_berkas" style="display: none;">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-4">
                          <input type="file" name="download_file" id="gam" class="form-control">
                          <span style="color: red; font-style: italic;">*Berkas berupa pdf</span>
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
            var tipe = "<?= $data['download_tipe'] ?>"
            if (tipe == 'teks') {
              document.getElementById("download_berkas").style.display = "none";
              document.getElementById("gam").disabled = true;
              document.getElementById("editor").disabled = false;
              document.getElementById("download_teks").style.display = "block";
            } else {
              document.getElementById("download_teks").style.display = "none";
              document.getElementById("editor").disabled = true;
              document.getElementById("gam").disabled = false;
              document.getElementById("download_berkas").style.display = "block";
            }
          });


          $('#download_tipe').change(function() {
            // alert(this.value);
            if (this.value == 'teks') {
              document.getElementById("download_berkas").style.display = "none";
              document.getElementById("gam").disabled = true;
              document.getElementById("editor").disabled = false;
              CKEDITOR.instances['editor'].setReadOnly(false);
              document.getElementById("download_teks").style.display = "block";
            }
            if (this.value == 'berkas') {
              document.getElementById("download_teks").style.display = "none";
              document.getElementById("gam").disabled = false;
              document.getElementById("editor").disabled = true;
              document.getElementById("download_berkas").style.display = "block";
            }
          });
        </script>
      <?php
        break;
      case "hapusdownload":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM download WHERE download_id = '$_GET[id]'"));

          if (!empty($lihat['download_ket'])) {
            unlink("../../img/download/" . $lihat['download_ket']);
          }

          $del = mysqli_query($con, "DELETE FROM download WHERE download_id='$_GET[id]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=download';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=download';
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
        Download
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Download</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=download&aksi=tambahdownload" class="btn btn-flat btn-primary">Tambah file</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Keterangan</th>
                      <th>File</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($con, "SELECT * FROM download");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                    ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r["download_judul"]; ?></td>
                        <td>
                          <?php
                          $kalimat = $r['download_ket'];
                          $cetak = substr($kalimat, 0, 60);
                          $p = strlen($kalimat);
                          if ($p <= 60) {
                            echo $cetak;
                          } elseif ($p > 60) {
                            echo $cetak . ".....";
                          }
                          ?>
                        </td>
                        <td> <a href="../../img/download/<?= $r['download_file'] ?>" target="_blank"> <?= $r['download_judul'] ?></a> </td>
                        <td><a href="?module=download&aksi=editdownload&id=<?= $r['download_id']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=download&aksi=hapusdownload&id=<?= $r['download_id']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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