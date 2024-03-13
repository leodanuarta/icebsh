<?php
    include 'database/conn.php';
    // $host = "127.0.0.1";
    // $user = "root";
    // $pass = "";
    // $db = "icebsh";
    // $conn = mysqli_connect($host,$user,$pass,$db);

    $qry = "SELECT * FROM m_info";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title><?php echo $result['nama'] ?></title>
        <link rel="icon" type="image/x-icon" href="./<?php echo $result['img_header'] ?>">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                        <img src="./<?php echo $result['img_header'] ?>" alt="Logo">
                        <!-- <h1 class="text-primary m-0"><?php echo $result['nama'] ?></h1> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- query untuk menampilkan nama menu dari db -->
                <?php
                    include('./database/conn.php');

                    $qry = "SELECT * FROM m_menu_nav";
                    $result = mysqli_query($conn, $qry);
                    
                    // Set judul halaman
                    if($result){
                        $row = mysqli_fetch_array($result);
                            $menu1 = $row["menu1"];
                            $menu2 = $row["menu2"];
                            $menu3 = $row["menu3"];
                            $menu4 = $row["menu4"];
                            $menu5 = $row["menu5"];
                            $menu6 = $row["menu6"];
                        
                    }
                    // Tutup koneksi
                    $conn->close();
                ?>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?=($activepage=='index'?"active":"")?>"><?php echo $menu1 ?></a>
                        <a href="callforpaper.php" class="nav-item nav-link <?=($activepage=='cop'?"active":"")?>"><?php echo $menu3 ?></a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.php" class="dropdown-item">Appointment</a>
                                <a href="feature.php" class="dropdown-item">Features</a>
                                <a href="blog.php" class="dropdown-item">Our Blog</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="submission.php" class="nav-item nav-link <?=($activepage=='submission'?"active":"")?>"><?php echo $menu4 ?></a>
                        <a href="committee.php" class="nav-item nav-link <?=($activepage=='committee'?"active":"")?>">COMMITTEE</a>

                        <a href="contact.php" class="nav-item nav-link <?=($activepage=='contact'?"active":"")?>">CONTACT</a>
                    </div>
                    <button style="border: none; background-color: #fffff; color:#fffff; cursor: not-allowed; pointer-events: none; opacity: 0.6;" disabled="" ><a href="#" style="" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0" aria-disabled><?php echo $menu6 ?></a></button>
                </div>
            </nav>