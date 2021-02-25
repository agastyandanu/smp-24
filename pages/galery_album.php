<section id="blog" class="blog">
    <div class="container">
        <div class="card-header">GALERI</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">

                    <article class="entry" data-aos="fade-up">
                        
                            <?php
                            // $id = $_GET['iddetail'];
                            $album = $con->query("SELECT * FROM album");
                            while ($data = mysqli_fetch_assoc($album)) {
                            ?>
                                <a href="galery-<?php echo $data['album_id'] ?>.html">
                                    <div class="row p-3 shadow mt-2">
                                        <div class="col p-3">
                                            <h3><?php echo $data['album_nama'] ?></h3>
                                        </div>
                                    </div>
                                </a>
                            <?php } ?>
                        
                    </article><!-- End blog entry -->

                </div>

                <?php include "components/sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>