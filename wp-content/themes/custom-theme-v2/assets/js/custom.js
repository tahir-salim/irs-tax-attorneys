$(document).ready(function () {
    switchDiv();

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");

    $('[href="#"]').attr("href", "javascript:;");

    $(".menu-Bar").click(function () {
        $(this).toggleClass("open");
        $(".menuWrap").toggleClass("open");
        $("body").toggleClass("ovr-hiddn");
    });

    $(".loginUp").click(function () {
        $(".LoginPopup").fadeIn();
        $(".overlay").fadeIn();
    });

    $(".signUp").click(function () {
        $(".signUpPop").fadeIn();
        $(".overlay").fadeIn();
    });

    $(".closePop,.overlay").click(function () {
        $(".popupMain").fadeOut();
        $(".overlay").fadeOut();
    });

    $(".menu .menu-item-has-children").addClass("dropdown-nav ");
    $(".menu .menu-item-has-children ul.sub-menu").addClass("dropdown");

    /* Tabbing Function */
    $("[data-targetit]").on("click", function (e) {
        $(this).addClass("active");
        $(this)
            .siblings()
            .removeClass("active");
        var target = $(this).data("targetit");
        $("." + target)
            .siblings('[class^="box-"]')
            .hide();
        $("." + target).fadeIn();
        $(".tabViewList").slick("setPosition", 0);
    });

    // Accordian
    $('.accordion-list > li > .answer').hide();

    $('.accordion-list > li').click(function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active").find(".answer").slideUp();
        } else {
            $(".accordion-list > li.active .answer").slideUp();
            $(".accordion-list > li.active").removeClass("active");
            $(this).addClass("active").find(".answer").slideDown();
        }
        return false;
    });

    $("li.dropdown-nav").hover(function () {
        $(this)
            .children("ul")
            .stop(true, false, true)
            .slideToggle(300);
    });

    $(".searchBtn").click(function () {
        $(".searchWrap").addClass("active");
        $(".overlay").fadeIn("active");
        $(".searchWrap input").focus();
        $(".searchWrap input").focusout(function (e) {
            $(this)
                .parents()
                .removeClass("active");
            $(".overlay").fadeOut("active");
            $("body").removeClass("ovr-hiddn");
        });
    });

    $(".index-slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        arrow: true, 
    });


    
    $(".index-slider-testimonials").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        arrows: false, 
    });

    $(".index-slider-news").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        arrow: true, 
    });


    $(".index-slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        arrow: true, 
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
        focusOnSelect: false,
        infinite: true,

    });

    /* Top Scroll */
    // $('body').on('click', '.scrolldown-fl', function() {
    //     goToScroll('awardSec');
    // });
});

// $(window).on("scroll touchmove", function() {
//     $("header").toggleClass("stickyOpen", $(document).scrollTop() > 200);
// });

$(window).on("load", function () {
    var currentUrl = window.location.href.substr(
        window.location.href.lastIndexOf("/") + 1
    );
    $("ul.menu li a").each(function () {
        var hrefVal = $(this).attr("href");
        if (hrefVal == currentUrl) {
            $(this).removeClass("active");
            $(this)
                .closest("li")
                .addClass("active");
            $("ul.menu li.first").removeClass("active");
        }
    });
});

/* RESPONSIVE JS */
if ($(window).width() < 824) { }

function switchDiv() {
    var $window = $(window).outerWidth();
    if ($window <= 768) {
        $(".topAppendTxt").each(function () {
            var getdtd = $(this)
                .find(".cloneDiv")
                .clone(true);
            $(this)
                .find(".cloneDiv")
                .remove();
            $(this).append(getdtd);
        });
    }
}

function goToScroll(e) {
    $("html, body").animate({
        scrollTop: $("." + e).offset().top
    },
        1000
    );
}

