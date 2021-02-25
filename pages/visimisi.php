<section id="blog" class="blog">
    <div class="container">
        <div class="card-header">VISI & MISI</div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    // $id = $_GET['iddetail'];
                    $sql = mysqli_query($con, "SELECT * FROM visimisi ")->fetch_assoc();
                    ?>
                    <article class="entry" data-aos="fade-up">
                        <div class="entry-content">
                            <p>
                                <?= $sql['isi_visi'] ?>
                            </p>
                        </div>
                    </article><!-- End blog entry -->
                </div>

                <?php include "components/sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>