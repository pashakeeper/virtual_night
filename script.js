const krpano = document.getElementById("krpanoSWFObject");

function krp(command) {
  krpano.call(command);
}

function trace(command) {
  krpano.call('trace("' + command + '")');
}

let app = document.getElementById("app");
let popup = document.getElementById("popup");

function changeView(changeTo) {
  if (changeTo == "view-player") {
    app.classList.add("view-player");
    window.scrollTo(0, 0);
  } else {
    app.classList.remove("view-player");
    krpano.call('loadscene("scene_street-1",null, MERGE, BLEND(1))');
  }
}

// function to open tour from the start scene
function openSample() {
  // load first scene
  krpano.call('act_loadscene("scene__promo_360")');
  // open player window
  changeView("view-player");
}

// function to open tour from the start scene
function openTour() {
  // load first scene
  krpano.call('loadscene("scene_street-1", null, MERGE, BLEND(0.1));');
  krpano.call('playsound(bgsound,"bg_street.mp3",true);');
  krpano.call('if(vnyp[settings].debug, trace("Sound is playing." ) );');
  // open player window
  changeView("view-player");
}

function popup_hide() {
  if (popup.classList.contains("popup_type--video")) {
    let popup_video = document.getElementById("popup_video__player");
    popup_video.pause();
  }
  app.classList.remove("popup-visible");
  popup.classList.remove("popup_type--video");
  popup.classList.remove("popup_type--login");
  popup.classList.remove("popup_type--tiers");
  popup.classList.remove("popup_type--age");
  popup.classList.remove("popup_type--register");
}
function popup_show(type) {
  if (app.classList.contains("popup-visible") == false) {
    if (typeof type !== "undefined") {
      if (type == "login") {
        elementorProFrontend.modules.popup.showPopup({ id: 67 });
      }
      if (type == "register") {
        elementorProFrontend.modules.popup.showPopup({ id: 102 });
      }
      if (type == "faq") {
        elementorProFrontend.modules.popup.showPopup({ id: 81 });
      }
      if (type == "privacypolicy") {
        elementorProFrontend.modules.popup.showPopup({ id: 86 });
      }
      if (type == "terms") {
        elementorProFrontend.modules.popup.showPopup({ id: 89 });
      }
      if (
        type == "video" ||
        type == "tiers" ||
        type == "age" ||
        type == "register1"
      ) {
        // POPUP WAS HIDDEN
        app.classList.add("popup-visible");

        popup.classList.add("popup_type--" + type);
        if (
          type == "video" &&
          type == "tiers" &&
          type == "age" &&
          type == "register1"
        ) {
          let popup_video = document.getElementById("popup_video__player");
          popup_video.play();
        }
      }
    }
  }
}

function login() {
  app.classList.add("logged");
  document.getElementById("account").classList.add("authorized");
  document.getElementById("account").classList.remove("guest");
  popup_hide();
}

function dropdown() {
  let dropdown = document.getElementById("avatar-dropdown");
  if (dropdown.classList.contains("visible") == false) {
    dropdown.classList.add("visible");
  } else {
    dropdown.classList.remove("visible");
  } 
}

function logout() {
  app.classList.remove("logged");
  document.getElementById("account").classList.remove("authorized");
  document.getElementById("account").classList.add("guest");
  popup_hide();
  dropdown();
}

