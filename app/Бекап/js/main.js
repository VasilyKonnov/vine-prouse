// Валидация
//function validate(){
//    console.log('1');
//    var validator = new FormValidator('mail_form', [
//        {
//            name: 'name',
//            display: 'Ошибка ввода имени',
//            rules: 'required'
//        }
        //{
        //    name: 'alphanumeric',
        //    rules: 'alpha_numeric'
        //},
        //{
        //    name: 'password',
        //    rules: 'required'
        //}, {
        //    name: 'password_confirm',
        //    display: 'password confirmation',
        //    rules: 'required|matches[password]'
        //}, {
        //    name: 'email',
        //    rules: 'valid_email',
        //    depends: function() {
        //        return Math.random() > .5;
        //    }
        //}, {
        //    name: 'minlength',
        //    display: 'min length',
        //    rules: 'min_length[8]'
        //}
//    ], function(errors, event) {
//        if (errors.length > 0) {
//            var errorString = '';
//
//            for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
//                errorString += errors[i].message + '<br />';
//            }
//
//            $('.error_div').innerHTML = errorString;
//        }
//    });
//    console.log(validator);
//    console.log('2');
//}




function body_vs_open_modal(){
    //console.log('1');
    var $body = $(document.body).add('#header');
    var oldWidth = $body.innerWidth();
    $body.css("overflow", "hidden");
    $body.width(oldWidth);
}

function body_vs_modal_close(){
    var $body = $(document.body);
    $body.css("overflow", "auto");
    $body.width("auto");
    //console.log('2');
}


