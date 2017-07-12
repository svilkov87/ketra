$(document).ready(function(){

    //loader
     $(window).load(function() {
     $("#object").fadeOut();
     $("#loading").delay(100).fadeOut("slow");
     });

    //протфолио показать подробности
    $(".sb_more").click(function() {
        $(this).toggleClass('burger');
        $(this).prev(".second_blcok").toggleClass('active');
    });

    //скролл side главная страница
    $(window).scroll(function () {
        var $sections = $('.cv_sections');
        $sections.each(function (i, el) {
            var top = $(el).offset().top - 100;
            var bottom = top + $(el).height();
            var scroll = $(window).scrollTop();
            var id = $(el).attr('id');
            if (scroll > top && scroll < bottom) {
                $('a.active').removeClass('active');
                $('a[href="#' + id + '"]').addClass('active');

            }
        })
    });

    var sScroll = $(".ul_side");
    $(this).on("click", "a", function (event) {
        // исключаем стандартную реакцию браузера
        event.preventDefault();

        // получем идентификатор блока из атрибута href
        var id = $(this).attr('href'),

        // находим высоту, на которой расположен блок
            top = $(id).offset().top;

        // анимируем переход к блоку, время: 800 мс
        $('body,html').animate({scrollTop: top}, 800);
    });





// выпадающее меню
  $("#justify_nav").click(function(){
    $(".menu").fadeToggle(500);
  });


    //написать мне
    $(".write_me").click(function () {
        $(".main").addClass('back');
    });

    //меню четвертого примера
    $(".menu_touch").click(function () {
        $(".menu_down").slideToggle(150);
    });

    //меню пятого примера
    $(".menu_touch_five").click(function () {
        $('.menu_down_five').toggleClass('up');
    });

    //меню шестого примера
    $(".menu_touch_six").click(function () {
        $('.menu_down_six').toggleClass('up');
    });


    // форма отправки заказа
    $('.btn_modal').click(function(e){
        e.preventDefault();
        var name = $('#name').val(),
            s_name = $('#s_name').val(),
            field = $('#modal_field').val();

        if( name == "" || s_name == "" || field == ""){
            $('.err_block').css("display" , "block");
        }
        else {
            $('.err_block').css("display" , "none");
            $.ajax({
                url: "../../ajax/upload.php",
                type: "POST",
                data: $('#my_form').serialize(),
                dataType: "html"
            }).done(function(){
                // $('#myModlal').css("display" , "none");
                $('.modal_forms').css("display" , "none");
                $('.modal_confirm').css("display" , "block");
                // alert('data');
            });
        }
        $('#name, #s_name, #modal_field').focus(function(){
            $('.err_block').css("display" , "none");
        });
    });

    //Плавный скролл до блока .div по клику на .scroll
  //Документация: https://github.com/flesler/jquery.scrollTo
  $(".button_go").click(function() {
    $.scrollTo($("#products"), 800, {
      offset: 0
    });
  });



  // показать кнопку наверх
  $(window).scroll(function() {
    if ($(this).scrollTop() > 250){
      $('#top').fadeIn(100);
    }
    else{
      $('#top').fadeOut(100);
    }
  });



  //Кнопка "Наверх"
  //Документация:
  //http://api.jquery.com/scrolltop/
  //http://api.jquery.com/animate/
  $("#top").click(function () {
    $("body, html").animate({
      scrollTop: 0
    }, 800);
    return false;
  });

    //фиксированный нав
    $(window).scroll(function() {
        if ($(this).scrollTop() > 5){
            $('.navbar').addClass("nav_bottom");
        }
        else{
            $('.navbar').removeClass("nav_bottom");
        }
    });

    //показать меню слева
    $("#menu_toggle").click(function() {
        $(this).toggleClass('mleft');
        $('.side_menu').toggleClass('sleft');
        $('.main').toggleClass('on');
    });
});

