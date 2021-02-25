<?php
$pecah = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM ppid WHERE ppid_id = '$_GET[q]'"));
// var_dump($ambil);
if (!empty($pecah)) {
?>
    <section id="blog" class="blog">
        <div class="container">
            <div class="card-header"><?php echo $pecah['ppid_menu'] ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="entry" data-aos="" style="width: 100%;" style="word-wrap: break-word !important;">
                            <div class="entry-content" style="word-wrap: break-word !important;">
                                <?php
                                if ($pecah['ppid_tipe'] == 'teks') {
                                ?>
                                    <div style="word-wrap: break-word !important;">
                                        <?php echo $pecah['ppid_isi'] ?>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <!-- <embed type="application/pdf" src="img/ppid/<?php echo $pecah['ppid_isi'] ?>" style="width: 100%; height: 800px;"></embed> -->
                                    <iframe src="img/ppid/<?php echo $pecah['ppid_isi'] ?>" style="width: 100%; height: 800px;"></iframe>
                                <?php
                                }
                                ?>
                            </div>
                        </article>
                        <!-- End blog entry -->
                    </div>

                    <?php include "components/sidebar.php"; ?>
                </div>
            </div>
        </div>
    </section>
<?php
} else {
    echo "<script>
        window.location = 'page_404.php';
    </script>";
}
?>