$(document).ready(function(){


console.log($('body').width());

// отправка письма

    $('#feedback_submit').click(function(){
        //validate();
        var form_id = $('#write_book_form');
        $.post('/mail.php', {
                modal_id : 'write_book_form',
                name : form_id.find("input[name='name']").val(),
                phone : form_id.find("input[name='phone']").val(),
                email : form_id.find("input[name='email']").val(),
            },
            function(result) {
                var message = '';
                if(result == 'mail_success'){
                    window.location.href = "http://"+window.location.hostname+"/thank-you.php";
                }else{
                    message = result;
                    console.log(message);
                    $('.write_book__modal').removeClass('open_modal');
                    $('.error_modal').addClass('open_modal');
                }
            });
    });
    $('#feedback_submit_2').click(function(){
        //validate();
        var form_id = $('#check_list_form');
        $.post('/mail.php', {
                modal_id : 'check_list_form',
                name : form_id.find("input[name='name']").val(),
                phone : form_id.find("input[name='phone']").val(),
                email : form_id.find("input[name='email']").val(),
                checkbox : form_id.find("input[name='checkbox']").prop('checked'),
                //checkbox : form_id.find("input[name='checkbox']").val(),
            },
            function(result) {
                var message = '';
                if(result == 'mail_success'){
                    $('.take_check-list__modal').removeClass('open_modal');
                    $('.check-list_modal').addClass('open_modal');
                }else{
                    message = result;
                    console.log(message);
                    $('.take_check-list__modal').removeClass('open_modal');
                    $('.error_modal').addClass('open_modal');
                }
            });
    });
    $('#feedback_submit_3').click(function(){
        var form_id = $('#give_feedback_form');
        $.post('/mail.php', {
                modal_id : 'give_feedback_form',
                name : form_id.find("input[name='name']").val(),
                lastname : form_id.find("input[name='lastname']").val(),
                phone : form_id.find("input[name='phone']").val(),
                email : form_id.find("input[name='email']").val(),
                feedbackText : form_id.find("textarea[name='feedbackText']").val(),
            },
            function(result) {
                var message = '';
                if(result == 'mail_success'){
                    $('.give_feedback__modal').removeClass('open_modal');
                    $('.feedback_checked_modal').addClass('open_modal');
                }else{
                    message = result;
                    console.log(message);
                    $('.give_feedback__modal').removeClass('open_modal');
                    $('.error_modal').addClass('open_modal');
                }
            });
    });



    $(".modal_center__container").click(function(e) {
        e.stopPropagation();
    });
    $(".modal_choose_service").click(function(e) {
        e.stopPropagation();
    });
    $(".right_stuck_modal").click(function(e) {
        e.stopPropagation();
    });

    $( ".modal__wrapper" ).click(function(){

        //$(".modal_center__container").click(function(e) {
        //    e.stopPropagation();
        //});
        //$(".modal_choose_service").click(function(e) {
        //    e.stopPropagation();
        //});
        //$(".right_stuck_modal").click(function(e) {
        //    e.stopPropagation();
        //});
        $(".modal__wrapper").removeClass("open_modal");
        $(".modal__wrapper").removeClass("open_modal_2");
        $(".modal__wrapper").removeClass("open_modal_3");
        $(".modal__wrapper").removeClass("open_modal_4");
        $(".modal__wrapper").removeClass("opacity_0");
        $(".modal__wrapper").removeClass("opacity_1");
        $(".modal__wrapper").removeClass("opacity_2");
        $(".modal__wrapper").removeClass("opacity_3");
        body_vs_modal_close()
    });




    $('.how_connect').click(function(){
        body_vs_open_modal();
        $('.how_connect__modal').addClass('open_modal');
        //console.log($('.open_modal').width());
    });

    $('.button_close').click(function(){
        $('.how_connect__modal').removeClass('open_modal');
        body_vs_modal_close();
    });

    $('.lit_mama').click(function(){
        body_vs_open_modal();
        $('.lit_mama__modal').addClass('open_modal');
    });

    $('.good_ghost').click(function(){
        body_vs_open_modal();
        $('.good_ghost__modal').addClass('open_modal');
    });

    $('.script_editor').click(function(){
        body_vs_open_modal();
        $('.script_editor__modal').addClass('open_modal');
    });

    $('.script_consult').click(function(){
        body_vs_open_modal();
        $('.script_consult__modal').addClass('open_modal');
    });
    $('.script_consult_2').click(function(){
        body_vs_open_modal();
        $('.script_consult__modal').addClass('open_modal');
    });

    $('.script_correct').click(function(){
        body_vs_open_modal();
        $('.script_correct__modal').addClass('open_modal');
    });

    $('.lit_agent').click(function(){
        body_vs_open_modal();
        $('.lit_agent__modal').addClass('open_modal');
    });

    $('.take_check-list').click(function(){
        body_vs_open_modal();
        $('.take_check-list__modal').addClass('open_modal');
    });

    $('.take_service').click(function(){
        body_vs_open_modal();
        $('.take_service__modal').addClass('open_modal');
    });

    $('.write_book').click(function(){
        body_vs_open_modal();
        $('.write_book__modal').addClass('open_modal');
    });
    $('.button_close').click(function(){
        body_vs_modal_close();
        $('.write_book__modal').removeClass('open_modal');
        $('.lit_mama__modal').removeClass('open_modal');
        $('.good_ghost__modal').removeClass('open_modal');
        $('.script_editor__modal').removeClass('open_modal');
        $('.script_consult__modal').removeClass('open_modal');
        $('.script_correct__modal').removeClass('open_modal');
        $('.lit_agent__modal').removeClass('open_modal');
        $('.take_check-list__modal').removeClass('open_modal');
        $('.take_service__modal').removeClass('open_modal');
        $('.take_service__modal').removeClass('open_modal');
        $('.give_feedback__modal').removeClass('open_modal');
        $('.polit_conf__modal').removeClass('open_modal');
        $('.error_modal').removeClass('open_modal');
        $('.check-list_modal').removeClass('open_modal');
        $('.feedback_checked_modal').removeClass('open_modal');
    });



    $('.take_service_inner').click(function(){
        body_vs_open_modal();
        $('.write_book__modal').removeClass('open_modal');
        $('.take_service__modal').addClass('open_modal');
    });

    //---------------------------------------------------------

    $('.give_feedback').click(function(){
        body_vs_open_modal();
        $('.give_feedback__modal').addClass('open_modal');
    })
    //---------------------------------------------------------

    $('.polit_conf').click(function(){
        body_vs_open_modal();
        $('.polit_conf__modal').addClass('open_modal');
    })

    //---------------------------------------------------------

    // Модалка с кнопкой назад

    // Внутренние модалки

    $('.lit_mama_inner').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_0');
        $('.lit_mama__modal').addClass('open_modal_2');
    })
    $('.button_prev_modal').click(function(){
        body_vs_modal_close();
        $('.lit_mama__modal').removeClass('open_modal_2');
        $('.open_modal').removeClass('opacity_0');
    })
    $('.button_close').click(function(){
        body_vs_modal_close();
        $('.hidden').removeClass('opacity_0');
        $('.lit_mama__modal').removeClass('open_modal_2');
    })


    //------------------------------------------------------------


    $('.good_ghost_inner').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_0');
        $('.good_ghost__modal').addClass('open_modal_2');
    })
    $('.button_prev_modal').click(function(){
        body_vs_modal_close();
        $('.good_ghost__modal').removeClass('open_modal_2');
        $('.open_modal').removeClass('opacity_0');
    })
    $('.button_close').click(function(){
        body_vs_modal_close();
        $('.hidden').removeClass('opacity_0');
        $('.good_ghost__modal').removeClass('open_modal_2');
    })


    //------------------------------------------------------------


    $('.script_editor_inner').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_0');
        $('.script_editor__modal').addClass('open_modal_2');
    })
    $('.button_prev_modal').click(function(){
        body_vs_modal_close();
        $('.script_editor__modal').removeClass('open_modal_2');
        $('.open_modal').removeClass('opacity_0');
    })
    $('.button_close').click(function(){
        body_vs_modal_close();
        $('.hidden').removeClass('opacity_0');
        $('.script_editor__modal').removeClass('open_modal_2');
    })

    //------------------------------------------------------------

    $('.script_correct_inner').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_0');
        $('.script_editor__modal').addClass('open_modal_2');
    })
    $('.button_prev_modal').click(function(){
        body_vs_modal_close();
        $('.script_correct__modal').removeClass('open_modal_2');
        $('.open_modal').removeClass('opacity_0');
    })
    $('.button_close').click(function(){
        body_vs_modal_close();
        $('.hidden').removeClass('opacity_0');
        $('.script_correct__modal').removeClass('open_modal_2');
    })


    //------------------------------------------------------------

    $('.script_consult_inner').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_0');
        $('.script_consult__modal').addClass('open_modal_2');
    })
    $('.button_prev_modal').click(function(){
        body_vs_modal_close();
        $('.script_consult__modal').removeClass('open_modal_2');
        $('.open_modal').removeClass('opacity_0');
    })
    $('.button_close').click(function(){
        body_vs_modal_close();
        $('.hidden').removeClass('opacity_0');
        $('.script_consult__modal').removeClass('open_modal_2');
    })

    //------------------------------------------------------------

    $('.lit_agent_inner').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_0');
        $('.lit_agent__modal').addClass('open_modal_2');
    })
    $('.button_prev_modal').click(function(){
        body_vs_modal_close();
        $('.lit_agent__modal').removeClass('open_modal_2');
        $('.open_modal').removeClass('opacity_0');
    })
    $('.button_close').click(function(){
        body_vs_modal_close();
        $('.lit_agent__modal').removeClass('open_modal_2');
        $('.hidden').removeClass('opacity_0');
    })

    //остались вопросы слой -1

    $('.take_question').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_1');
        $('.take_question__modal').addClass('open_modal_2');
    })
    $('.button_prev_modal_st2').click(function(){
        body_vs_modal_close();
        $('.take_question__modal').removeClass('open_modal_2');
        $('.open_modal').removeClass('opacity_1');
    })
    $('.button_close_st2').click(function(){
        body_vs_modal_close();
        $('.take_question__modal').removeClass('open_modal_2');
        $('.hidden').removeClass('opacity_1');
    })

    //остались вопросы слой - 2

    $('.make_question').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_2');
        $('.open_modal_2').addClass('opacity_2');
        $('.make_question_last__modal').addClass('open_modal_3');
    })
    $('.button_prev_modal_st4').click(function(){
        body_vs_modal_close();
        $('.open_modal').removeClass('opacity_2');
        $('.open_modal_2').removeClass('opacity_2');
        $('.make_question_last__modal').removeClass('open_modal_3');
    })
    $('.button_close_st4').click(function(){
        body_vs_modal_close();
        $('.hidden').removeClass('opacity_2');
        $('.make_question_last__modal').removeClass('open_modal_3');
    })
