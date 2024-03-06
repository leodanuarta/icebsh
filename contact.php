<?php
    $title = "Icaste - Tarumanagara University";
    $activepage = "contact";
    include_once('props/header.php');;
    
    include 'database/conn.php';
    $qry = "SELECT * FROM m_contact WHERE id = 1";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    mysqli_close($conn);

?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s" style="text-align: justify;">
                    <p class="mb-0 text-black-50"><?php echo $result['txt_contact'] ?></p>
                </div>
            </div>
        </div>
        <!-- Contact End -->

<?php
    include_once('props/footer.php');
?>