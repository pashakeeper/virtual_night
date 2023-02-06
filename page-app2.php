<?php
/*
* Template Name: App2
* description: >-
Page template without sidebar
*/

get_header();




?>



<div id="app">

    <div id="header">
        <div class="container">
            <div class="row">
                <a href="/" id="logo"><img src="../app/assets/logo.svg" alt="" /></a>

                <div id="account" class="guest">
                    <?php
                    if (is_user_logged_in()) {
                        ?>
                    <?php } else { ?>
                        <button class="btn dark" id="login" type="button" onclick="popup_show('login')">Login</button>
                        <button class="btn basic" id="register" type="button" onclick="popup_show('register')">Join
                            Now</button>
                    <?php } ?>





                    <div class="btn balance" id="balance" type="button">
                        <img src="../app/assets/ui--icon-plus.png" alt="" />
                        <span class="amount">2534,00</span>
                        <span class="currency">VNOC</span>
                    </div>

                    <div id="btn-avatar" onclick="dropdown('')">
                        <img class="avatar" src="../app/assets/ui--avatar.png" alt="" />
                        <div id="dropdown"></div>
                    </div>

                    <div id="avatar-dropdown">

                        <div class="dropdown-user_info">
                            <img class="avatar" src="../app/assets/ui--avatar.png" alt="" />
                            <div class="balance">
                                <span class="amount">285.000</span>
                                <span class="currency">Credits</span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="dropdown-menu">
                            <ul>
                                <li onclick="popup_show('tiers');dropdown()">Buy more credits</li>
                                <li onclick="popup_show('faq')">Support</li>
                                <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                            </ul>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <img class="sample_logo" src="../app/assets/sample-logo.svg" alt="" />
    </div> <!-- header -->

    <div id="main">

        <!-- fist block -->
        <div class="first_block">
            <div class="container">
                <?php
                if (is_user_logged_in()) {
                    ?>
                    <h1>Lorem ipsum dolor sit amet, <br> consetetur.</h1>
                    <button class="btn basic" id="login" type="button" onclick="openTour()">Start watching now!</button>
                <?php } else { ?>
                    <h1>WORLD FIRST AND <br>
                        BEST VR EXPERIENCE</h1>
                    <button class="btn basic" id="login" type="button" onclick="popup_show('login')">Login</button>
                <?php } ?>





            </div>
        </div>
        <!-- first block -->



        <?php
        if (is_user_logged_in()) { ?>
            <!-- second block logged -->

            <div class="second_block__coins">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <h2>Just for you!</h2>
                            <div class="countdown"></div>
                        </div>
                        <div class="col-4">
                            <div class="coin_box">
                                <p class="coin_box__title">Buy 500 <span>VNOC</span></p>
                                <p class="coin_box__price">$20.00</p>
                                <p class="coin_box__old_price">$50.00</p>
                                <a href="#" class="coin_box__button">BUY NOW</a>
                                <img src="../app/assets/coin1.png" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="coin_box">
                                <p class="coin_box__title">Buy 800 <span>VNOC</span></p>
                                <p class="coin_box__price">$50.00</p>
                                <p class="coin_box__old_price">$80.00</p>
                                <a href="#" class="coin_box__button">BUY NOW</a>
                                <img src="../app/assets/coin2.png" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="coin_box">
                                <p class="coin_box__title">Buy 1.000 <span>VNOC</span></p>
                                <p class="coin_box__price">$80.00</p>
                                <p class="coin_box__old_price">$100.00</p>
                                <a href="#" class="coin_box__button">BUY NOW</a>
                                <img src="../app/assets/coin3.png" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="coin_box">
                                <p class="coin_box__title">Buy More</p>
                                <p class="coin_box__price">VNOC</p>
                                <a href="#" class="coin_box__button">BUY NOW</a>
                                <img src="../app/assets/coin4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- second block logged -->
        <?php } else { ?>
            <!-- second block -->
            <div class="second_block">
                <div class="container">
                    <div class="row">
                        <div id="payment">
                            <button class="btn cta basic" id="topup" onclick="popup_show('tiers')">Buy credits</button>
                            <div class="payment-methods">
                                <img src="../app/assets/ui--card-PayPal.png" alt="" class="payment">
                                <img src="../app/assets/ui--card-Visa.png" alt="" class="payment">
                                <img src="../app/assets/ui--card-MasterCard.png" alt="" class="payment">
                                <img src="../app/assets/ui--card-AmericanExpress.png" alt="" class="payment">
                            </div>
                        </div>
                        <img src="../app/assets/coins.png" alt="" class="coins">
                    </div>
                </div>
            </div>
            <!-- second block -->
        <?php } ?>






        <?php if (is_user_logged_in()) { ?>

            <!-- third block logged -->
            <div class="third_block logged">
                <div class="slider">
                    <div class="slide">
                        <div class="container">
                            <h3>Lorem ipsum <br> dolor sit amet, <br> consetetur.</h3>
                            <button class="btn basic" type="button" onclick="openTour()">Start watching now!</button>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="container">
                            <h3>Lorem ipsum <br> dolor sit amet, <br> consetetur.</h3>
                            <button class="btn basic" type="button" onclick="openTour()">Start watching now!</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third block logged-->
        <?php } else { ?>
            <!-- third block -->
            <div class="third_block">
                <div class="slider">
                    <div class="slide">
                        <div class="container">
                            <p class="small_text">360 Promo Video</p>
                            <h2>Sample</h2>
                            <button class="btn basic" type="button" onclick="openTour()">Watch Here!</button>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="container">
                            <p class="small_text">360 Promo Video</p>
                            <h2>Sample</h2>
                            <button class="btn basic" type="button" onclick="openTour()">Watch Here!</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- third block -->

        <?php } ?>

        <!-- fourth block -->
        <div class="fourth_block">
            <div class="container first_container">
                <div class="row">
                    <div class="left_box">
                        <?php
                        if (is_user_logged_in()) {
                            ?>
                            <button class="btn basic" type="button" onclick="openTour()">Jump in!</button>
                        <?php } else { ?>

                        <?php } ?>

                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br> sed diam nonumy.</p>
                    </div>
                    <div class="device_box">
                        <img src="../app/assets/device.png" alt="" class="device">
                    </div>
                </div>
            </div>
            <div class="container second_container">
                <a href="#" class="second_logo">
                    <img src="../app/assets/logo.svg" alt="" />
                </a>
                <h3>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                    et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem.</p>
                <img src="../app/assets/ui--compability.png" alt="" id="devices">
            </div>
        </div>
        <!-- fourth block -->
    </div>

    <!-- VR PLAYER -->
    <div id="player_wrapper">
        <script src="../app/tour.js"></script>
        <div id="player">
            <noscript>
                <table style="width:100%;height:100%;">
                    <tr style="vertical-align:middle;">
                        <td>
                            <div style="text-align:center;">ERROR:<br /><br />Javascript not activated<br /><br /></div>
                        </td>
                    </tr>
                </table>
            </noscript>
            <script>
                embedpano({
                    xml: "app/tour.xml",
                    target: "player",
                    html5: "only",
                    mobilescale: 1.0,
                    passQueryParameters: "startscene,startlookat"
                });
            </script>
        </div>
        <div class="bg" onclick="changeView('')"></div>
    </div>

    <!-- POPUP -->
    <div id="popup_wrapper">
        <div class="bg" onclick="popup_hide()"></div>
        <div id="popup">
            <!-- VIDEO -->
            <div id="popup_video">
                <div class="btn close" onclick="popup_hide()"></div>
                <video id="popup_video__player" loop playsinline controls autoplay muted>
                    <source src="../app/videos/promo_2d.mp4" type="video/mp4">
                </video>
            </div>

            <!-- LOGIN -->
            <div id="popup_login" class="login_type--signIn login_type--signUp_email login_type--signUp_pswd">

                <div class="login_title">Sign In</div>
                <input type="text" class="login_email" type="email" placeholder="Email">
                <input type="text" class="login_password" type="password" placeholder="Password">
                <button class="btn basic" type="button" onclick="login()">Sign In</button>
                <div class="login_service">
                    <div class="login_remember">
                        <input type="checkbox" id="remember" name="remember" checked>
                        <label for="remember">Remember me?</label>
                    </div>
                    <p class="login_help">Need Help?</p>
                </div>
                <div class="login_info">
                    <p>New to VTO? <a href="">Sign up now.</a></p>
                    <p>This page is protected by Google reCAPTCHA to <br>ensure you're not a bot.
                        <!-- <a href="">Learn more.</a> -->
                    </p>
                </div>
            </div>

            <!-- Payments -->
            <div id="popup_tiers">
                <div class="title">Add Credits</div>
                <div class="second_block__coins">
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <h2>Just for you!</h2>
                                <div class="countdown"></div>
                            </div>
                            <div class="col-4">
                                <div class="coin_box">
                                    <p class="coin_box__title">Buy 500 <span>VNOC</span></p>
                                    <p class="coin_box__price">$20.00</p>
                                    <p class="coin_box__old_price">$50.00</p>
                                    <a href="#" class="coin_box__button">BUY NOW</a>
                                    <img src="../app/assets/coin1.png" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="coin_box">
                                    <p class="coin_box__title">Buy 800 <span>VNOC</span></p>
                                    <p class="coin_box__price">$50.00</p>
                                    <p class="coin_box__old_price">$80.00</p>
                                    <a href="#" class="coin_box__button">BUY NOW</a>
                                    <img src="../app/assets/coin2.png" alt="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="coin_box">
                                    <p class="coin_box__title">Buy 1.000 <span>VNOC</span></p>
                                    <p class="coin_box__price">$80.00</p>
                                    <p class="coin_box__old_price">$100.00</p>
                                    <a href="#" class="coin_box__button">BUY NOW</a>
                                    <img src="../app/assets/coin3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second block -->
                <div class="second_block">
                    <div class="container">
                        <div class="row">
                            <div id="payment">
                                <button class="btn cta basic" id="topup" onclick="popup_show('tiers')">Buy
                                    credits</button>
                                <div class="payment-methods">
                                    <img src="../app/assets/ui--card-PayPal.png" alt="" class="payment">
                                    <img src="../app/assets/ui--card-Visa.png" alt="" class="payment">
                                    <img src="../app/assets/ui--card-MasterCard.png" alt="" class="payment">
                                    <img src="../app/assets/ui--card-AmericanExpress.png" alt="" class="payment">
                                </div>
                            </div>
                            <img src="../app/assets/coins.png" alt="" class="coins">
                        </div>
                    </div>
                </div>
                <!-- second block -->
                <div onclick="popup_hide()" class="btn close"><i class="eicon-close"></i></div>
            </div>

            <!-- Age check -->
            <div id="popup_age">
                <div class="title">CONFIRM YOUR AGE </div>
                <div class="">We require users to be 18 years old or over, <br> please confirm your age.</div>
                <div class="login_remember">
                    <input type="checkbox" id="check_age" name="check_age">
                    <label for="check_age">I confirm that I am 18 years old or over</label>
                </div>
                <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                    <button class="elementor-size-sm elementor-button age_btn" name="wp-submit">
                        <span class="elementor-button-text">Submit</span>
                    </button>
                </div>
                <div onclick="popup_hide()" class="dialog-close-button dialog-lightbox-close-button"><i
                        class="eicon-close"></i></div>
            </div>

        </div>
    </div>

    

    <div id="footer">
        <div id="credits">
            <div class="privacy" onclick="popup_show('privacypolicy')">PrivacyPolicy</div>
            <div class="terms" onclick="popup_show('terms')">Terms & Conditions</div>
            <div class="faq" onclick="popup_show('faq')">FAQ</div>
            <p>COPYRIGHT @ 2022 ENTERPRISE VR PTY LTD</p>
            <p>VIRTUAL NIGHT OUT™ IS A TRADEMARK OF ENTERPRISE VR HOLDINGS PTY LTD</p>
        </div>
    </div> <!-- footer -->

    

</div> <!-- app -->

<?php get_footer(); ?>