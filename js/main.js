$(document).ready(function(){	
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    $(".b-slider-left").slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        // centerMode: true,
        // centerPadding: '50px',
        arrows: true,
        nextArrow: '<div class="b-slider-left-arrows icon-arrow-right" aria-hidden="true"></div>',
        prevArrow: '<div class="b-slider-left-arrows icon-arrow-left" aria-hidden="true"></div>', 
    });

    var sliderBlock = false;
    $(".b-slider-left").on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(".b-slider-doc-item[data-id='"+nextSlide+"']").click();
        sliderBlock = true;
        console.log("beforeChange");
    });
    $(".b-slider-left").on('afterChange', function(event, slick, currentSlide, nextSlide){
        sliderBlock = false;
        console.log("afterChange");
    });

    $(".b-slider-doc-item").click(function(){
        if(!sliderBlock){
            $('.b-slider-left').slick('slickGoTo', $(this).attr("data-id"), false);
            $(".b-slider-doc-item").each(function(index, el) {
                $(this).removeClass("slide-active");
            });
            $(this).addClass("slide-active");
        }
    });

    $(".b-nav a").on('click', function(){
        $(".nav-active").removeClass("nav-active");
        $(this).addClass("nav-active");
        $(".tab-active").removeClass("tab-active");
        $("."+$(this).attr("data-block")).addClass("tab-active");
    });

    function declOfNum(number)  
    {
        var titles = ['упаковка','упаковки','упаковок'];
        cases = [2, 0, 1, 1, 1, 2];  
        return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];  
    }

    $(".b-counter .icon-minus").click(function(){
        var $cont = $(this).siblings(".b-count"),
            $input = $cont.children("input"),
            count = parseInt($input.val()) - 1;
        count = count < 1 || isNaN(count) === true ? 1 : count;
        $input.val(count).change();
        $cont.children("p").text(declOfNum(count));
    });

    $(".b-counter .icon-plus").click(function(){
        var $cont = $(this).siblings(".b-count"),
            $input = $cont.children("input"),
            count = parseInt($input.val()) + 1;
        count = count > 99 || isNaN(count) === true ? 99 : count;
        $input.val(count).change();
        $cont.children("p").text(declOfNum(count));
    });

    $(".b-video-block .b-btn-play").click(function(){
        var $cont = $(this).parents(".b-video-block");
        $cont.addClass("play");
        $cont.find("iframe").attr("src", $cont.find("iframe").attr("src")+"&autoplay=1"); 
        if( $(".b-audio-butt").hasClass("play") ){
            $(".b-audio-butt").click();
        }
        return false;
    });

    //asNavFor: '.b-slider-left',

    // // Первая анимация элементов в слайде
    // $(".b-step-slide[data-slick-index='0'] .slider-anim").addClass("show");

    // // Кастомные переключатели (тумблеры)
    // $(".b-step-slider").on('beforeChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-tabs li.active").removeClass("active");
    //     $(".b-step-tabs li").eq(nextSlide).addClass("active");
    // });

    // // Анимация элементов в слайде
    // $(".b-step-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-step-slide .slider-anim").removeClass("show");
    //     $(".b-step-slide[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    // });


    
	// var myPlace = new google.maps.LatLng(55.754407, 37.625151);
 //    var myOptions = {
 //        zoom: 16,
 //        center: myPlace,
 //        mapTypeId: google.maps.MapTypeId.ROADMAP,
 //        disableDefaultUI: true,
 //        scrollwheel: false,
 //        zoomControl: true
 //    }
 //    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

 //    var marker = new google.maps.Marker({
	//     position: myPlace,
	//     map: map,
	//     title: "Ярмарка вакансий и стажировок"
	// });

});