<?php
include 'koneksi.php'; // Menghubungkan ke database
// Ambil tanggal hari ini dalam format YYYY-MM-DD
$tanggal_hari_ini = date('Y-m-d');
// Query untuk mengambil film yang akan tayang (tanggal tayang belum lewat dan tidak termasuk hari ini)
$sql = "SELECT f.id, f.nama_film, f.banner, f.usia, MIN(j.tanggal_tayang) AS
tanggal_tayang
FROM film f
INNER JOIN jadwal_film j ON f.id = j.film_id
WHERE j.tanggal_tayang > ? -- Hanya ambil film dengan tanggal lebih 
besar dari hari ini
GROUP BY f.id, f.nama_film, f.banner, f.usia
ORDER BY tanggal_tayang ASC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tanggal_hari_ini);
$stmt->execute();
$result = $stmt->get_result();
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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include "component/navbar.php"; ?>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Upcoming</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/blog/blog-1.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/blog/blog-4.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Bok no Hero Academia Season 4 – 18</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/blog/blog-5.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/blog/blog-7.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Housekishou Richard shi no Nazo Kantei Season 08 - 20</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/blog/blog-10.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/blog/blog-11.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Building a Better LiA Drilling Down</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/blog/blog-2.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/blog/blog-3.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Building a Better LiA Drilling Down</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/blog/blog-6.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/blog/blog-8.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Bok no Hero Academia Season 4 – 18</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="img/blog/blog-9.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="img/blog/blog-12.jpg">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                  </div>
              </div>
          </div>
      </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

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