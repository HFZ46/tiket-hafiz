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
.table th {
        background-color: #333; /* Anda bisa mengubah ini jika ingin mengganti warna header tabel */
        color: #fff; /* Warna teks di header tabel */
    }
    
    /* Ganti warna latar belakang tabel menjadi putih */
    .table {
        background-color: #ffffff; /* Latar belakang tabel menjadi putih */
    }
    
    /* Ganti warna teks di semua kolom menjadi orange */
    .table td, .table th {
        color: #f39c12; /* Warna teks orange */
    }
    
    /* Ganti warna latar belakang baris */
    .table tbody tr {
        background-color: #ffffff; /* Latar belakang baris menjadi putih */
    }
    
    /* Warna latar belakang baris saat hover */
    .table tbody tr:hover {
        background-color: #f0f0f0; /* Warna saat hover (pilihan) */
    }
    </style>
    

       
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
   <!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Anime Theaters in Malls</h2>
                    <p>Find the best malls that feature anime screenings!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Mall Section Begin -->
<?php
    include 'koneksi.php';

    $sql = "SELECT * FROM akun_mall ORDER BY id ASC";
    $result = $conn->query($sql);
    ?>

    <div class="container" style="margin-top: 20px;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
            <tr>
    <th style="border: 1px solid #ddd; padding: 10px; text-align: left; background-color: #FFD700; color: black;">No</th>
    <th style="border: 1px solid #ddd; padding: 10px; text-align: left; background-color: #FFD700; color: black;">Nama Bioskop</th>
</tr>

            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr style='background-color: #f9f9f9;'>";
                        echo "<td style='border: 1px solid #ddd; padding: 10px;'>$no</td>";
                        echo "<td style='border: 1px solid #ddd; padding: 10px;'>{$row['nama_mall']}</td>";
                        echo "</tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='2' style='border: 1px solid #ddd; padding: 10px; text-align: center;'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
<!-- Mall Section End -->

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