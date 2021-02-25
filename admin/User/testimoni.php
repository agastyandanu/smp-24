<div class="content-wrapper">
<?php
  if (isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];

  switch ($aksi){
    case "tambahtest" :

    if(isset($_POST['save'])){
	$save=mysqli_query($con, "INSERT INTO testimoni VALUES('', '$_POST[nama]','$_POST[deskripsi]','$_POST[profesi]','T')");

	 if($save) {
        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=testimoni';
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
        Data Fasilitas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Fasilitas</li>
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
						<label for="jabatan" class="col-sm-2 control-label">Nama</label>
					  <div class="col-sm-8">
						<input type="text" name="nama" id="des" class="form-control input" rows="15" cols="80">
					  </div>
					</div>

					<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">Deskripsi</label>
					  <div class="col-sm-8">
						<input type="text" name="deskripsi" id="des" class="form-control input" rows="15" cols="80">
					  </div>
					</div>
					
					<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">Profesi</label>
					  <div class="col-sm-8">
						<input type="text" name="profesi" id="des" class="form-control input" rows="15" cols="80">
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
    case "ubahstatus" :
  if (isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];
	$update =mysqli_query($con, "UPDATE testimoni SET status_testi='Y' WHERE id_testi='$_GET[id]'");
    if($update){
      echo "<script>
               alert('Status Berhasil Diubah');
               window.location='index.php?module=testimoni';
            </script>";
    }else{
      echo "<script>
              alert('Data Gagal Diubah');
              window.location='index.php?module=testimoni';
            </script>";
    }
  }

?>
<?php
    break;
    case "hapustesti" :

    if(isset($_GET['id'])){
      $del = mysqli_query($con, "DELETE FROM testimoni where id_testi='$_GET[id]'");
      if($del){
    	  echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=testimoni';
    				  </script>";
      }else{
        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=testimoni';
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
        Testimoni
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Testimoni</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
			<div class="box-header with-border">
              <a href="?module=testimoni&aksi=tambahtest" class="btn btn-flat btn-primary">Tambah Data</a>
            </div>
		  
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table  class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Profesi</th>
                    <th>Testimoni</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
        				<?php
        					$be = mysqli_query($con, "SELECT * FROM testimoni");
        					$no=1;
        					while($r=mysqli_fetch_assoc($be)){
        				?>
      				<tr>
      					<td><?= $no; ?></td>
      					<td><?= $r['nama_testi'] ?></td>
      					<td><?= $r['profesi_testi'] ?></td>
      					<td><?= $r['deskripsi_testi'] ?></td>
                <td><?= $r['status_testi'] ?></td>
      					<td><a href="?module=testimoni&aksi=ubahstatus&id=<?= $r['id_testi'];?>" class="btn btn-success btn-flat">Ubah Status</a>
      						<a href="?module=testimoni&aksi=hapustesti&id=<?= $r['id_testi'];?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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
