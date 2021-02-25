<div class="content-wrapper">

  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahpengumuman":

        if (isset($_POST['save'])) {
          $tglskrg = date('Y-m-d');
          $judulseo = seo_title($_POST['judul']);
          $nmberkas  = $_FILES['gambar']["name"];
          $nmberkas  = $_FILES['gambar']["name"];
          $lokberkas = $_FILES["gambar"]["tmp_name"];
          $nmfoto= date("YmdHis").$nmberkas;

          if(!empty($lokberkas)){
            move_uploaded_file($lokberkas, "../../img/pengumuman/$nmfoto");

            $save = mysqli_query($con, "INSERT INTO pengumuman (judul_pengumuman, tgl_post, isi_pengumuman, foto_pengumuman) VALUE ('$_POST[judul]','$tglskrg','$_POST[deskripsi]', '$nmfoto' )");

            if ($save) {
              echo "<script>
              alert('Tambah Data Berhasil');
              window.location='?module=pengumuman';
              </script>";
              exit;
            } else {
              echo "<script>alert('Gagal');
              </script>";
            }
          }


        }

  ?>
        <section class="content-header">
          <h1>
            Pengumuman
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Pengumuman</li>
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
      case "editpengumuman":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($con, "SELECT * FROM pengumuman where id_pengumuman='$_GET[id]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if(isset($_POST['save'])){
          $judulseo = seo_title($_POST['judul']);
          $nmberkas  = $_FILES['foto']["name"];
          $lokberkas = $_FILES["foto"]["tmp_name"];
          $nmfoto= date("YmdHis").$nmberkas;
          $valid    = array('jpg','png','gif','jpeg');

          if(empty($lokberkas)){
               $save = mysqli_query($con, "UPDATE pengumuman set judul_pengumuman='$_POST[judul]', isi_pengumuman='$_POST[deskripsi]' where id_pengumuman='$_GET[id]'");

             if($save) {
              echo "<script>
                  alert('Edit Data Berhasil');
                  window.location='?module=pengumuman';
                    </script>";
              }else{
                echo "<script>alert('Gagal');
                    </script>";
             }

          }else if(!empty($lokberkas)){
            list($txt, $ext) = explode(".",$nmfoto);
            
            if(in_array($ext,$valid)){
            move_uploaded_file($lokberkas, "../../img/pengumuman/$nmfoto");
            $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM pengumuman where id_pengumuman='$_GET[id]'"));

            unlink("../../img/pengumuman/".$lihat['foto_pengumuman']);
          
            $save = mysqli_query($con, "UPDATE pengumuman set judul_pengumuman='$_POST[judul]', isi_pengumuman='$_POST[deskripsi]', foto_pengumuman = '$nmfoto' where id_pengumuman='$_GET[id]'");

            if($save) {
              echo "<script>
                  alert('Edit Data Berhasil');
                  window.location='?module=pengumuman';
                    </script>";
              }else{
                echo "<script>alert('Gagal');
                    </script>";
             }
            }else{
             echo "<script>
                     alert('Format Foto Tidak Mendukung, Upload Foto Dengan Format png/jpg/gif/jpeg');
                     </script>";
           }
          }
        }
        // if (isset($_POST['save'])) {
        //   $judulseo = seo_title($_POST['judul']);
        //   $nmberkas  = $_FILES['foto']["name"];
        //   $nmberkas  = $_FILES['foto']["name"];
        //   $lokberkas = $_FILES["foto"]["tmp_name"];
        //   $nmfoto= date("YmdHis").$nmberkas;


        //   $save = mysqli_query($con, "UPDATE pengumuman set judul_pengumuman='$_POST[judul]', isi_pengumuman='$_POST[deskripsi]' where id_pengumuman='$_GET[id]'");
        //   if ($save) {
        //     echo "<script>
        //     alert('Edit Data Berhasil');
        //     window.location='?module=pengumuman';
        //       </script>";
        //   } else {
        //     echo "<script>alert('Gagal');
        //       </script>";
        //   }
        // }

      ?>
        <section class="content-header">
          <h1>
            Pengumuman
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Pengumuman</li>
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
                        <input type="text" name="judul" id="jdl" class="form-control" value="<?= $data['judul_pengumuman']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="des" class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="deskripsi" id="editor" class="form-control" rows="15" cols="80"><?= $data['isi_pengumuman']; ?></textarea>
                      </div>
                    </div>                    

                    <div class="form-group" >
                      <label for="gam" class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-4">
                        <input type="file" name="foto" id="gam" class="form-control">
                        <input type="hidden" name="gambarlama" id="jdl" class="form-control"  value="<?= $data['foto_pengumuman']; ?>">
                      </div>
                    </div>

                   <div class="form-group" >
                      <label for="gam" class="col-sm-2 control-label">&nbsp;</label>
                      <div class="col-sm-4">
                        <img src="../../img/pengumuman/<?= $data['foto_pengumuman']; ?>" style="width:250px;">
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
      case "hapuspengumuman":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM pengumuman where id_pengumuman='$_GET[id]'"));

          $del = mysqli_query($con, "DELETE FROM pengumuman where id_pengumuman='$_GET[id]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=pengumuman';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=pengumuman';
              </script>";
          }
        }
      ?>
    <?php
        break;
    }
  } else {
    ?>

    <section class="content-header">
      <h1>
        Pengumuman
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pengumuman</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=pengumuman&aksi=tambahpengumuman" class="btn btn-flat btn-primary">Tambah pengumuman</a>
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
                    $be = mysqli_query($con, "SELECT * FROM pengumuman ORDER BY tgl_post DESC");
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($be)) {
                      $des = substr($r['isi_pengumuman'], 0, 50) . "...";
                    ?>

                      <tr>
                        <td><?= $no; ?></td>
                        <td><img src="../../img/pengumuman/<?= $r["foto_pengumuman"];?>" style="width:100px;"></td>
                        <td><?= $r["judul_pengumuman"]; ?></td>
                        <td><?= $des; ?></td>
                        <td><a href="?module=pengumuman&aksi=editpengumuman&id=<?= $r['id_pengumuman']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=pengumuman&aksi=hapuspengumuman&id=<?= $r['id_pengumuman']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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