// остались вопросы слой 3

    $('.make_question_last').click(function(){
        body_vs_open_modal();
        $('.open_modal_3').addClass('opacity_3');
        $('.make_question_last__modal').addClass('open_modal_4');
    })
    $('.button_prev_modal_st4').click(function(){
        $('.open_modal_3').removeClass('opacity_3');
        $('.make_question_last__modal').removeClass('open_modal_4');
    })
    $('.button_close_st4').click(function(){
        $('.hidden').removeClass('opacity_3');
        $('.make_question_last__modal').removeClass('open_modal_4');
    })

// Посмотреть заказ

    $('.take_order').click(function(){
        body_vs_open_modal();
        $('.open_modal_3').addClass('opacity_3');
        $('.take_order__modal').addClass('open_modal_4');
    })
    $('.button_prev_modal_st4').click(function(){
        $('.open_modal_3').removeClass('opacity_3');
        $('.take_order__modal').removeClass('open_modal_4');
    })
    $('.button_close_st4').click(function(){
        $('.hidden').removeClass('opacity_3');
        $('.take_order__modal').removeClass('open_modal_4');
    })

//-------------------------------------------------------------



    $('.make_request').click(function(){
        body_vs_open_modal();
        $('.open_modal').addClass('opacity_2');
        $('.open_modal_2').addClass('opacity_2');
        $('.make_request__modal').addClass('open_modal_3');
    })
    $('.button_prev_modal_st3').click(function(){
        body_vs_modal_close();
        $('.make_request__modal').removeClass('open_modal_3');
        $('.open_modal').removeClass('opacity_2');
        $('.open_modal_2').removeClass('opacity_2');
    })
    $('.button_close_st3').click(function(){
        body_vs_modal_close();
        $('.make_request__modal').removeClass('open_modal_3');
        $('.hidden').removeClass('opacity_2');
    })

