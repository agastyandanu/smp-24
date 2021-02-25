<div class="content-wrapper">

<?php
  if (isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];

  switch ($aksi){
    case "tambahberita" :

    if(isset($_POST['save'])){
    $tglskrg = date('Y-m-d');

	$save=mysqli_query($con, "INSERT INTO sosmed VALUES ('','$_POST[ig]','$_POST[fb]','$_POST[twitter]','$_POST[wa]')");

	 if($save) {
        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=sosmed';
            </script>";
            exit;
      }else{
        echo "<script>alert('Gagal');
            </script>";
      }
    }
?>
<section class="content-header">
      <h1>
        Sosial Media
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Sosmed</li>
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
						<label for="kdp" class="col-sm-2 control-label">Instagram</label>
					  <div class="col-sm-8">
						<input type="text" name="judul" id="kdp" class="form-control">
					  </div>
					</div>

					<div class="form-group">
						<label for="kdp" class="col-sm-2 control-label">Facebook</label>
					  <div class="col-sm-8">
						<input type="text" name="judul" id="kdp" class="form-control">
					  </div>
					</div>

					<div class="form-group">
						<label for="kdp" class="col-sm-2 control-label">Twitter</label>
					  <div class="col-sm-8">
						<input type="text" name="judul" id="kdp" class="form-control">
					  </div>
					</div>

					<div class="form-group">
						<label for="gam" class="col-sm-2 control-label">Gambar</label>
					  <div class="col-sm-4">
						<input type="file" name="gambar" id="gam" class="form-control">
					  </div>
					</div>
					
					<div class="form-group">
						<label for="kdp" class="col-sm-2 control-label">Wa</label>
					  <div class="col-sm-8">
						<input type="text" name="judul" id="kdp" class="form-control">
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
    if(isset($_GET['id'])){
      $sql = mysqli_query($con, "SELECT * FROM sosmed where id_sosmed='$_GET[id]'");
      $data=mysqli_fetch_assoc($sql);
    }
    if(isset($_POST['save'])){
    
      $save=mysqli_query($con, "UPDATE sosmed set ig='$_POST[ig]', fb='$_POST[fb]', twitter='$_POST[twitter]', wa='$_POST[wa]' where id_sosmed='$_GET[id]'");
      if($save) {
        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=sosmed';
              </script>";
        }else{
          echo "<script>alert('Gagal');
              </script>";
       }
    }
?>
<section class="content-header">
      <h1>
        Sosmed Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Sosmed</li>
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
                <div class="form-group" >
                  <label for="jdl" class="col-sm-2 control-label">INSTAGRAM</label>
                  <div class="col-sm-10">
                    <input type="text" name="ig" id="jdl" class="form-control"  value="<?= $data['ig']; ?>">
                  </div>
                </div>
				
				<div class="form-group" >
                  <label for="jdl" class="col-sm-2 control-label">FACEBOOK</label>
                  <div class="col-sm-10">
                    <input type="text" name="fb" id="jdl" class="form-control"  value="<?= $data['fb']; ?>">
                  </div>
                </div>
				
				<div class="form-group" >
                  <label for="jdl" class="col-sm-2 control-label">TWITTER</label>
                  <div class="col-sm-10">
                    <input type="text" name="twitter" id="jdl" class="form-control"  value="<?= $data['twitter']; ?>">
                  </div>
                </div>
				
				<div class="form-group" >
                  <label for="jdl" class="col-sm-2 control-label">WHATSAPP</label>
                  <div class="col-sm-10">
                    <input type="text" name="wa" id="jdl" class="form-control"  value="<?= $data['wa']; ?>">
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
    case "hapusberita" :

    if(isset($_GET['id'])){
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM agenda where id_agenda='$_GET[id]'"));

      unlink("../../img/agenda sekolah/".$lihat['gambar']);
      $del = mysqli_query($con, "DELETE FROM agenda where id_agenda='$_GET[id]'");
      if($del){
    	  echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=agenda';
    				  </script>";
      }else{
        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=agenda';
              </script>";
      }
    }
?>
<?php
break;
}
}else{
?>

<section class="content-header">
      <h1>
        Sosmed Sekolah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Sosmed Sekolah</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <!--<div class="box-header with-border">
              <a href="?module=agenda&aksi=tambahberita" class="btn btn-flat btn-primary">Tambah Agenda </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Instagram</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
					<th>Whatsapp</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $be = mysqli_query($con, "SELECT * FROM sosmed");
                  $no=1;
                  while($r=mysqli_fetch_assoc($be)){
                    ?>

                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r["ig"];?></td>
                      <td><?= $r["fb"];?></td>
                      <td><?= $r["twitter"];?></td>
					  <td><?= $r["wa"];?></td>
                      <td><a href="?module=sosmed&aksi=editberita&id=<?= $r['id_sosmed'];?>" class="btn btn-success btn-flat">Edit</a>
                       
                      </td>
                    </tr>
                    <?php $no++; } ?>
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
