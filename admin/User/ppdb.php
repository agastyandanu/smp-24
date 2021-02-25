<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Data Pendaftar PPDB
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Guru Dan Karyawan Sekolah</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- <a href="?module=cetak_excel" class="btn btn-primary">Download Data Peserta PPDB</a> -->
                        <br>
                        <br>
                        <div class="table table-responsive">
                            <table class="table table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>No Telpon Pendaftaran</th>
                                        <th>Status</th>
                                        <th>Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $be = $con->query("SELECT * FROM tb_user");
                                    $no = 1;
                                    foreach ($be as $no => $r) {
                                    ?>
                                        <tr>
                                            <td><?= $no + 1; ?></td>
                                            <td><?= $r["user_nama"]; ?></td>
                                            <td><?= $r["user_email"]; ?></td>
                                            <td><?= $r["user_password_repeat"]; ?></td>
                                            <td><?= $r["user_no_telp"]; ?></td>
                                            <td>
                                                <?php
                                                if (empty($r["user_status"])) {
                                                    echo "Belum Mengisi Data";
                                                } else {
                                                    echo $r['user_status'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($r["user_bayar"] == null) {
                                                    echo "<span style='color:red'>Belum Lunas</span>";
                                                } else {
                                                    if ($r["user_bayar"] == 'Lunas') {
                                                        echo $r["user_bayar"];
                                                    } else {
                                                        echo "<span style='color:red'>Belum Lunas</span>";
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning" onclick="updatePembayaran(<?= $r['user_id'] ?>)">Update Pembayaran</button>
                                                <!--<a href="?module=bukti_pendaftaran&id=<?php echo $r['user_id'] ?>" class="btn btn-info">Download Formulir Pendaftraan</a>-->
                                                <button type="button" class="btn btn-danger" onclick="hapus(<?= $r['user_id'] ?>)">Hapus</button>
                                            </td>
                                            </td>
                                        </tr>
                                    <?php
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
</div>

<!-- modal update -->
<div class="modal fade" id="modalPembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Status Pembayaran</label>
                    <select name="user_bayar" id="user_bayar" class="form-control">
                        <option value="">Pilih</option>
                        <option value="Belum Lunas">Belum Lunas</option>
                        <option value="Lunas">Lunas</option>
                    </select>
                    <input type="hidden" id="user_id">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="update()">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function updatePembayaran(id) {
        $('#user_id').val(id);
        $('#modalPembayaran').modal();
    }

    function update() {
        var user_id = $('#user_id').val();
        var user_bayar = $('#user_bayar').val();

        axios.post("aksi_ppdb.php", {
            "user_id": user_id,
            "user_bayar": user_bayar,
        }).then(function(res) {
            hasil = res.data
            $('#user_id').val('');
            $('#modalPembayaran').modal('hide');
            window.location.reload(true);
            toastr.info(hasil.pesan)
        }).catch(function(err) {
            console.log(err);
        });
    }

    function hapus(id) {
        var yakin = confirm('Yakin Hapus Data Pendaftar?');
        console.log(yakin);
        if (yakin) {
            axios.post("aksi_hapus_ppdb.php", {
                "user_id": id,
            }).then(function(res) {
                hasil = res.data;
                window.location.reload(true);
                toastr.info(hasil.pesan)
            }).catch(function(err) {
                console.log(err);
            });
        }
    }
</script>