//-------------------------------------------------------------

    var typed = new Typed('#typed-1', {
        strings: ["Помогаем авторам <br> писать книги"],
        startDelay: 500,
        loop: false,
        typeSpeed: 60
    });


// ---- Анимация

    new WOW(
        {
            mobile: false
        }
    ).init();

// Иництализаця формстайлера

    $(function() {
        $('input, select').styler();
    });

    (function(){
        if (typeof WebFont != 'undefined') {
            WebFontConfig = {
                custom: {
                    families: ['Arimo']
                },
                active: function() {
                    $('select, :checkbox, :radio').trigger('refresh');
                }
            };
            WebFont.load(WebFontConfig);
        }
    })();

    var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            loop: true
        })

/*главное меню*/

    //показ/закрытие
    function toggleMenu() {
        if ($('body').hasClass('open-menu')) {
            $('body').removeClass('open-menu');
        } else {
            $('body').addClass('open-menu');
        }
    }

    $('#menu_button').on('click', function(){
        console.log('Мы в обработчике клика по кнопке меню');
        toggleMenu();
        //return false;
    });

    /*END главное меню*/
    function fixedWidth() {
        colWidth = $('.col').width();
        $('.review-fixed').css('width', colWidth);
    }

    /*показ/скрытие хедера при скроле*/
    var currentScroll = $(window).scrollTop();
    function fixedHeader() {
        var newScroll = $(window).scrollTop();
        //console.log(newScroll);

        if ($(window).width() > 999 ) {
            if (newScroll > 0) {
                $('.review-fixed').addClass('sticky');
            } else {
                $('.review-fixed').removeClass('sticky');
            }
        }

        if (newScroll > 300) {
            $('#header').addClass('hide');
            if ($(window).width() > 999 ) {
                $('.review-fixed').addClass('top');
            }
        } else {
            $('#header').removeClass('hide');
            if ($(window).width() > 999 ) {
                $('.review-fixed').removeClass('top');
            }
        }

        //проверяем направление скрола
        if (newScroll < currentScroll) {
            //scrolling up
            $('#header').addClass('show');
            if ($(window).width() > 999 ) {
                $('.review-fixed').addClass('bottom');
            }
        } else if (newScroll > currentScroll) {
            //scrolling down
            $('#header').removeClass('show');
            if ($(window).width() > 999 ) {
                $('.review-fixed').removeClass('bottom');
            }
        }

        currentScroll = newScroll;
    }
    fixedHeader();

    //fullscreen блоки
    fullscreen();

    //инициализация placeholderов
    initPlaceholders();

    //маски ввода
    //maskedInput();


    //контентные эффекты
    contentEffect();


    $(window).on('resize', function(){
        fullscreen();
        fixedWidth();
        if ($(window).width() < 1000 ) {
            $('.review-fixed').removeClass('sticky top');
        }
    });


    $(window).on('scroll', function(){
        fixedHeader();
        fixedWidth();

        /*отзывы исправление скролла формы*/
        if ($(window).height() < 650 ) {
            $('.review-fixed').removeClass('sticky top bottom');

        }
        /*END отзывы исправление скролла формы*/

    });

});


