<?php function draw_navbar() {
    /**
     * Draws navbar
     */
    ?>

<nav class="navbar navbar-expand-md navbar-dark bg-navbar">
  <div class="container-fluid">
    <!-- <a href="main.php"></a> -->
    <a class="navbar-brand" href="#">
        <img class="logo" src="./logo.svg" width="80" height="80">
        Tokyo Drift Auction House
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Explore Auctions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Create new auction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About / Contacts</a>
        </li>

      </ul>

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex">
            <li>
                <a class="nav-link left-vert-bar" href="#">Log in</a>
            </li>
            <li>
                <a class="nav-link" href="#">Sign up</a>
            </li>
        </ul>
    </div>
  </div>
</nav>

<?php } ?>