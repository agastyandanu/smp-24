<div class="content-wrapper">
<?php
  if (isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];

  switch ($aksi){
    case "tambahteam" :

    if(isset($_POST['save'])){
		//$nmberkas  = $_FILES["foto"]["name"];
		//$lokberkas = $_FILES["foto"]["tmp_name"];
		//$nmfoto= date("YmdHis").$nmberkas;
		//if(!empty($lokberkas)){
			//move_uploaded_file($lokberkas, "../../img/fasilitas/$nmfoto");
		//}

	$save=mysqli_query($con, "INSERT INTO tb_karyawan VALUES('', '$_POST[nama_k]','$_POST[jk_k]','$_POST[tgl_k]','$_POST[alamat_k]','$_POST[nohp_k]','$_POST[email_k]')");
	
	$id= mysqli_insert_id($con);
	
	mysqli_query($con, "INSERT INTO tb_user values('','$id','$_POST[email_k]','$_POST[password]','Debcollector')");
	
	 if($save) {
        echo "<script>
            alert('Tambah Data Berhasil');
            window.location='?module=karyawan';
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
						<label for="jabatan" class="col-sm-2 control-label">Nama Karyawan</label>
					  <div class="col-sm-8">
						<input type="text" name="nama_k" id="des" class="form-control input" rows="15" cols="80">
					  </div>
					</div>
					
				<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">Jenis Kelamin</label>
					  <div class="col-sm-8">
						<select type="text" name="jk_k" id="des" class="form-control input" >
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					  </div>
					</div>
					
				<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">Tanggal Lahir</label>
					  <div class="col-sm-8">
						<input type="date" name="tgl_k" id="des" class="form-control input" rows="15" cols="80">
					  </div>
					</div>
					
				<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">Alamat Karyawan</label>
					  <div class="col-sm-8">
						<input type="text" name="alamat_k" id="des" class="form-control input" rows="15" cols="80">
					  </div>
					</div>
				

				<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">No Handphone</label>
					  <div class="col-sm-8">
						<input type="text" name="nohp_k" id="des" class="form-control input" rows="15" cols="80">
					  </div>
					</div>

					<div class="form-group">
						<label for="foto" class="col-sm-2 control-label">Email</label>
					  <div class="col-sm-4">
						<input type="email" name="email_k" id="foto" class="form-control">
					  </div>
					</div>
					
					<div class="form-group">
						<label for="foto" class="col-sm-2 control-label">Password</label>
					  <div class="col-sm-4">
						<input type="password" name="password" id="foto" class="form-control">
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
    case "editteam":
    if(isset($_GET['id'])){
      $sql = mysqli_query($con, "SELECT * FROM tb_karyawan where id_karyawan='$_GET[id]'");
      $data=mysqli_fetch_assoc($sql);
    }
    if(isset($_POST['save'])){
		if($_POST["password"]==""){
			$save=mysqli_query($con, "UPDATE tb_karyawan set nama_k='$_POST[nama_k]', jk_k='$_POST[jk_k]', alamat_k='$_POST[alamat_k]', tgl_k='$_POST[tgl_k]', nohp_k='$_POST[nohp_k]', email_k='$_POST[email_k]' where id_karyawan='$_GET[id]'");
			
			mysqli_query($con, "UPDATE tb_user set username='$_POST[email_k]' where id_lgn='$_GET[id]'");
		}else{
    $save=mysqli_query($con, "UPDATE tb_karyawan set nama_k='$_POST[nama_k]', jk_k='$_POST[jk_k]', alamat_k='$_POST[alamat_k]', tgl_k='$_POST[tgl_k]', nohp_k='$_POST[nohp_k]', email_k='$_POST[email_k]' where id_karyawan='$_GET[id]'");
	
	mysqli_query($con, "UPDATE tb_user set username='$_POST[email_k]', password='$_POST[password]' where id_lgn='$_GET[id]'");
	
		}
      if($save) {
        echo "<script>
            alert('Edit Data Berhasil');
            window.location='?module=karyawan';
              </script>";
        }else{
          echo "<script>alert('Gagal');
              </script>";
       }
    }
?>
<section class="content-header">
      <h1>
        Data Karyawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data</li>
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
						<label for="jabatan" class="col-sm-2 control-label">Nama Karyawan</label>
					  <div class="col-sm-8">
						<input type="text" name="nama_k" id="des" class="form-control input" value="<?= $data['nama_k']?>">
					  </div>
					</div>
					
				<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">Jenis Kelamin</label>
					  <div class="col-sm-8">
						<select type="text" name="jk_k" id="des" class="form-control input" value="<?= $data['jk_k']?>">
						<?php 
							if($data["jk_k"]=="Laki-Laki"){
								echo"<option value='Laki-Laki' selected>Laki-Laki</option>";
								echo"<option value='Perempuan' >Perempuan</option>";
							}else{
								echo"<option value='Laki-Laki' >Laki-Laki</option>";
								echo"<option value='Perempuan' selected>Perempuan</option>";
							}
						?>
						</select>
					  </div>
					</div>
					
				<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">Tanggal Lahir</label>
					  <div class="col-sm-8">
						<input type="date" name="tgl_k" id="des" class="form-control input" value="<?= $data['tgl_k']?>">
					  </div>
					</div>
					
				<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">Alamat Karyawan</label>
					  <div class="col-sm-8">
						<textarea type="text" name="alamat_k" id="des" class="form-control input" rows="15" cols="80"><?= $data['alamat_k']?></textarea>
					  </div>
					</div>
				

				<div class="form-group">
						<label for="jabatan" class="col-sm-2 control-label">No Handphone</label>
					  <div class="col-sm-8">
						<input type="text" name="nohp_k" id="des" class="form-control input" value="<?= $data['nohp_k']?>">
					  </div>
					</div>

					<div class="form-group">
						<label for="foto" class="col-sm-2 control-label">Email</label>
					  <div class="col-sm-4">
						<input type="email" name="email_k" id="foto" class="form-control" value="<?= $data['email_k']?>">
					  </div>
					</div>
					
					<div class="form-group">
						<label for="foto" class="col-sm-2 control-label">Password</label>
					  <div class="col-sm-4">
						<input type="password" name="password" id="foto" class="form-control" >
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
    case "hapusteam" :

    if(isset($_GET['id'])){
      $lihat = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM tb_karyawan where id_karyawan='$_GET[id]'"));

      unlink("../../img/fasilitas/".$lihat['gambar_f']);
      $del = mysqli_query($con, "DELETE FROM tb_karyawan where id_karyawan='$_GET[id]'");
      if($del){
    	  echo "<script>
                 alert('Data Berhasil Dihapus');
    					   window.location='index.php?module=karyawan';
    				  </script>";
      }else{
        echo "<script>
                alert('Data Gagal Dihapus');
                window.location='index.php?module=karyawan';
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
        Data Data
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Data</li>
      </ol>
</section>
<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <a href="?module=karyawan&aksi=tambahteam" class="btn btn-flat btn-primary">Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table table-responsive">
              <table  class="table table-bordered table-striped" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
                    <th>Alamat</th>
					<th>No Handphone</th>
					<th>Email</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0;
                    $sql = mysqli_query($con, "SELECT * FROM tb_karyawan ORDER BY id_karyawan ASC");
                    while($r = mysqli_fetch_assoc($sql)){
                      $no++;
                  ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><?= $r['nama_k'] ?></td>
					<td><?= $r['jk_k'] ?></td>
					<td><?= $r['tgl_k'] ?></td>
					<td><?= $r['alamat_k'] ?></td>
					<td><?= $r['nohp_k'] ?></td>
					<td><?= $r['email_k'] ?></td>
                    <td><a href="?module=karyawan&aksi=editteam&id=<?= $r['id_karyawan'];?>" class="btn btn-success btn-flat">Edit</a>
                      <a href="?module=karyawan&aksi=hapusteam&id=<?= $r['id_karyawan'];?>" class="btn btn-danger btn-flat" onclick="return confirm('Yakin Akan Menghapus Data Ini ... ?')">Hapus</a>
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