$(document).ready(function () {
    $('.popdynamic').click(function () {
        $('.centercont.static').addClass('d-none');
        $('.centercont.dynamic').removeClass('d-none');
        $('.overlay').fadeIn();
        $('#popdynamic').fadeIn();
        $('.LoginPopup').addClass('price-margin');

        var packtitle = $(this).closest('.pckg').find(" .title").html();
        var packprice = $(this).closest('.pckg').find(".price .amount").html();



        var thisrel = $(this).attr('rel');
        $('input[name="pkg_key"]').val(thisrel);
        $('#popupform input#popuppackage').val(thisrel);
        $(".centercont.dynamic h3 span").html(packtitle);
        $(".centercont h4").html("In Just <span>" + packprice + "</span>");
    });



    $('.popbtn2').click(function () {
        $('.centercont.static').addClass('d-none');
        $('.centercont.dynamic').removeClass('d-none');
        $('.overlay').fadeIn();
        $('#popdynamic').fadeIn();
        $('.LoginPopup').addClass('price-margin');
        var packtitle = $(this).closest('.pckg2').find(".label").html();
        var packprice = $(this).closest('.pckg2').find(".price").html();
        var thisrel = $(this).attr('rel');
        $('input[name="pkg_key"]').val(thisrel);
        $('#popupform input#popuppackage').val(thisrel);
        $(".centercont.dynamic h3 span").html(packtitle);
        $(".centercont h4").html("In Just <span>" + packprice + "</span>");
    });

    $('.closeico,.overlay').click(function () {

        $('.popupmain').fadeOut();
        $('.overlay').fadeOut();


    });

    $('.popstatic').click(function () {
        $('.centercont.static').removeClass('d-none');
        $('.centercont.dynamic').addClass('d-none');
        $('#popstatic').fadeIn();
        $('.overlay').fadeIn();


        var orgtexts = '$99';
        //  $(".centercont h3 span").text('Start your Trademark Registration Now');
        $(".centercont h4").html("in Just <span>" + orgtexts + "</span>");
    });

    $(window).scroll(function () {
        var header = $('header'),
            scroll = $(window).scrollTop();

        if (scroll >= 1) {
            header.addClass('sticky');
        }
        if (scroll <= 0) {
            header.removeClass('sticky');
        }

    });

});



  $(".testi-slider-2").slick({
    dots: true,
    arrows: false,
    infinite: true,
    autoplay: true,
    speed: 300,
    slidesToShow: 3,
    responsive: [
        {
            breakpoint: 1025,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
          },
          {
            breakpoint: 885,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 600,
            settings: {
                cssEase: 'ease',
                slidesToShow: 1,
                slidesToScroll: 1,
              
            }
          }
      ]
});


if ($(window).width() > 1200) {
    $('.has-child.hover').hover(function() {
        $('.has-child').not($(this)).find('.dropdown').stop(true,false,true).slideUp(500);
        $('.has-child').not($(this)).find('.chev').removeClass('rotate');
        $(this).children('.dropdown').stop(true,false,true).slideToggle(500);
        $(this).find('.chev').toggleClass('rotate');
    });
}
else{
    $('.has-child.hover').click(function() {
        $('.has-child').not($(this)).find('.dropdown').stop(true,false,true).slideUp(500);
        $('.has-child').not($(this)).find('.chev').removeClass('rotate');
        $(this).children('.dropdown').stop(true,false,true).slideToggle(500);
        $(this).find('.chev').toggleClass('rotate');
    });
}

$('.has-child.click').click(function() {
    $('.has-child').not($(this)).find('.dropdown').stop(true,false,true).slideUp(500);
    $('.has-child').not($(this)).find('.chev').removeClass('rotate');

    $(this).find('.dropdown').stop(true,false,true).slideToggle(500);
    $(this).find('.chev').toggleClass('rotate');

});

$('.slick-center').slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 1,
 
  });


  // counter
$(window).on("scroll", function (e) {
    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "");
    }

    if($('.goto').length > 0){
        if ($(window).scrollTop() >= $(".goto").offset().top - $(window).height()) {
           
            if (!$(".goto").hasClass("animated")) {
                $(".count").each(function () {
                    $(this)
                        .prop("Counter", 0)
                        .animate(
                            {
                                Counter: $(this).text(),
                            },
                            {
                                duration: 4000,
                                easing: "swing",
                                step: function (now) {
                                    $(this).text(numberWithCommas(Math.ceil(now)));
                                },
                            }
                        );
                });
                // $("#triggered").addClass("show");
                $(".goto").addClass("animated");
            }
        }
    }
});