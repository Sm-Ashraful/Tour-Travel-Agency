<?php
$packages = array(
    array("name" => "Mumbai", "description" => "Description", "rating" => 4, "price" => "1200.00", "sale_price" => "980.00"),
    array("name" => "Hawaii", "description" => "Description", "rating" => 4, "price" => "1200.00", "sale_price" => "870.00"), array("name" => "Sydney", "description" => "Description", "rating" => 4, "price" => "1200.00", "sale_price" => "1000.00"), array("name" => "Paris", "description" => "Description", "rating" => 4, "price" => "1200.00", "sale_price" => "500.00"), array("name" => "Tokyo", "description" => "Description", "rating" => 4, "price" => "1200.00", "sale_price" => "300.00"), array("name" => "Egypt", "description" => "Description", "rating" => 4, "price" => "1200.00", "sale_price" => "200.00")
);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive tour and travel agency website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="" class="logo"><span>T</span>ravel</a>

        <!-- Navigation bar  -->
        <nav class="navbar">
            <a href="">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form class="login-form d-block" method="post" action="">
            <h3>login</h3>
            <input type="email" class="box" placeholder="enter your email">
            <input type="password" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have and account? <a href="javascript:void(0)" id="register-btn">register now</a></p>
        </form>

        <form class="registration-form d-none" method="post" action="">
            <h3>Registration</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
            ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                    </div>
                <?php
                }
            } else if (isset($_GET['joined'])) {
                ?>
                <div class="alert alert-info">
                    <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                </div>
            <?php
            }
            ?>
            <input type="First Name" class="box" placeholder="Enter your first name" name="first_name" value="<?php if (isset($error)) {
                                                                                                                    echo $firstName;
                                                                                                                } ?>" />
            <input type="Last Name" class="box" placeholder="Enter your last name" name="last_name" value="<?php if (isset($error)) {
                                                                                                                echo $lastName;
                                                                                                            } ?>" />
            <input type="email" class="box" placeholder="Enter your email" name="email" value="<?php if (isset($error)) {
                                                                                                    echo $email;
                                                                                                } ?>" />
            <input type="password" class="box" placeholder="Enter your password" name="password" value="<?php if (isset($error)) {
                                                                                                            echo $password;
                                                                                                        } ?>" />
            <input type="submit" value="sign up" class="btn" name="btn-signup">
            <p>Already have account? <a href="javascript:void(0)" id="login-now">log in now</a></p>
        </form>

    </div>

    <!-- Registration form container  -->
    <!-- <div class="login-form-container" id="registration-form">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>Registration</h3>
        <input type="First Name" class="box" placeholder="enter your first name">
        <input type="Last Name" class="box" placeholder="enter your last name">
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="sign up" class="btn">
        <p>Already have account? <a href="#">log in now</a></p>
    </form>

