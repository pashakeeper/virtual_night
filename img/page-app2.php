<?php
/*
 * Template Name: App2
 * description: >-
  Page template without sidebar
 */

get_header(); ?>

<div id="app">

    <div id="header">

        <div id="logo"><img src="app/assets/ui--logo.png" alt="" /></div>

        <div id="account" class="guest">

            <button class="btn basic" id="login" type="button" onclick="popup_show('login')">Sign In / Login</button>


            <div class="btn balance" id="balance" type="button">
                <img src="app/assets/ui--icon-plus.png" alt="" />
                <span class="amount">2534,00</span>
                <span class="currency">VNOC</span>
            </div>

            <div id="btn-avatar" onclick="dropdown('')">
                <img class="avatar" src="app/assets/ui--avatar.png" alt="" />
                <div id="dropdown"></div>
            </div>

            <div id="avatar-dropdown">

                <div class="dropdown-user_info">
                    <img class="avatar" src="app/assets/ui--avatar.png" alt="" />
                    <div class="balance">
                        <span class="amount">285.000</span>
                        <span class="currency">Credits</span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="dropdown-menu">
                    <ul>
                        <li onclick="popup_show('tiers');dropdown()">Buy more credits</li>
                        <li>Support</li>
                        <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                    </ul>
                </div>

            </div>

        </div>

    </div> <!-- header -->

    <div id="main">

        <div id="slider" class="block">
            <div class="slide">
                <div class="buttons">
                    <button class="btn basic" id="btn--cta-360promo" type="button" onclick="popup_show('video')">Promo</button>
                    <button class="btn basic" id="btn--cta-login" type="button" onclick="popup_show('login')">Create Account</button>
                    <button class="btn basic" id="btn--cta-360" type="button" onclick="openTour()">Start watching now!</button>
                </div>
                <h2 class="slider-title">World First <span>and</span> <br />best vr experience</h2>

            </div>
            <img src="app/assets/ui--icon-360.png" alt="" class="icon-360" />
            <div id="slider-bullets">
                <button class="slider-dot active"></button>
                <button class="slider-dot"></button>
                <button class="slider-dot"></button>
                <button class="slider-dot"></button>
                <button class="slider-dot"></button>
            </div>
        </div>

        <div class="submain">
            <div id="example" class="block">
                <div id="exampleCTA" class="btn cta" onclick="openSample()">
                    <img src="app/assets/ui--slide2-CTA.png" alt="" />
                </div>
                <img src="app/assets/ui--img-vr.png" alt="" id="img-vr" />
                <img src="app/assets/ui--icon-360.png" alt="" class="icon-360" />
            </div>

            <div id="accountBanner" class="block">
                <button class="btn basic" type="button" onclick="popup_show('login')">Create Account</button>
                <h2 class="slider-title">World First <span>and</span> <br />best vr experience</h2>
            </div>

            <div id="buy_credits" class="block">
                <div class="credits-title">
                    <img src="app/assets/title--buy_credits.png" alt="">
                    <p>just for today</p>
                </div>
                <div id="payment">
                    <div class="payment-methods">
                        <img src="app/assets/ui--card-PayPal.png" alt="" class="payment">
                        <img src="app/assets/ui--card-Visa.png" alt="" class="payment">
                        <img src="app/assets/ui--card-MasterCard.png" alt="" class="payment">
                        <img src="app/assets/ui--card-AmericanExpress.png" alt="" class="payment">
                    </div>
                    <button class="btn cta basic" id="topup" onclick="popup_show('tiers')">Buy more credits</button>
                </div>

            </div>
        </div>



    </div>

    <!-- VR PLAYER -->
    <div id="player_wrapper">
        <script src="app/tour.js"></script>
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
                    <source src="app/videos/promo_2d.mp4" type="video/mp4">
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
                    <p>This page is protected by Google reCAPTCHA to <br>ensure you're not a bot. <!-- <a href="">Learn more.</a> --></p>
                </div>
            </div>

            <!-- Payments -->
            <div id="popup_tiers">
                <div class="title">Add Credits</div>
                <div class="tiers">
                    <div class="tier">
                        <p>500 credits</p>
                    </div>
                    <div class="tier">
                        <p>1000 credits</p>
                    </div>
                    <div class="tier">
                        <p>5000 credits</p>
                    </div>
                    <div class="tier">
                        <p>20000 credits</p>
                    </div>
                </div>
            </div>

            <!-- Age check -->
            <div id="popup_age">
                <div class="title">CONFIRM YOUR AGE </div>
                <div class="    ">We require users to be 18 years old or over, <br> please confirm your age.</div> 
                <div class="login_remember">
                        <input type="checkbox" id="check_age" name="check_age" >
                        <label for="check_age">I confirm that I am 18 years old or over</label>
                </div>
                <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
                    <button class="elementor-size-sm elementor-button age_btn" name="wp-submit">
                        <span class="elementor-button-text">Submit</span>
                    </button>
                </div>
                <div onclick="popup_hide()" class="dialog-close-button dialog-lightbox-close-button"><i class="eicon-close"></i></div>
            </div>
        </div>

    </div>

    <div id="footer">
        <img src="app/assets/ui--compability.png" alt="" id="devices">
        <div id="credits">
            <p>COPYRIGHT @ 2022 ENTERPRISE VR PTY LTD</p>
            <div class="faq" onclick="popup_show('faq')">FAQ</div>
            <div class="privacy" onclick="popup_show('privacypolicy')">PrivacyPolicy</div>
            <div class="terms" onclick="popup_show('terms')">Terms & Conditions</div>
            <p>VIRTUAL NIGHT OUT™ IS A TRADEMARK OF ENTERPRISE VR HOLDINGS PTY LTD</p>
        </div>
    </div> <!-- footer -->


</div> <!-- app -->



<?php get_footer(); ?>