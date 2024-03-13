<?php
    include 'database/conn.php';

    $qry = "SELECT * FROM m_info";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    mysqli_close($conn);

?>

    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.2s" style="background-color: #202135">
        <div class="container py-5">
            <div class="row" style="display: flex; justify-content: center;"> 
                <div class="col-md-4 col-lg-4 col-xl-2" style="text-align: center;">
                    <div class="row"><p>Co Host By </p></div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSRp9BP6UeQXXHERNZOTNFB-qw9KvT-akmCeQQh04rMw&s" alt="">
                </div>
                <div class="col-md-4 col-lg-4 col-xl-2" style="text-align: center;">
                    <div class="row"><p>Co Host By </p></div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSRp9BP6UeQXXHERNZOTNFB-qw9KvT-akmCeQQh04rMw&s" alt="">
                </div>
                <div class="col-md-4 col-lg-4 col-xl-2" style="text-align: center;">
                    <div class="row"><p>Co Host By </p></div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSRp9BP6UeQXXHERNZOTNFB-qw9KvT-akmCeQQh04rMw&s" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white">Copyright <a href="#"><i class="fas fa-copyright text-light me-2"></i><?php echo $result['nama'] ?> - Universitas Tarumanagara </a><?php echo date("Y"); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        
    </body>

</html>