$(function () {

    // pc-banner
    var mySwiper = new Swiper('.pc-banner .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        loop: true,
        pagination: {
            el: '.pc-banner .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.pc-banner .swiper-button-next',
            prevEl: '.pc-banner .swiper-button-prev',
        },
    })

    // product-recommend
    var mySwiper = new Swiper('.product-recommend .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        slidesPerView: 2,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.product-recommend .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.product-recommend .swiper-button-next',
            prevEl: '.product-recommend .swiper-button-prev',
        },
    });
    // pc-contact
    var mySwiper = new Swiper('.conatact-recommend .pc-about-swiper .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.conatact-recommend .pc-about-swiper .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.conatact-recommend .pc-about-swiper .swiper-button-next',
            prevEl: '.conatact-recommend .pc-about-swiper .swiper-button-prev',
        },
    })

    // wap-banner
    var mySwiper = new Swiper('.wap-banner .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        loop: true,
        pagination: {
            el: '.wap-banner .swiper-pagination',
            clickable: true,
        },
    })
    // wap-contact
    var mySwiper = new Swiper('.conatact-recommend .wap-about-swiper .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        loop: true,
        pagination: {
            el: '.conatact-recommend .wap-about-swiper .swiper-pagination',
            clickable: true,
        },
    })

    // pc-center
    var mySwiper = new Swiper('.pc-center .swiper-container', {
        slidesPerView: 4,
        slidesPerColumn: 1,
        pagination: {
            el: '.pc-center .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.pc-center .swiper-button-next',
            prevEl: '.pc-center .swiper-button-prev',
        },

    })

    // wap-center
    var mySwiper = new Swiper('.wap-center .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        pagination: {
            el: '.wap-center .swiper-pagination',
            clickable: true,
        },
    })

    // pc-case
    var mySwiper = new Swiper('.pc-case .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        slidesPerView: 5,
        spaceBetween: 30,
        autoHeight: true,
        loop: true,
        navigation: {
            nextEl: '.pc-case .swiper-button-next',
            prevEl: '.pc-case .swiper-button-prev',
        },

    })
    // wap-case
    var mySwiper = new Swiper('.wap-case .swiper-container', {
        autoplay: true,
        speed: 1500,
        autoHeight: true,
        slidesPerView: 2,
        spaceBetween: 30,
        autoHeight: true,
        loop: true,
        pagination: {
            el: '.wap-case .swiper-pagination',
            clickable: true,
        },

    })


    $(".nav li").click(function () {
        $(this).parent().parent().removeClass("in");
    })


    // 滚动监听
    $('body').scrollspy({
        target: '#navbar-example'
    })
    // top
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".navbar").addClass("navbar-fixed-top");
            $(".goTop").fadeIn(1000);
        } else {
            $(".navbar").removeClass("navbar-fixed-top");
            $(".goTop").fadeOut(1000);

        }
    });
    $(".goTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 1000);
    });

    // search
    var div1 = $(".header-search form")[0]
    $(".header-search .search-img").click(function () {
        $(".header-search form").show();
    })
    $("#close-button").click(function () {
        $(".header-search form").hide();
    })
    window.onclick = function close(e) {
        if (e.target == div1) {
            $(".header-search form").hide();
        }
    }
    // css3
    new WOW().init();

    // wap
    $(".wap-language .box-img").click(function () {
        var flag = $(this).parent().find('ul').is(':hidden');
        if (flag) {
            $(".wap-language ul").fadeIn(800)
        } else {
            $(".wap-language ul").fadeOut(800)

        }
    })
    // wap
    $(".wap-box .wap-search").click(function () {
        console.log(98)
        $(".wap-box .wap-search>img").hide();
        $("header .wap-language").hide();
        $(".wap-box .wap-search form").fadeIn(800)
    })

})

var submitcount2 = 0;

function beforeSubmit2(form) {
    var re = /^[0-9]*$/;
    if (form.name.value == '') {
        alert('Name can not be empty');
        form.name.focus();
        return false;
    } else if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else if (!re.test(form.phone.value)) {
        alert('The phone is wrong');
        form.phone.focus();
        return false;
    } else if (form.message.value == '') {
        alert('The message can not be empty');
        form.message.focus();
        return false;
    } else {

        if (submitcount2 == 0) {
            submitcount2++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;

        }
    }

}
