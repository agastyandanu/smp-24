<section id="blog" class="blog">
    <div class="container">
        <div class="card-header">Direktori Guru</div>
        <div class="card-body">
            <div class="row">

                <div class="col-lg-8">
                    <article class="entry" data-aos="fade-up">
                        <table class="table table-responsive" id="example2">
                            <thead class="">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Guru</th>
                                    <th>Jabatan</th>
                                    <th>Alamat</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = mysqli_query($con, "SELECT * FROM tenaga_kp");
                                while ($data = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_guru']; ?></td>
                                        <td><?= $data['jabatan_g']; ?></td>
                                        <td><?= $data['alamat_g']; ?></td>
                                        <td><img width="100" src="img/guru/<?= $data['foto']; ?>"></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </article>
                </div>

                <?php include "components/sidebar.php"; ?>

            </div>
        </div>
    </div>
</section>