var viewportWidth,
    viewportHeight,
    eventClick = 'click';

//получение размеров вьюпорта
function fullscreen() {
    viewportWidth  = $(window).width() * 1;
    viewportHeight = $(window).height() * 1;

    if (viewportHeight < 300) {
        viewportHeight = 300;
    }

    var headerHeight = $('#header').height() * 1;
    var height = viewportHeight - headerHeight;

    $('.fullscreen').css('height', height);

    if ($('body').hasClass('load')) {
        $('body').removeClass('load');
    }
}

//фукнция склонения
function declOfNum(number, titles) {
    cases = [2, 0, 1, 1, 1, 2];
    return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
}

//денежный формат
function number_format(number, decimals, dec_point, thousands_sep){
    var i, j, kw, kd, km;
    if( isNaN(decimals = Math.abs(decimals)) ){
        decimals = 2;
    }
    if( dec_point == undefined ){
        dec_point = ',';
    }
    if( thousands_sep == undefined ){
        thousands_sep = '.';
    }
    i = parseInt(number = (+number || 0).toFixed(decimals)) + '';
    if( (j = i.length) > 3 ){
        j = j % 3;
    } else{
        j = 0;
    }
    km = (j ? i.substr(0, j) + thousands_sep : '');
    kw = i.substr(j).replace(/(\d{3})(?=\d)/g, '$1' + thousands_sep);
    kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : '');
    return km + kw + kd;
}

function showPreloader() {
    $('#body').addClass('load');
}
function hidePreloader() {
    $('#body').removeClass('load');
}

/*контентные эффекты*/
function contentEffect() {
    var offset = 100;
    if ($('html').hasClass('touch')) {
        offset = 0;
    }
    //обертка для эффектов
    if ($('.contentEffect').length) {
        $('.contentEffect').viewportChecker({
            classToAdd: 'effectShow',
            offset: offset,
            callbackFunction: function(elem, action){
            }
        });
    }

    //для блока с цифрами
    if ($('.numberEffect').length) {
        $('.numberEffect').viewportChecker({
            classToAdd: 'effectShow',
            offset: offset,
            callbackFunction: function(elem, action){
                $(elem).find('.effect').each(function(){
                    //setTimeout(function(){
                    numEffect($(this));
                    //}, $(this).data('delay')*1);
                });
            }
        });
    }
}

$( "a.scrollLink" ).click(function( event ) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
});

//
//$(".phone_mask").mask("+7(999) 99-99-999");
//$(".phone_mask").mask("+7(999) 99-99-999");

/*анимация для цифр*/
function numEffect($obj) {
    var num = $obj.attr('data-num')*1;
    var time = $obj.attr('data-time')*1;
    $obj.animate({ num: num - 3 }, {
        duration: time,
        step: function (num){
            this.innerHTML = (num + 3).toFixed(0);
        }
    });



}