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
    });
    $(".b-slider-left").on('afterChange', function(event, slick, currentSlide, nextSlide){
        sliderBlock = false;
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

    $(".b-btn-count").click(function(){
        var $cont = $(this).siblings(".b-count"),
            $input = $cont.children("input"),
            count;
        if($(this).hasClass("icon-minus")){
            count = parseInt($input.val()) - 1;
            count = count < 1 || isNaN(count) === true ? 1 : count;
        }else{
            count = parseInt($input.val()) + 1;
            count = count > 99 || isNaN(count) === true ? 99 : count;
        }
        $input.val(count).change();
        if(!$(this).parents(".b-form-left").find(".b-tip-small").hasClass("no-show")){
            $(this).parents(".b-form-left").find(".b-tip-small").addClass("show");
        }
    });

    $(".b-count-current").on("input change", function() {
        var count = $(this).val(),
            $form = $(this).parents(".b-form-left");

        $(this).siblings("p").text(declOfNum($(this).val()));

        if(count >= 3){
            $form.find(".b-bonus-free").addClass("active");
        }else{
            $form.find(".b-bonus-free").removeClass("active");
        }
        if(count >= 5){
            $form.find(".b-bonus-gift").addClass("active");
        }else{
            $form.find(".b-bonus-gift").removeClass("active");
        }
        if(count == 1){
            $form.find(".old-price").addClass("hide");
            $form.find(".more-1").addClass("hide");
            $form.find(".less-1").removeClass("hide");
        }else{
            $form.find(".old-price").removeClass("hide");
            $form.find(".more-1").removeClass("hide");
            $form.find(".less-1").addClass("hide");
        }
    });

    $(".b-video-block .b-btn-play").click(function(){
        var $cont = $(this).parents(".b-video-block");
        $cont.addClass("play");
        $cont.find("iframe").attr("src", $cont.find("iframe").attr("src")+"&autoplay=1");
        return false;
    });

    $(".b-reviews-nav").slick({
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        arrows: false,
        variableWidth: true,
        focusOnSelect: true,
        asNavFor: '.b-reviews-slider',
    });

    $(".b-reviews-slider").slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        arrows: true,
        nextArrow: '<div class="b-reviews-next-cont" aria-hidden="true"><span class="b-reviews-next">Смотреть следующий отзыв</span></div>',
        asNavFor: '.b-reviews-nav'
    });

    $(".b-tip-cont > a").click(function(){
        $(this).siblings(".b-tip").addClass("show");
        return false;
    });

    $(".b-discover").click(function(){
        $(this).find(".b-tip").addClass("show");
        return false;
    });

    $(function(){
        $(document).mouseup(function (e){
            var tip = $(".b-tip");
            if (!tip.is(e.target) && tip.has(e.target).length === 0) {
                tip.removeClass("show");
            }
        });
    });

    $(".b-tip-close").click(function(){
        $(this).parents(".b-tip").removeClass("show");
        if($(this).parents(".b-tip-small")){
            $(this).parents(".b-tip-small").removeClass("show").addClass("no-show");
        }
        return false;
    });

    $("input[type='checkbox']").change(function(){
        if($(this).prop('checked')){
            $(this).siblings(".b-tip-small").removeClass("show");
        }else{
            $(this).siblings(".b-tip-small").addClass("show");
        }
    });

    $(window).enllax();

    $(".b-blur-init").each(function(indx, element){
        var pos = $(this).position();
        var left = $(this).parents(".b-10").length ? -468 : -512;
        $(this).children(".b-2-item-blur").css(
            {"background-position" : (-pos.left+left).toString()+"px "+(-pos.top).toString()+"px"}
        );
    });

    $(".show-more").click(function(){
        var $target = $(this).siblings(".show-more-text");
        if($target.hasClass("show")){//при закрытии
            $target.removeClass("show").slideUp();
            $(this).children(".open").removeClass("hide");
            $(this).children(".close").addClass("hide");
            setTimeout(function() {
                $(".b-17-content").removeClass("short-padding");
            }, 200);
        }else{//при открытии
            $target.addClass("show").slideDown();
            $(this).children(".open").addClass("hide");
            $(this).children(".close").removeClass("hide");
            setTimeout(function() {
                $(".b-17-content").addClass("short-padding");
            }, 400);
        }
        return false;
    });

    // $(".b-reviews-nav").on('beforeChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-reviews-item").removeClass("slick-active");
    //     $(".b-reviews-item[data-slick-index='"+currentSlide+"']").addClass("slick-active");
    // });


    // $(".b-textarea-problem").on("input change", function() {
    //     if($(this).val()){
    //         $(".b-textarea-pl").addClass("hide");
    //     }else{
    //         $(".b-textarea-pl").removeClass("hide");
    //     }
    // });

    // $(".b-textarea-problem").on("focus", function() {
    //     $(".b-textarea-pl").addClass("hide");
    // });

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