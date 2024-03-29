<?php
    $title = "Icaste - Tarumanagara University";
    $activepage = "index";
    include_once('props/header.php');

    include 'database/conn.php';
    $qry = "SELECT * FROM m_home WHERE id = 1";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    $qry_img = "SELECT * FROM m_img_menu WHERE nama_menu = 'home'";
    $data_img = mysqli_query($conn, $qry_img);
    $result_img = mysqli_fetch_array($data_img);

    
    mysqli_close($conn);
?>

            <!-- Carousel Start -->
            <div class="header-carousel owl-carousel ">
                <?php while ($row = $data_img->fetch_array()) { ?>
                    <div class="header-carousel-item">
                        <img src=".<?php echo $row['nama_img'] ?>" class="img-fluid w-100" alt="Image">
                    </div>
                <?php } ?>
            </div>
            <!-- Carousel End -->
            <?php
                // Bebaskan hasil query
                mysqli_free_result($data_img);
            ?>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Important Date Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-3 mb-4">IMPORTANT DATE</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> Hanoi, April 25th-26th , 2024</p>
                                </div>
                                <a href="#" class="h4">International Conference on Economics, Business, Social, and Humanities (ICEBSH)</a>
                                <p class="my-4">Social and Humanities Field: International Conference on Economics, Business, Social, and Humanities (ICEBSH) 2024</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> ikutin yang ini ukuran jumlah textnya </p>
                                </div>
                                <a href="#" class="h4">Benefits of a weekly physiotherapy session</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Important Date End -->

        <!-- Speakers Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s" style="text-align: justify;">
                    <h1 class="display-3 mb-4">SPEAKERS</h1>
                    <p class="mb-0" style="text-align: justify;"><?php echo $result['sub_judul1'] ?></p>
                </div>
            </div>
        </div>
        <!-- Speakers End -->

        <!-- Schedule Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.4s" style="text-align: justify;">
                    <h1 class="display-3 mb-4">SCHEDULE</h1>
                    <p class="mb-0" ><?php echo $result['sub_judul2'] ?></p>
                </div>
            </div>
        </div>
        <!-- Schedule End -->




<?php
    include_once('props/footer.php');
?>