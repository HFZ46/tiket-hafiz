<?php
session_start();
include "koneksi.php"; // Pastikan file koneksi.php sudah benar

// Ambil query pencarian dari parameter GET
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Persiapkan query pencarian menggunakan prepared statement untuk menghindari SQL injection
$sql = "SELECT * FROM film WHERE nama_film LIKE ? OR genre LIKE ?";
$stmt = mysqli_prepare($conn, $sql);

// Menambahkan tanda '%' untuk pencarian wildcard
$search_term = "%" . $query . "%";

// Mengikat parameter ke prepared statement
mysqli_stmt_bind_param($stmt, "ss", $search_term, $search_term);

// Menjalankan query
mysqli_stmt_execute($stmt);

// Mendapatkan hasil dari query
$result = mysqli_stmt_get_result($stmt);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Header Section Begin -->
    <?php include "component/navbar.php"; ?>
    <!-- Header End -->

    <!-- Search Results Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <!-- Produk (Kiri) -->
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="genre.php" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item clickable-container" data-id="<?php echo $row['id']; ?>">
                                        <div class="product__item__pic set-bg" data-setbg="<?php echo $row['poster']; ?>">
                                            <div class="ep"><?php echo $row['usia'] ?></div>
                                            <div class="comment"><i class="fa fa-comments"></i> <?php echo $row['Producer'] ?></div>
                                            <div class="view"><i class="fa fa-eye"></i> <?php echo $row['dimensi'] ?></div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li><?php echo $row['genre'] ?></li>
                                            </ul>
                                            <h5><?php echo $row['nama_film'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        </div>
                    </div>
                </div>
                <!-- 3D Viewer (Kanan) -->
             
        <!-- Tambahkan Library Model Viewer -->
        <script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script>

    </section>
    <!-- Search Results Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p>
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i>
                        by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form method="GET" action="search_results.php">
                <input type="text" name="query" placeholder="Search for films..."
                    value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>">
                <button type="submit">Search</button>
            </form>

        </div>
    </div>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>