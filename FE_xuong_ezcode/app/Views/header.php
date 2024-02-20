<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Esigned</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="public/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="public/css/responsive.css" rel="stylesheet" />

</head>

<body <?php if ($_SERVER['REQUEST_URI'] != "/FE_xuong_ezcode/index.php") echo 'class="sub_page"'; ?>>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="/FE_xuong_ezcode/index.php">
            <span>
              Esigned
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/FE_xuong_ezcode/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/FE_xuong_ezcode/?lo_trinh_hoc"> Lộ Trình Học </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/FE_xuong_ezcode/?khoa_hoc"> Khóa Học </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Liên Hệ</a>
                </li>
              </ul>
              <?php
              if (isset($_SESSION['user'])) {
                require 'modal_account.php';
              } else {
                echo '
              <a href="/FE_xuong_ezcode/?login">
                <img src="public/images/user.png" alt="">
              </a>
                ';
              }

              ?>
              <!-- <div class="user_option"> -->
              <!-- <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form> -->
              <!-- </div> -->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <?php if ($_SERVER['REQUEST_URI'] != "/FE_xuong_ezcode/index.php") echo '</div>'; ?>