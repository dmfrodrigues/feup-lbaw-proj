<!-- Navbar -->
<?php
    include_once("templates/tpl_navbar.php");
    include_once("templates/tpl_footer.php");

    draw_navbar();
?>

<!-- Top Bar with car details -->
<div class="container-fluid car-details">
    <div class="row align-items-center">

        <!-- Pictures Carrousel -->
        <div class="col-lg m-5" id="under_heart">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.automaistv.com.br/wp-content/uploads/2019/04/bmw_i8_roadster_34-990x660.jpg" class="d-block w-100" alt="bmw i8">
                    </div>
                    <div class="carousel-item">
                        <img src="https://s3.observador.pt/wp-content/uploads/2020/03/11202440/bmw_i8_roadster_619.jpg" class="d-block w-100" alt="bmw i8">
                    </div>
                    <div class="carousel-item center-cropped">
                        <img src="https://www.wattson.pt/wp-content/uploads/2019/02/P90301923_highRes_bmw-i8-roadster-04-2.jpg" class="d-block w-100" alt="bmw i8">
                    </div>
                    <div class="carousel-item center-cropped">
                        <img src="https://garagem360.com.br/wp-content/uploads/2019/04/P90285395_highRes_the-new-bmw-i8-roads-1.jpg" class="d-block w-100" alt="bmw i8">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <a href=# class="heart">
                <i class="fa fa-heart"></i>
            </a>
        </div>

        <!-- Car Info -->
        <div class="col-lg text-nowrap">
            <h1>2020' BMW i8</h1>
            <div class="row align-items-center m-3">
                <div class="col">
                    <h2>BMW</h2>
                    <h4>2020</h4>
                </div>
                <div class="col">
                    <h2>i8 Coupé</h2>
                    <h4>374 hp</h4>
                </div>
                <div class="col fire-text d-flex align-items-center justify-content-center" style="font-size: 4rem;">
                    <i class="fa fa-fire m-3"></i>
                    <h4 class="mb-0">MINT</h4>
                </div>
            </div>
            <div class="row align-items-center m-3 text-center">
                <div class="col">
                    <p>Started at:</p>
                    <h6>16h00</h6>
                    <h6>02.03.2021</h6>
                </div>
                <div class="col">
                    <p>Ends at:</p>
                    <h6>16h00</h6>
                    <h6>07.03.2021</h6>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="auction_content">
<!-- Current Bid info -->
<div class="container pt-5" id="auction_content_area">
    <div class="row align-items-center justify-content-around">
        <div class="col-sm mt-3 mb-3">
            <h2>Owner</h2>
            <a href="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="profile_text">
                <img src="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="rounded-circle profile_picture mt-3" alt="Hanna Green"> 
                <h4 class="m-0">Hanna Green</h4>
            </a>
        </div>
        <div class="col-sm mt-3 mb-3">
            <h2>Current Bid</h2>
            <h1 class="current_bid mt-3">200000€</h1>
        </div>
        <div class="col-sm mt-3 mb-3">
            <h2>Bidder</h2>
            <a href="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="profile_text">
                <img src="https://sunrift.com/wp-content/uploads/2014/12/Blake-profile-photo-square.jpg" class="rounded-circle profile_picture mt-3" alt="Hank Geller"> 
                <h4 class="m-0">Hank Geller</h4>
            </a>
        </div>
    </div>
</div>

<!-- Place Bid -->
<div class="container mt-5" id="auction_content_area">
    <form>
        <div class="row align-items-center">
            <div class="col-sm">
                <div class="input-group">
                    <input type="number" min="0.00" step="1" value="205000" class="form-control" id="bid_input" placeholder="Your Bid">
                        <div class="input-group-append">
                            <span class="input-group-text append_box" id="bid_input_box">€</span>
                        </div>
                    </div>

            </div>
            <div class="col-sm p-0 mt-3 mb-3">
                <button type="submit" class="btn rounded-pill" id="bid_button"><h2 class="m-0 p-2">PLACE BID</h2></button>
            </div>
        </div>
    </form>
</div>

<!-- Countdown -->
<div class="container mt-5" id="auction_content_area">
    <div class="d-flex flex-row justify-content-around align-items-center text-center">
        <div class>
            <div class="countdown_box">
                <h1 class="display-1 m-0">4</h1>
            </div>
            <h4>Days</h4>
        </div>
        <div>
            <div class="countdown_box">
                <h1  class="display-1 m-0">14</h1>
            </div>
            <h4>Hours</h4>
        </div>
        <div>
            <div class="countdown_box">
                <h1  class="display-1 m-0">35</h1>
            </div>
            <h4>Minutes</h4>
        </div>
        <div>
            <div class="countdown_box">
                <h1  class="display-1 m-0">23</h1>
            </div>
            <h4>Seconds</h4>
        </div>
    </div>
    <h4 class="text-center mt-2">Till Auction Begins</h4>
</div>

<!-- Comment Section -->

<div class="container-fluid p-0 mt-5 mb-5" id="comment_section">
    
    <!-- Place Comment -->
    <div class="comment m-5 p-2 clearfix">
        <form>
            <!-- User and date -->
            <a href="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="profile_text">
                <div class="d-flex justify-content-start align-items-center">
                    <img src="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="rounded-circle profile_picture_comment m-3" alt="Hanna Green"> 
                    <div class="m-3">
                        <h6 class="m-0">Hanna Green</h6>
                    </div>
                </div>
            </a>
            <div class="m-3 mt-0">
                <textarea class="form-control text-justify" id="comment_input" rows="3" placeholder="Insert your comment here."></textarea>
            </div>
            <button type="submit" class="btn m-3 mt-0 float-end" id="comment_button">COMMENT</button>
        </form>
    </div>

    <!-- Comment for moderator -->
    <div class="comment m-5 p-2 clearfix">
        <!-- User and date -->
        
            <div class="d-flex justify-content-between align-items-center">
                <a href="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="profile_text">
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="rounded-circle profile_picture_comment m-3" alt="Hanna Green"> 
                        <div class="m-3">
                            <h6 class="m-0">Hanna Green</h6>
                            <p class="m-0">15h47 - 23.02.2021</p>
                        </div>
                    </div>
                </a>
                <div class="moderator area m-3">
                    <button type="button" class="btn" id="moderator_button">Ban From Auction</button>
                    <button type="button" class="btn" id="moderator_button">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </div>
        <p class="m-3 mt-0 text-justify">This car is really amazing! I had so much fun with! Unfortunately is time to get the 2021 so I need to get rid of this one so I'll have space on my garage! Let the best bid win!<p>
    </div>

    <div class="comment m-5 p-2 clearfix">
        <!-- User and date -->
        
            <div class="d-flex justify-content-between align-items-center">
                <a href="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="profile_text">
                    <div class="d-flex justify-content-start align-items-center">
                        <img src="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" class="rounded-circle profile_picture_comment m-3" alt="Hanna Green"> 
                        <div class="m-3">
                            <h6 class="m-0">Hanna Green</h6>
                            <p class="m-0">15h47 - 23.02.2021</p>
                        </div>
                    </div>
                </a>
                <div class="moderator area m-3 d-none">
                    <button type="button" class="btn moderator_button">Ban From Auction</button>
                    <button type="button" class="btn moderator_button">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </div>
        <p class="m-3 mt-0 text-justify">This is just an example of what the comment would look if I'm not a moderator.<p>
    </div>
        
</div>
</div>

<!-- Chat Button -->
<a href="#" class="chat_button">
    <i class="fa fa-comments chat_icon"></i>
</a>

<!-- Footer -->
<?php
    draw_footer();
?>