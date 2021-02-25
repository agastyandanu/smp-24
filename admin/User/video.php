<div class="content-wrapper">
  <?php
  if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];

    switch ($aksi) {
      case "tambahpartner":

        if (isset($_POST['save'])) {

          $save = mysqli_query($con, "INSERT INTO video (link_v, ket) VALUES ('$_POST[link_v]','$_POST[ket]')");

          if ($save) {
            echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=video';
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
            Video
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tambah Video</li>
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
                        <label for="nama" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-4">
                          <input type="text" name="ket" id="nama" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-4">
                          <input type="text" name="link_v" id="nama" class="form-control">
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
      case "editberita":
        if (isset($_GET['id'])) {
          $sql = mysqli_query($con, "SELECT * FROM video where id_video='$_GET[id]'");
          $data = mysqli_fetch_assoc($sql);
        }
        if (isset($_POST['save'])) {

          $save = mysqli_query($con, "UPDATE video set link_v='$_POST[link_v]', ket='$_POST[ket]' where id_video='$_GET[id]'");
          if ($save) {
            echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=video';
              </script>";
          } else {
            echo "<script>alert('Gagal');
              </script>";
          }
        }
      ?>
        <section class="content-header">
          <h1>
            Video
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit video</li>
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
                        <input type="text" name="ket" id="jdl" class="form-control" value="<?= $data['ket']; ?>">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="jdl" class="col-sm-2 control-label">link</label>
                      <div class="col-sm-10">
                        <textarea type="text" name="link_v" id="jdl" class="form-control" value=""><?= $data['link_v']; ?></textarea>
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
      case "hapuspartner":

        if (isset($_GET['id'])) {
          $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM video where id_video='$_GET[id]'"));

          $del = mysqli_query($con, "DELETE FROM video where id_video='$_GET[id]'");
          if ($del) {
            echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=video';
    				  </script>";
          } else {
            echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=video';
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
        Gallery
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Gallery</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=video&aksi=tambahpartner" class="btn btn-flat btn-primary">Tambah Video</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Link</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $sql = mysqli_query($con, "SELECT * FROM video");
                    while ($r = mysqli_fetch_assoc($sql)) {
                      $no++;
                    ?>
                      <tr>
                        <td><?= $no ?></td>
                        <td><?= $r["ket"] ?></td>
                        <td><?= $r["link_v"] ?></td>
                        <td><a href="?module=video&aksi=editberita&id=<?= $r['id_video']; ?>" class="btn btn-success btn-flat">Edit</a>
                          <a href="?module=video&aksi=hapuspartner&id=<?= $r['id_video']; ?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
                        </td>
                      <?php } ?>
                      </tr>
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