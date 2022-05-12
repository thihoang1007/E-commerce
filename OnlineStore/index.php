<?php
session_start();
include("scripts/functions.php");
include("common/document-head.html");
include("scripts/connectToDatabase.php");
?>

<body>
    <script src="script.js"></script>


    <?php
    include("common/nav-bar.php");
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="asset/slider1.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block w-50 ml-auto mr-auto">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="asset/slider1.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block w-50 ml-auto mr-auto">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="asset/slider2.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block w-50 ml-auto mr-auto">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="py-5">
        <div class="partner">
            <h2>Our Collections</h2>
        </div>

        <div class="button-group filter-button-group">
            <div class="d-flex flex-wrap justify-content-center filter-button-group">
                <button type="button" class="btn m-2 text-dark" data-filter="*">All</button>
                <button type="button" class="btn m-2 text-dark" data-filter=".best">Best Sellers</button>
                <button type="button" class="btn m-2 text-dark" data-filter=".new-arrival">New Arrivals</button>
                <button type="button" class="btn m-2 text-dark" data-filter=".clearance">Clearances</button>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" id="product-list">
                <div class="col-md-6 col-lg-3 col-xl-3 p-4 best">
                    <div class="image position-relative d-flex">
                        <img src="asset/chair1.jpg " class="img-fluid d-block mx-auto">
                    </div>
                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star "></i></span>
                            <span class=" "><i class="fas fa-star "></i></span>
                            <span class=" "><i class="fas fa-star "></i></span>
                        </div>
                        <p class="sale-price m-0 "> Chair</p>
                        <div class="sale-price p-0 "> $300</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 p-4 new-arrival">
                    <div class="image position-relative d-flex">
                        <img src="asset/office.webp " class="img-fluid d-block mx-auto">
                    </div>
                    <div class="image2 ">
                        <span class="sale-off ">new</span>
                    </div>
                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                        </div>
                        <p class="sale-price m-0 "> Office Chair</p>
                        <div class="sale-price p-0 "> $300</div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 col-xl-3 p-4 clearance">
                    <div class="image position-relative d-flex">
                        <img src="asset/clock.jpg " class="img-fluid d-block mx-auto">
                    </div>
                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                        </div>
                        <p class="sale-price m-0 "> Clock</p>
                        <div class="sale-price p-0 "> $140</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 p-4 clearance">
                    <div class="image position-relative d-flex">
                        <img src="asset/nightlamp.jpg " class="img-fluid d-block mx-auto">
                    </div>


                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                        </div>
                        <p class="sale-price m-0 "> Item</p>
                        <div class="sale-price p-0 "> $300</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 p-4 best">
                    <div class="image position-relative d-flex">
                        <img src="asset/studyLamp.webp " class="img-fluid d-block mx-auto">
                    </div>
                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star"></i></span>
                        </div>
                        <p class="sale-price m-0 "> Study Lamp</p>
                        <div class="sale-price p-0 "> $40</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 p-4 new-arrival">
                    <div class="image position-relative d-flex">
                        <img src="asset/bottle.webp " class="img-fluid d-block mx-auto">
                    </div>
                    <div class="image2 ">
                        <span class="sale-off ">new</span>
                    </div>
                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star checked"></i></span>
                        </div>
                        <p class="sale-price m-0 "> Bottle</p>
                        <div class="sale-price p-0 "> $50</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 p-4 clearance">
                    <div class="image position-relative d-flex">
                        <img src="asset/chair1.jpg " class="img-fluid d-block mx-auto">
                    </div>
                    <div class="image1 ">
                        <span class="sale-off ">-10%</span>
                    </div>
                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked "></i></span>
                        </div>
                        <p class="sale-price m-0 "> Chair</p>
                        <div class="sale-price p-0 "> $270.00 <span>$300</span></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 p-4 new-arrival">
                    <div class="image position-relative d-flex">
                        <img src="asset/clock.jpg " class="img-fluid d-block mx-auto">
                    </div>
                    <div class="image2 ">
                        <span class="sale-off ">new</span>
                    </div>
                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked"></i></span>
                            <span class=" "><i class="fas fa-star "></i></span>
                            <span class=" "><i class="fas fa-star "></i></span>
                            <span class=" "><i class="fas fa-star "></i></span>
                            <span class=" "><i class="fas fa-star "></i></span>
                        </div>
                        <p class="sale-price m-0 "> Clock</p>
                        <div class="sale-price p-0 "> $300</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 p-4 clearance">
                    <div class="image position-relative d-flex">
                        <img src="asset/chair1.jpg " class="img-fluid d-block mx-auto">
                    </div>
                    <div class="image1 ">
                        <span class="sale-off ">-25%</span>
                    </div>
                    <div class="description ">
                        <div class="rating ">
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked "></i></span>
                            <span class=" "><i class="fas fa-star checked "></i></span>
                        </div>
                        <p class="sale-price m-0 "> Chair</p>
                        <div class="sale-price p-0 "> $225.00 <span>$300</span></div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <div class="partner ">
        <h2>Feature products</h2>
    </div>

    <div class="product ">
        <div class="row ">
            <div class="product-header ">
                <img src="asset/desk.jpg ">
            </div>
            <div class="product-header ">
                <img src="asset/lamp.jpg ">
            </div>
            <div class="product-header ">
                <img src="asset/desk.jpg ">
            </div>
        </div>
    </div>

    <div class="partner ">
        <h2>Sponsored</h2>
    </div>
    <div class="row ">
        <div class="column ">
            <img src="asset/brand.png " alt="Snow " style="width:100% ">
        </div>
        <div class="column ">
            <img src="asset/brand1.png " alt="Forest " style="width:100% ">
        </div>
        <div class="column ">
            <img src="asset/brand2.png " alt="Mountains " style="width:100% ">
        </div>
        <div class="column ">
            <img src="asset/brand3.png " alt="Mountains " style="width:100% ">
        </div>
        <div class="column ">
            <img src="asset/brand4.png " alt="Mountains " style="width:100% ">
        </div>
        <div class="column ">
            <img src="asset/brand5.png " alt="Mountains " style="width:100% ">
        </div>
    </div>

    <div class="partner ">
        <h2>Reviews</h2>
    </div>
    <section class="testimonials ">
        <div class="testi ">
            <p>Here is what customers talk about our products</p>
            <div class="row ">
                <div class="col-md-4 text-center ">
                    <div class="profile ">
                        <img src="asset/chair.jpg " class="user ">
                        <blockquote>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium similique, molestiae voluptates laudantium nihil dolorem soluta. Alias magnam corporis possimus assumenda at. Doloremque magnam architecto quos consectetur consequuntur
                            assumenda neque!</blockquote>
                        <h3>User 1</h3>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star "></i></span>
                    </div>
                </div>
                <div class="col-md-4 text-center ">
                    <div class="profile ">
                        <img src="asset/chair.jpg " class="user ">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptate fuga ipsum explicabo accusantium numquam ex officiis dolorem excepturi doloremque. Delectus, nostrum. Amet nobis ducimus aliquid necessitatibus repudiandae
                            dignissimos veniam.</blockquote>
                        <h3>User 1</h3>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star "></i></span>

                    </div>
                </div>
                <div class="col-md-4 text-center ">
                    <div class="profile ">
                        <img src="asset/chair.jpg " class="user ">
                        <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat obcaecati eligendi voluptas officia incidunt accusantium possimus ipsum. Molestias, esse veniam corporis ut, aut perspiciatis cumque, ratione repellendus numquam recusandae
                            modi!
                        </blockquote>
                        <h3>User 1</h3>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star checked "></i></span>
                        <span class=" "><i class="fas fa-star "></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include("common/footer.html");
    ?>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
</body>

</html>