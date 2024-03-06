<?php
    $title = "Icaste - Tarumanagara University";
    $activepage = "committee";
    include_once('props/header.php');

    include 'database/conn.php';
    $qry = "SELECT * FROM m_committee WHERE id = 1";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    $qry_img = "SELECT * FROM m_img_menu WHERE nama_menu = 'committee'";
    $data_img = mysqli_query($conn, $qry_img);
    $result_img = mysqli_fetch_array($data_img);
    
    mysqli_close($conn);
?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background-image: url('.<?php echo $result_img['nama_img'] ?>');">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">COMMITTEE & REVIEWERS</h1>
            </div>
        </div>
        <!-- Header End -->


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h1 class="display-3 mb-4">Committee</h1>
                    <p class="mb-0" style="text-align: justify;"><?php echo $result['txt_committee'] ?></p>
                </div>
            </div>
        </div>

        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.4s">
                    <h1 class="display-3 mb-4">Reviewers</h1>
                    <p class="mb-0" style="text-align: justify;"><?php echo $result['txt_reviewers'] ?></p>
                </div>
            </div>
        </div>
        <!-- Team End -->

<?php
    include_once('props/footer.php');
?>