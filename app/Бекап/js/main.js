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

    function autoType(elementClass, typingSpeed){
        var thhis = $(elementClass);
        thhis.css({
            "position": "relative",
            "display": "inline-block"
        });
        thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
        thhis = thhis.find(".text-js");
        var text = thhis.text().trim().split('');
        var amntOfChars = text.length;
        var newString = "";
        thhis.text("|");
        setTimeout(function(){
            thhis.css("opacity",1);
            thhis.prev().removeAttr("style");
            thhis.text("");
            for(var i = 0; i < amntOfChars; i++){
                (function(i,char){
                    setTimeout(function() {
                        newString += char;
                        thhis.text(newString);
                    },i*typingSpeed);
                })(i+1,text[i]);
            }
        },500);
    }
    autoType(".type-js", 150);

$(".phone_mask").inputmask({"mask": "+7 (999) 99-99-999"});

console.log($('body').width());


    $('#feedback_submit').click(function(){
        var form_id = $('#write_book_form');
        $name = form_id.find("input[name='name']").val();
        $phone = form_id.find("input[name='phone']").val();
        $email = form_id.find("input[name='email']").val();
        //validate();
        if($name && $phone && $email) {
            $.post('/mail.php', {
                    modal_id : 'write_book_form',
                    name : $name,
                    phone : $phone,
                    email : $email,
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
        }
    });

//Отправляем письмо из формы Чек-лист

    $('#feedback_submit_2').click(function(){
        //validate();
        var form_id = $('#check_list_form');
        $name = form_id.find("input[name='name']").val();
        $phone = form_id.find("input[name='phone']").val();
        $email = form_id.find("input[name='email']").val();
        $checkbox = form_id.find("input[name='checkbox']").prop('checked');
        if($name && $phone && $email) {
            $.post('/mail.php', {
                    modal_id: 'check_list_form',
                    name: $name,
                    phone: $phone,
                    email: $email,
                    checkbox: $checkbox,
                    //checkbox : form_id.find("input[name='checkbox']").val(),
                },
                function (result) {
                    var message = '';
                    if (result == 'mail_success') {
                        $('.take_check-list__modal').removeClass('open_modal');
                        $('.check-list_modal').addClass('open_modal');
                    } else {
                        message = result;
                        console.log(message);
                        $('.take_check-list__modal').removeClass('open_modal');
                        $('.error_modal').addClass('open_modal');
                    }
                });
            }
        });

// Отправяем письмо из формы обратная связь

    $('#feedback_submit_3').click(function(){
        var form_id = $('#give_feedback_form');
        $name = form_id.find("input[name='name']").val();
        $lastname = form_id.find("input[name='lastname']").val();
        $phone = form_id.find("input[name='phone']").val();
        $email = form_id.find("input[name='email']").val();
        $feedbackText = form_id.find("textarea[name='feedbackText']").val();

        if($name && $lastname && $phone && $email && $feedbackText) {
            $.post('/mail.php', {
                    modal_id: 'give_feedback_form',
                    name: $name,
                    lastname: $lastname,
                    phone: $phone,
                    email: $email,
                    feedbackText: $feedbackText,
                },
                //console.log('Текст после функции отправки письма'),
                function (result) {
                    var message = '';
                    if (result == 'mail_success') {
                        $('.give_feedback__modal').removeClass('open_modal');
                        $('.feedback_checked_modal').addClass('open_modal');
                    } else {
                        message = result;
                        console.log(message);
                        $('.give_feedback__modal').removeClass('open_modal');
                        $('.error_modal').addClass('open_modal');
                    }
                });
            }
        });

// Отправяем письмо из формы сделать заказ

    $('#feedback_submit_order').click(function(){
        var form_id = $('#service_form');
        $name = form_id.find("input[name='name']").val();
        $phone = form_id.find("input[name='phone']").val();
        $email = form_id.find("input[name='email']").val();
        $selected_title = $("input[name='selected_title']").val();
        $selected_janres = $("input[name='selected_janres']").val();
        $selected_additional_services = $("input[name='selected_additional_services']").val();
        if($name && $phone && $email) {
            //alert('full');
            $.post('/mail.php', {
                    modal_id: 'service_form',
                    name: $name,
                    phone: $phone,
                    email: $email,
                    selected_title: $selected_title,
                    selected_janres: $selected_janres,
                    selected_additional_services: $selected_additional_services,
                },
                function (result) {
                    var message = '';
                    if (result == 'mail_success') {
                        window.location.href = "http://" + window.location.hostname + "/thank-you.php";
                    } else {
                        message = result;
                        console.log(message);
                        $(".modal__wrapper").removeClass("open_modal open_modal_2 open_modal_3 open_modal_4 opacity_0 opacity_1 opacity_2 opacity_3 opacity_4");
                        $('.error_modal').addClass('open_modal');
                    }
                });
        }
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
        $(".modal__wrapper").removeClass("open_modal open_modal_2 open_modal_3 open_modal_4 opacity_0 opacity_1 opacity_2 opacity_3 opacity_4");
        body_vs_modal_close();
    });

    var currentServiceSelected = '';

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
        currentServiceSelected = 'lit_mama__modal';

        body_vs_open_modal();
        $('.lit_mama__modal').addClass('open_modal');
    });

    $('.good_ghost').click(function(){
        currentServiceSelected = 'good_ghost__modal';
        body_vs_open_modal();
        $('.good_ghost__modal').addClass('open_modal');
    });

    $('.script_editor').click(function(){
        currentServiceSelected = 'script_editor__modal';
        body_vs_open_modal();
        $('.script_editor__modal').addClass('open_modal');
    });

    $('.script_consult').click(function(){
        currentServiceSelected = 'script_consult__modal';
        body_vs_open_modal();
        $('.script_consult__modal').addClass('open_modal');
    });
    $('.script_consult_2').click(function(){
        currentServiceSelected = 'script_consult__modal';
        body_vs_open_modal();
        $('.script_consult__modal').addClass('open_modal');
    });

    $('.script_correct').click(function(){
        currentServiceSelected = 'script_correct__modal';
        body_vs_open_modal();
        $('.script_correct__modal').addClass('open_modal');
    });

    $('.lit_agent').click(function(){
        currentServiceSelected = 'lit_agent__modal';
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
        currentServiceSelected = 'lit_mama__modal';
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
        currentServiceSelected = 'good_ghost__modal';
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
        currentServiceSelected = 'script_editor__modal';
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
        currentServiceSelected = 'script_correct__modal';
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
        currentServiceSelected = 'script_consult__modal';
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
        currentServiceSelected = 'lit_agent__modal';
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

    //остались вопросы слой - 1

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
        $('.open_modal').removeClass('opacity_2');
        $('.open_modal_2').removeClass('opacity_2');
        $('.make_question_last__modal').removeClass('open_modal_3');
    })
    $('.button_close_st4').click(function(){
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


// Выбираем отмеченные чекбоксы в то время когда выбираем отмеченные чекбоксы нужно ещё и заголовки выбрать уровня h3
//        $bookPrice = [];
//
//        $('.' + currentServiceSelected + ' ' + '.wrapper_janr').find('div.checked').next().find('.book_price').each(function( index ) {
//            $bookPrice[index] = $( this ).text();
//        });
//
//        console.log($bookPrice);
//
//        $bookContent = [];
//
//        $('.' + currentServiceSelected + ' ' + '.wrapper_janr').find('div.checked').next().find('.book_content').each(function( index ) {
//            $bookContent[index] = $( this ).text();
//        });
//        console.log($bookContent);



        var selectedJanres = $('.' + currentServiceSelected + ' .checked input[type="checkbox"]');



        var selectedJanresConcated = '';

//Заголовок модалки

        var title = $('.' + currentServiceSelected + ' h2').text();

        var orderResult = '<h3 class="h3">' + title + '</h3>';
        var oldBlock = '';

        $.each(selectedJanres, function(index, janr){
            var price = $(janr).parent().parent().find('.work_price').text();
            var janrBlock = $(janr).parent().parent().parent();

            if (!$(janrBlock).hasClass('processed-once')) {


                if ($(janrBlock).find('h3').length) {
                    var title = $(janrBlock).find('h3').text();
                    orderResult += '<p><b>' + title + '</b></p>';
                }

                var subTitle = $(janrBlock).find('.subtitle').text();


                orderResult += '<p><i>' + subTitle + '</i></p>';
                $(janrBlock).addClass('processed-once')
            }

            orderResult += '<p>' + price + '</p>';
            selectedJanresConcated += price + ';';
        })

        var additionalServices = $('.modal_choose_service .checked input[type="checkbox"]');
        var additionalServicesConcated = '';

        if (additionalServices) {
            orderResult += '<h3 class="h3">Дополнительные услуги</h3>';
            $.each(additionalServices, function(index, service){
                var title = $(service).parent().parent().parent().find('h3').text();
                var price = $(service).parent().parent().parent().find('.price').text();

                orderResult += '<p><b>' + title + '</b></p>';
                orderResult += '<p>' + price + '</p>';
                //additionalServicesConcated += value + ';';

            })
        }

        $('.order_result').html(orderResult);


        $('input[name="selected_janres"]').val(orderResult);
        //$('input[name="selected_additional_services"]').val(additionalServicesConcated);
        //$('input[name="selected_title"]').val(title);

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
        $('.make_request__modal').removeClass('open_modal_3');
        $('.open_modal').removeClass('opacity_2');
        $('.open_modal_2').removeClass('opacity_2');
    })
    $('.button_close_st3').click(function(){
        $('.make_request__modal').removeClass('open_modal_3');
        $('.hidden').removeClass('opacity_2');
    })

//-------------------------------------------------------------
//
//    var typed = new Typed('#typed-1', {
//        strings: ["Помогаем авторам <br> писать бестселлеры"],
//        startDelay: 500,
//        loop: false,
//        typeSpeed: 60
//    });


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