</div> -->


    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>dicover new places with us, adventure awaits</p>
            <a href="#packages" class="btn">discover more</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <h3>where to</h3>
                    <select required name="destination" id="destination" onchange="changeNumOfMember()">
                        <option value="" selected>Select Destination</option>
                        <?php foreach ($packages as $key => $package) { ?>
                            <option value="<?php echo $key; ?>"><?php echo $package["name"];
                                                                echo " ( Cost: $" . $package["sale_price"] . " )"; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" name="no_of_member" id="no_of_member" min="1" required placeholder="number of guests" onchange="changeNumOfMember()">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date" required name="arrival_date" id="arrival_date">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" required name="leaving_date" id="leaving_date">
                </div>
                <?php echo '<button type="button" class="btn" onclick="bookNowFromForm()">BOOK NOW</button>'; ?>
                <!-- <input type="submit" class="btn" value="book now"> -->
            </form>

        </div>

    </section>

    <!-- book section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">
            <?php foreach ($packages as $key => $package) { ?>
                <div class="box">
                    <img src="images/p-1.jpg" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"></i> <?php echo $package["name"] ?> </h3>
                        <p><?php echo $package["description"] ?></p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price"> $<?php echo $package["sale_price"] ?> <span style="text-decoration: line-through;"> $<?php echo $package["price"] ?></span> </div>
                        <?php echo '<a href="#book" class="btn" onclick="bookNowPackage(\'' . $key . '\')">BOOK NOW</a>'; ?>
                    </div>
                </div>

            <?php } ?>

        </div>

    </section>

    <!-- packages section ends -->


    <!-- payment method section starts -->

    <div class="payment-form-container">
        <i class="fas fa-times" id="payment-form-close"></i>
        <form action="./charge.php" method="post" id="payment-form">
            <h3 id="price"></h3>

            <div class="form-row">
                <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
                <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
                <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
                <input type="hidden" name="amount" id="amount" class="form-control mb-3 StripeElement StripeElement--empty" value="">
                <input type="hidden" name="description" id="description" class="form-control mb-3 StripeElement StripeElement--empty" value="">
                <input type="hidden" name="index" id="index" class="form-control mb-3 StripeElement StripeElement--empty" value="">
                <input type="hidden" name="destination" id="destinationValue" class="form-control mb-3 StripeElement StripeElement--empty" value="">
                <input type="hidden" name="no_of_member" id="member" class="form-control mb-3 StripeElement StripeElement--empty" value="">
                <input type="hidden" name="arrival_date" id="arrivalDate" class="form-control mb-3 StripeElement StripeElement--empty" value="">
                <input type="hidden" name="leaving_date" id="leavingDate" class="form-control mb-3 StripeElement StripeElement--empty" value="">
                <div id="card-element" class="form-control">
                    <!-- a Stripe Element will be inserted here. -->
                </div>
                <!-- Used to display form errors -->
                <div id="card-errors" role="alert"></div>
            </div>
            <button>Submit Payment</button>
        </form>
    </div>
    <!-- payment method section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <button onclick="openModal()" class="btn">See More</button>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->
    
    <!-- The Modal -->
    <div id="myModal" class="modal-custom">
        <!-- Modal content -->
        <div class="modal-content-custom">
            <div class="modal-header-custom">
                <span class="close">&times;</span>
                <h2>Album Photos</h2>
            </div>
            <div class="modal-body-custom gallery" style="height: 100%; overflow: auto;">
                <div class="box-container" style="padding-bottom: 70px;">

                    <div class="box">
                        <img src="images/g-1.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-2.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-3.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-4.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-5.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-6.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-7.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-8.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-9.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-7.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-8.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-9.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-7.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-8.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-9.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-7.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-8.jpg" alt="">
                    </div>
                    <div class="box">
                        <img src="images/g-9.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>

        <!-- review section starts  -->

        <section class="review" id="review">

            <h1 class="heading">
                <span>r</span>
                <span>e</span>
                <span>v</span>
                <span>i</span>
                <span>e</span>
                <span>w</span>
            </h1>

            <div class="swiper-container review-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="box">
                            <img src="images/pic1.png" alt="">
                            <h3>john deo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="images/pic2.png" alt="">
                            <h3>john deo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="images/pic3.png" alt="">
                            <h3>john deo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="box">
                            <img src="images/pic4.png" alt="">
                            <h3>john deo</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!-- review section ends -->

        <!-- contact section starts  -->

        <section class="contact" id="contact">

            <h1 class="heading">
                <span>c</span>
                <span>o</span>
                <span>n</span>
                <span>t</span>
                <span>a</span>
                <span>c</span>
                <span>t</span>
            </h1>

            <div class="row">

                <div class="image">
                    <img src="images/contact-img.svg" alt="">
                </div>

                <form action="./contact.php" method="post">
                    <div class="inputBox">
                        <input type="text" placeholder="Name" name="name" required>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="inputBox">
                        <input type="text" placeholder="Phone Number" name="phone" required>
                        <input type="text" placeholder="Subject" name="subject" required>
                    </div>
                    <textarea placeholder="message" name="message" id="" cols="30" rows="10" required></textarea>
                    <input type="submit" class="btn" value="send message">
                </form>

            </div>

        </section>

        <!-- contact section ends -->

        <!-- brand section  -->
        <section class="brand-container">

            <div class="swiper-container brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
                </div>
            </div>

        </section>

        <!-- footer section  -->

        <section class="footer">

            <div class="box-container">

                <div class="box">
                    <h3>about us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
                </div>
                <div class="box">
                    <h3>branch locations</h3>
                    <a href="#">india</a>
                    <a href="#">USA</a>
                    <a href="#">japan</a>
                    <a href="#">france</a>
                </div>
                <div class="box">
                    <h3>quick links</h3>
                    <a href="#">home</a>
                    <a href="#">book</a>
                    <a href="#">packages</a>
                    <a href="#">services</a>
                    <a href="#">gallery</a>
                    <a href="#">review</a>
                    <a href="#">contact</a>
                </div>
                <div class="box">
                    <h3>follow us</h3>
                    <a href="#">facebook</a>
                    <a href="#">instagram</a>
                    <a href="#">twitter</a>
                    <a href="#">linkedin</a>
                </div>

            </div>

            <h1 class="credit"> created by <span> iGenServer </span> | all rights reserved! </h1>

        </section>


        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="./js/charge.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            var packages = <?php echo json_encode($packages); ?>;

            function bookNowPackage(index) {
                document.getElementById('destination').value = index;
                document.getElementById('no_of_member').value = 1;
            }

            function bookNow(index) {
                document.getElementById('description').value = packages[index].destination;
                document.getElementById('index').value = index;
                document.getElementById('destinationValue').value = packages[index].name;
                document.getElementById('member').value = document.getElementById('no_of_member').value ? document.getElementById('no_of_member').value : 1;
                document.getElementById('arrivalDate').value = document.getElementById('arrival_date').value;
                document.getElementById('leavingDate').value = document.getElementById('leaving_date').value;
                const memberValue = document.getElementById('member').value;
                document.getElementById('price').innerHTML = "Amount: $" + packages[index].sale_price * memberValue;
                document.getElementById('amount').value = packages[index].sale_price * memberValue;


                paymentFormContainer.classList.add('active');
            }

            function bookNowFromForm() {
                let destination = document.getElementById('destination').value;
                let numOfMember = document.getElementById('no_of_member').value;
                let arrivalDate = document.getElementById('arrival_date').value;
                let leavingDate = document.getElementById('leaving_date').value;
                if (destination == "") {
                    alert("Destination field is required!");
                    return;
                } else if (numOfMember == "") {
                    alert("Number of guests field is required!");
                    return;
                } else if (arrivalDate == "") {
                    alert("Arrival date field is required!");
                    return;
                } else if (leavingDate == "") {
                    alert("Leaving date field is required!");
                    return;
                }
                bookNow(parseInt(destination));
            }

            function changeNumOfMember() {
                const newValue = document.getElementById('no_of_member').value;
                const desttinationValue = document.getElementById('destination').value;
                if (desttinationValue && newValue) {
                    const optionText = packages[desttinationValue].name + ' ( Cost: $' + (packages[desttinationValue].sale_price * newValue).toFixed(2) + ' )';
                    $('#destination').children(':selected').text(optionText);
                }
            }

        </script>

        <?php
        if (isset($_GET['tid'])) {
            $status = $_GET['tid'];
            if ($status != '') {
                echo "<script>swal('Congratulation!', 'Your payment is successfully!', 'success');</script>";
            }
        }
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
            if ($status != '' && $status == 'success') {
                echo "<script>swal('Thank You', 'We have got your message. We will contact you shortly.', 'success');</script>";
            }
            else {
                echo "<script>swal('Something Wrong !', 'Please try again.', 'error');</script>";
            }
        }
        ?>

</body>

</html>