// New templates
let $ = jQuery.noConflict();
$(document).on("elementor/popup/show", (event, id, instance) => {
  if (id === 102) {
    $('input[type="email"]').attr('autocomplete','off');
    $('input[type="password"]').attr('autocomplete','off');
    $('.elementor-popup-modal .dialog-widget-content').addClass('step_01')
    $(
      "<p class='reg_text first'>Step 1 of 3</p> <h2 class='reg_title'>Enter your email address</h2>"
    ).insertBefore(
      ".elementor-section.elementor-section-boxed > .elementor-container"
    );
    $(".uael-input-fields.elementor-field-group.acceptance-field").append(
      '<p class="reg_text second">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy <a href="#">Pivacy Policy </a> rinvidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <a href="#">Subscriber Agreement</a> .</p> '
    );
    $(".uael-input-fields.elementor-field-group.acceptance-field").append(
      '<a href="#" class="btn agree">Agree & Continue</a>'
    );

    $(
      ".elementor-button-align-stretch .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button"
    ).hide();
    $('.elementor-field-required.elementor-field-group.uael-input-fields.elementor-field-type-password.elementor-column.elementor-col-100').hide();   

    $(".form-field-email").on('change',function(){
      let mail = $(".form-field-email").val();
      console.log(mail);
    })



    $(".btn.agree").click(function () {
      
      $('.elementor-popup-modal .dialog-widget-content').removeClass('step_01');
      $('.elementor-popup-modal .dialog-widget-content').addClass('step_02');

      $('.reg_text.first').text('Step 2 of 3');
      $('.reg_title').text('Enter your Password');
      
      $('.reg_text.second').hide();
      $(this).hide();
      $(".elementor-field-required.elementor-field-group.uael-input-fields.elementor-field-type-email.elementor-column.elementor-col-100").hide();
      $(".elementor-button-align-stretch .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button").show();
      $('.elementor-field-required.elementor-field-group.uael-input-fields.elementor-field-type-password.elementor-column.elementor-col-100').show();
      $(".uael-input-fields.elementor-field-group.acceptance-field").hide();


      $('.elementor-field-required.elementor-field-group.uael-input-fields.elementor-field-type-password.elementor-column.elementor-col-100').append("<p class='reg_text third'> Use a minimum of 6 characters (case sensitive) with at least one number or special character.</p>");
      $('.elementor-field-required.elementor-field-group.uael-input-fields.elementor-field-type-password.elementor-column.elementor-col-100').append("<div class='use_email'>You`ll be using this email address to log in: <span>User@gmail.com</span> </div>");
      
      let mail = $(".form-field-email").val();
      $(".use_email span").text(mail);

      
      

      // if ($.trim($("input[type='email']").val()).length === 0) {
      //   console.log(mail);
      // } else {
      //   // $(".step_01").hide();
      //   $(".step_02").fadeIn();
      //   $("#user_email").attr("value", mail);
      //   $(".email").remove();
      // }
      
      // if ($.trim($("#password2").val()).length === 0) {
      //   console.log(mail);
      // } else {
      //   $(".step_02 .btn.agree").addClass("notdisabled");
      // }
    });
  }
  if (id === 67) {
      $(".elementor-field-type-checkbox.elementor-field-group.elementor-column.elementor-col-100.elementor-remember-me").append('<p class="need_help" >Need Help?</p>')
      $('.need_help').click(function(){
        elementorProFrontend.modules.popup.showPopup({ id: 81 });
      })
  }
});

$(document).ready(function () {
  $(".age_btn").click(function () {
    popup_hide();
    if ($("input#check_age").is(":checked")) {
      popup_hide();
      $.cookie("warbeiuns", true, {
        expires: 30,
        path: "/",
      });
    }
  });
  if (!$.cookie("warbeiuns")) {
    popup_show("age");
  }
  $(".third_block.logged .slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
  });
  $(".third_block .slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
  });
  // $(".step_02").fadeOut();

  $(".btn.agree").click(function () {
    let mail = $(".email").val();
    console.log(mail);
    if ($.trim($(".email").val()).length === 0) {
      console.log(mail);
    } else {
      // $(".step_01").hide();
      $(".step_02").fadeIn();
      $("#user_email").attr("value", mail);
      $(".email").remove();
    }
    $(".use_email span").text(mail);
    if ($.trim($("#password2").val()).length === 0) {
      console.log(mail);
    } else {
      $(".step_02 .btn.agree").addClass("notdisabled");
    }
  });

  var countDownDate = new Date("Feb 20, 2023 15:37:25").getTime();

  var x = setInterval(function () {
    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    $(".countdown").html(
      "<span>" +
        days +
        "</span>" +
        "Days " +
        "<span>" +
        hours +
        "</span>" +
        "Hours" +
        "<span>" +
        minutes +
        "</span>" +
        "Min" +
        "</span>"
    );

    if (distance < 0) {
      clearInterval(x);
      $(".countdown").text("EXPIRED");
    }
  }, 1000);
});

// RUNTIME
