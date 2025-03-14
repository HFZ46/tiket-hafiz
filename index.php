<?php
session_start();
include 'koneksi.php'; // Menghubungkan ke database

// Mengecek apakah koneksi berhasil
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil 10 film teratas berdasarkan jumlah transaksi
$sql = "
SELECT f.id, f.nama_film, f.poster, f.usia, COUNT(t.id) AS jumlah_transaksi
FROM film f
LEFT JOIN transactions t ON f.nama_film = t.nama_film
GROUP BY f.id, f.nama_film, f.poster, f.usia
ORDER BY jumlah_transaksi DESC
LIMIT 10
";
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
    <style>
        .hero__items::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3));
    z-index: 1;
}
.hero__text {
    position: relative;
    z-index: 2;
    color: #fff;
}

        .product__item {
            position: relative;
            overflow: hidden;
            transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
            border-radius: 10px;
        }

        .product__item:hover {
            transform: translateY(-8px) rotate(1deg);
            box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.4);
        }

        .product__item__pic {
            position: relative;
            overflow: hidden;
            transition: transform 0.4s ease-in-out, filter 0.4s ease-in-out;
        }

        .product__item:hover .product__item__pic {
            transform: scale(1.15) rotate(-1deg);
            filter: brightness(1.1);
        }

        /* Efek cahaya mengkilap */
        .product__item__pic::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.1));
            transform: skewX(-20deg);
            transition: left 0.6s ease-in-out;
        }

        .product__item:hover .product__item__pic::after {
            left: 100%;
        }

        .hero__items {
            position: relative;
            overflow: hidden;
            transform: translateY(50px);
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
            transition: transform 0.3s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hover Effect */
        .hero__items:hover {
            transform: scale(1.05);
        }

        /* Text Animation */
        .hero__text {
            opacity: 0;
            transform: translateY(20px);
            animation: textFadeIn 1s ease-out forwards 0.5s;
        }

        @keyframes textFadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero__slider .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            opacity: 0;
            /* Awalnya disembunyikan */
            transition: opacity 0.3s ease-in-out;
        }

        .hero__slider:hover .owl-nav {
            opacity: 1;
            /* Muncul saat hover */
        }

        .hero__slider .owl-nav button {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 24px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: background 0.3s ease-in-out;
        }

        .hero__slider .owl-nav button:hover {
            background: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>

<body>
    
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include "component/navbar.php" ?>
    <!-- Header End -->
    <!-- Hero Section End -->
    <br>
    <br>
    <?php include 'koneksi.php';
    $sql = "SELECT * FROM film ORDER BY id ASC";
    $result = $conn->query($sql);
    ?>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="hero__items set-bg" data-setbg="<?php echo $row['banner']; ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">

                                    <h2></h2>
                                    <p></p>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>

            </div>
        </div>
    </section>
    <?php include 'koneksi.php';
    $sql = "SELECT * FROM film ORDER BY id ASC";
    $result = $conn->query($sql);
    ?>
    <!-- Product Section Begin -->
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



    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.php">home</a></li>
                            <li><a href="./blog.php">upcoming</a></li>
                            <li><a href="./categories.php">genre</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form method="GET" action="search_results.php">
                <input type="text" name="query" placeholder="Search for film..."
                    value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>">
                <button type="submit">Search</button>
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.clickable-container').forEach(container => {
                container.addEventListener('click', function() {
                    let filmId = this.getAttribute('data-id');
                    window.location.href = 'film.php?id=' + filmId;
                });
            });
        });
    </script>

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