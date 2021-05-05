<?php function draw_navbar() {
    /**
     * Draws navbar
     */
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tokyo Drift Auction House</title>
  <link rel="shortcut icon" href="../logo.svg">
  
  <!-- Bootstrap responsiveness in mobile -->
  <!-- https://getbootstrap.com/docs/3.4/css/ -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/2fb51e88be.js" crossorigin="anonymous"></script>
  
  <script src="../js/tpl_search.js"></script>
  <script src="../js/login.js"></script>
  <script src="../js/sign-in.js"></script>
  <script src="../js/create_auction.js"></script>

  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/homepage.css">
  <link rel="stylesheet" href="../css/tpl_navbar.css">
  <link rel="stylesheet" href="../css/tpl_footer.css">
  <link rel="stylesheet" href="../css/tpl_search.css">
  <link rel="stylesheet" href="../css/tpl_auction_card.css">
  <link rel="stylesheet" href="../css/auction.css">
  <link rel="stylesheet" href="../css/tpl_mod.css">
  <link rel="stylesheet" href="../css/login-overlay.css">
  <link rel="stylesheet" href="../css/sign-up.css">
  <link rel="stylesheet" href="../css/profile.css">
  <link rel="stylesheet" href="../css/create_auction.css">
  <link rel="stylesheet" href="../css/tpl_tos.css">


</head>
<body>
<header>
  <nav class="navbar navbar-expand-xxl navbar-dark bg-navbar">
  <div class="container-fluid">
    <!-- <a href="main.php"></a> -->
    <a class="navbar-brand text-white navbar-content-bold nav-link" href="../pages/homepage.php">
      <img class="logo filter-logo" src="../logo.svg" width="80" height="80">
      <div class="d-none d-sm-inline"> Tokyo Drift Auction House</div>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
          <li class="nav-item dropdown">
            <a class="nav-link text-white navbar-content-bold rounded-pill dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown">Explore By Category</a>
            <ul class="dropdown-menu dropdown-menu-dark ps-3 pb-4 pe-3 pt-2" data-hover="dropdown">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <li><span class="dropdown-header fs-3 ps-3">Trending Categories</span></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item fs-3 text-decoration-underline" href="../pages/search.php"><b>Sports</b></a></li>
                  <li><a class="dropdown-item fs-3 text-decoration-underline" href="../pages/search.php"><b>Family</b></a></li>
                  <li><a class="dropdown-item fs-3 text-decoration-underline" href="../pages/search.php"><b>Budget</b></a></li>
                </div>
                <div class="col-12 col-sm-8">
                  <li><span class="dropdown-header fs-3 ps-3">Most Sold Brands</span></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item fs-5" href="../pages/search.php"><b><i>Ferrari</i></b></a></li>
                  <li><a class="dropdown-item fs-5" href="../pages/search.php"><b><i>Lada</i></b></a></li>
                  <li><a class="dropdown-item fs-5" href="../pages/search.php"><b><i>Mercedes</i></b></a></li>
                  <li><a class="dropdown-item fs-5" href="../pages/search.php"><b><i>Volkswagen</i></b></a></li>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white navbar-content-bold rounded-pill" href="../pages/create_auction.php">Create new auction</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li>
            <a type="button" class="nav-link btn text-white navbar-content-bold rounded-pill text-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Log in</a>
          </li>
          <span class="left-vert-bar"></span>
          <li>
            <a class="nav-link text-white navbar-content-bold rounded-pill" href="../pages/sign-up.php">Sign up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<?php

include_once("../pages/login-overlay.php");
draw_login();
}

?>

<?php function draw_navbar_logged_in() {
    /**
     * Draws navbar
     */
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tokyo Drift Auction House</title>
  <link rel="shortcut icon" href="../logo.svg">
  
  <!-- Bootstrap responsiveness in mobile -->
  <!-- https://getbootstrap.com/docs/3.4/css/ -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/2fb51e88be.js" crossorigin="anonymous"></script>
  
  <script src="../js/tpl_search.js"></script>
  <script src="../js/login.js"></script>
  <script src="../js/sign-in.js"></script>
  <script src="../js/create_auction.js"></script>

  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/homepage.css">
  <link rel="stylesheet" href="../css/tpl_navbar.css">
  <link rel="stylesheet" href="../css/tpl_footer.css">
  <link rel="stylesheet" href="../css/tpl_search.css">
  <link rel="stylesheet" href="../css/tpl_auction_card.css">
  <link rel="stylesheet" href="../css/auction.css">
  <link rel="stylesheet" href="../css/tpl_mod.css">
  <link rel="stylesheet" href="../css/login-overlay.css">
  <link rel="stylesheet" href="../css/sign-up.css">
  <link rel="stylesheet" href="../css/profile.css">
  <link rel="stylesheet" href="../css/create_auction.css">


</head>
<body>
<header>
  <nav class="navbar navbar-expand-xxl navbar-dark bg-navbar">
  <div class="container-fluid">
    <!-- <a href="main.php"></a> -->
    <a class="navbar-brand text-white navbar-content-bold nav-link" href="../pages/homepage.php">
      <img class="logo filter-logo" src="../logo.svg" width="80" height="80">
      <div class="d-none d-sm-inline"> Tokyo Drift Auction House</div>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
          <li class="nav-item dropdown">
            <a class="nav-link text-white navbar-content-bold rounded-pill dropdown-toggle" aria-current="page" href="#" data-bs-toggle="dropdown">Explore By Category</a>
            <ul class="dropdown-menu dropdown-menu-dark ps-3 pb-4 pe-3 pt-2" data-hover="dropdown">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <li><span class="dropdown-header fs-3 ps-3">Trending Categories</span></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item fs-3 text-decoration-underline" href="../pages/search.php"><b>Sports</b></a></li>
                  <li><a class="dropdown-item fs-3 text-decoration-underline" href="../pages/search.php"><b>Family</b></a></li>
                  <li><a class="dropdown-item fs-3 text-decoration-underline" href="../pages/search.php"><b>Budget</b></a></li>
                </div>
                <div class="col-12 col-sm-8">
                  <li><span class="dropdown-header fs-3 ps-3">Most Sold Brands</span></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item fs-5" href="../pages/search.php"><b><i>Ferrari</i></b></a></li>
                  <li><a class="dropdown-item fs-5" href="../pages/search.php"><b><i>Lada</i></b></a></li>
                  <li><a class="dropdown-item fs-5" href="../pages/search.php"><b><i>Mercedes</i></b></a></li>
                  <li><a class="dropdown-item fs-5" href="../pages/search.php"><b><i>Volkswagen</i></b></a></li>
                </div>
              </div>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white navbar-content-bold rounded-pill" href="../pages/create_auction.php">Create new auction</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li>
            <a class="nav-link text-white navbar-content-bold rounded-pill" href="../pages/profile.php"><i class="fas fa-user-alt me-3"></i>greenOlives24</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<?php } ?>