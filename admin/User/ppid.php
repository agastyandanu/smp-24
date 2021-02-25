<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahppid":

        if (isset($_POST['save'])) {
          // var_dump($_POST);
          // var_dump($_FILES);
          // exit;

          $ppid_menu_seo = seo_title($_POST['ppid_menu']);

          // cek tipe yg dikirim
          if ($_POST['ppid_tipe'] == 'teks') {
            $save = mysqli_query($con, "INSERT INTO ppid (ppid_menu, ppid_menu_seo, ppid_tipe, ppid_isi) VALUE ('$_POST[ppid_menu]','$ppid_menu_seo', '$_POST[ppid_tipe]', '$_POST[ppid_isi]')");
          } else {

            $nmberkas  = $_FILES["ppid_isi"]["name"];
            $lokberkas = $_FILES["ppid_isi"]["tmp_name"];

            $valid = array('pdf');
            list($txt, $ext) = explode(".", $nmberkas);
            if (in_array($ext, $valid)) {

              $nmfoto = date('YmdHis') . "-" . substr(uniqid('', true), -5) . "." . $ext;
              if (!empty($lokberkas)) {
                move_uploaded_file($lokberkas, "../../img/ppid/$nmfoto");
              }

              $save = mysqli_query($con, "INSERT INTO ppid (ppid_menu, ppid_menu_seo, ppid_tipe, ppid_isi) VALUE ('$_POST[ppid_menu]','$ppid_menu_seo', '$_POST[ppid_tipe]', '$nmfoto')");
            } else {
              echo "<script>
              alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
            </script>";
            }
          }


          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=ppid';
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
            PPID
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Kegiatan</li>
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
                        <label for="kdp" class="col-sm-2 control-label">Menu</label>
                        <div class="col-sm-8">
                          <input type="text" name="ppid_menu" id="kdp" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kdp" class="col-sm-2 control-label">Tipe</label>
                        <div class="col-sm-8">
                          <select name="ppid_tipe" id="ppid_tipe" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="teks">Teks</option>
                            <option value="berkas">Berkas</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group" id="ppid_teks" style="display: none;">
                        <label for="des" class="col-sm-2 control-label">Isi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="ppid_isi" id="editor" class="form-control" rows="15" cols="80"></textarea>
                        </div>
                      </div>

                      <div class="form-group" id="ppid_berkas" style="display: none;">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-4">
                          <input type="file" name="ppid_isi" id="gam" class="form-control">
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
          $('#ppid_tipe').change(function() {
            // alert(this.value);
            if (this.value == 'teks') {
              document.getElementById("ppid_berkas").style.display = "none";
              document.getElementById("gam").disabled = true;
              document.getElementById("editor").disabled = false;
              document.getElementById("ppid_teks").style.display = "block";
            }
            if (this.value == 'berkas') {
              document.getElementById("ppid_teks").style.display = "none";
              document.getElementById("editor").disabled = true;
              document.getElementById("gam").disabled = false;
              document.getElementById("ppid_berkas").style.display = "block";
            }
          });
        </script>
      <?php
        break;
      case "editppid":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($con, "SELECT * FROM ppid WHERE ppid_id='$_GET[id]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['save'])) {
          $ppid_menu_seo = seo_title($_POST['ppid_menu']);
          // var_dump($_FILES);
          // var_dump($_POST);
          // exit;
          // cek tipe yg dikirim
          if ($_POST['ppid_tipe'] == 'teks') {
            if ($data['ppid_tipe'] == 'berkas') {
              if (!empty($data['ppid_isi'])) {
                unlink("../../img/ppid/" . $data['ppid_isi']);
              }
            }

            $save = mysqli_query($con, "UPDATE ppid SET 
                                      ppid_menu = '$_POST[ppid_menu]',
                                      ppid_menu_seo = '$ppid_menu_seo',
                                      ppid_tipe = '$_POST[ppid_tipe]',
                                      ppid_isi = '$_POST[ppid_isi]'
                                      WHERE ppid_id = '$_GET[id]'
                                      ");
          } else {
            $nmberkas  = $_FILES["ppid_isi"]["name"];
            $lokberkas = $_FILES["ppid_isi"]["tmp_name"];

            if (empty($lokberkas)) {
              $save = mysqli_query($con, "UPDATE ppid SET 
                                      ppid_menu = '$_POST[ppid_menu]',
                                      ppid_menu_seo = '$ppid_menu_seo',
                                      ppid_tipe = '$_POST[ppid_tipe]'
                                      WHERE ppid_id = '$_GET[id]'
                                      ");
            } else {
              $valid = array('pdf');
              list($txt, $ext) = explode(".", $nmberkas);
              if (in_array($ext, $valid)) {
                $nmfoto = date('YmdHis') . "-" . substr(uniqid('', true), -5) . "." . $ext;

                if (!empty($lokberkas)) {
                  move_uploaded_file($lokberkas, "../../img/ppid/$nmfoto");
                }
                if (!empty($data['ppid_isi'])) {
                  unlink("../../img/ppid/" . $data['ppid_isi']);
                }

                $save = mysqli_query($con, "UPDATE ppid SET 
                                      ppid_menu = '$_POST[ppid_menu]',
                                      ppid_menu_seo = '$ppid_menu_seo',
                                      ppid_tipe = '$_POST[ppid_tipe]',
                                      ppid_isi = '$nmfoto'
                                      WHERE ppid_id = '$_GET[id]'");
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
            window.location='?module=ppid';
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
            PPID
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit PPID</li>
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
                          <input type="text" name="ppid_menu" id="kdp" class="form-control" value="<?php echo $data['ppid_menu'] ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="kdp" class="col-sm-2 control-label">Tipe</label>
                        <div class="col-sm-8">
                          <select name="ppid_tipe" id="ppid_tipe" class="form-control">
                            <option value="">-Pilih-</option>
                            <option value="teks">Teks</option>
                            <option value="berkas">Berkas</option>
                          </select>
                          <script>
                            document.getElementById('ppid_tipe').value = "<?php echo $data['ppid_tipe'] ?>";
                          </script>
                        </div>
                      </div>

                      <div class="form-group" id="ppid_teks" style="display: none;">
                        <label for="des" class="col-sm-2 control-label">Isi</label>
                        <div class="col-sm-8">
                          <textarea type="text" name="ppid_isi" id="editor" class="form-control" rows="15" cols="80"><?php echo $data['ppid_isi'] ?></textarea>
                        </div>
                      </div>

                      <div class="form-group" id="ppid_berkas" style="display: none;">
                        <label for="gam" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-4">
                          <input type="file" name="ppid_isi" id="gam" class="form-control">
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
            var tipe = "<?= $data['ppid_tipe'] ?>"
            if (tipe == 'teks') {
              document.getElementById("ppid_berkas").style.display = "none";
              document.getElementById("gam").disabled = true;
              document.getElementById("editor").disabled = false;
              document.getElementById("ppid_teks").style.display = "block";
            } else {
              document.getElementById("ppid_teks").style.display = "none";
              document.getElementById("editor").disabled = true;
              document.getElementById("gam").disabled = false;
              document.getElementById("ppid_berkas").style.display = "block";
            }
          });


          $('#ppid_tipe').change(function() {
            // alert(this.value);
            if (this.value == 'teks') {
              document.getElementById("ppid_berkas").style.display = "none";
              document.getElementById("gam").disabled = true;
              document.getElementById("editor").disabled = false;
              CKEDITOR.instances['editor'].setReadOnly(false);
              document.getElementById("ppid_teks").style.display = "block";
            }
            if (this.value == 'berkas') {
              document.getElementById("ppid_teks").style.display = "none";
              document.getElementById("gam").disabled = false;
              document.getElementById("editor").disabled = true;
              document.getElementById("ppid_berkas").style.display = "block";
            }
          });
        </script>
      <?php
        break;
      case "hapusppid":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM ppid WHERE ppid_id = '$_GET[id]'"));

          if (!empty($lihat['ppid_isi'])) {
            unlink("../../img/ppid/" . $lihat['ppid_isi']);
          }

          $del = mysqli_query($con, "DELETE FROM ppid WHERE ppid_id='$_GET[id]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=ppid';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=ppid';
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
        PPID
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">PPID</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=ppid&aksi=tambahppid" class="btn btn-flat btn-primary">Tambah PPID</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Menu</th>
                      <th>Isi</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $be = mysqli_query($con, "SELECT * FROM ppid");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                    ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $r["ppid_menu"]; ?></td>
                        <?php
                        if ($r['ppid_tipe'] == 'teks') {
                        ?>
                          <td>
                            <?php
                            $kalimat = $r['ppid_isi'];
                            $cetak = substr($kalimat, 0, 60);
                            $p = strlen($kalimat);
                            if ($p <= 60) {
                              echo $cetak;
                            } elseif ($p > 60) {
                              echo $cetak . ".....";
                            }
                            ?>
                          </td>
                        <?php
                        } else {
                        ?>
                          <td> <a href="../../img/ppid/<?= $r['ppid_isi'] ?>" target="_blank"> <?= $r['ppid_isi'] ?></a> </td>
                        <?php
                        }
                        ?>
                        <td><a href="?module=ppid&aksi=editppid&id=<?= $r['ppid_id']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=ppid&aksi=hapusppid&id=<?= $r['ppid_id']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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