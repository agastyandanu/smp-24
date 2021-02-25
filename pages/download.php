<section id="blog" class="blog">
    <div class="container">
        <div class="card-header">Download</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <article class="entry" data-aos="fade-up">

                        <table class="table table-responsive" id="example3" style="width: 100%;">
                            <thead class="">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = mysqli_query($con, "SELECT * FROM download");
                                while ($data = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['download_judul']; ?></td>
                                        <td><?= $data['download_ket']; ?></td>
                                        <td> <a href="img/download/<?= $data['download_file'] ?>" target="_blank" download=""> <?= $data['download_judul'] ?></a> </td>
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