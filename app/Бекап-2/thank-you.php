<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Тайтл</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libs/css/swiper.min.css">
    <link rel="stylesheet" href="libs/css/animate.css">
    <link rel="stylesheet" href="libs/css/simplebar.min.css">
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body load">
<div class="menu-mobile">
    <a class="scrollLink" href="#service_anchor">Услуги</a>
    <a class="scrollLink" href="#company_anchor">Об агенстве</a>
    <a class="scrollLink" href="#reviews_anchor">Отзывы</a>
    <a class="scrollLink" href="#blog_anchor">Блог</a>
    <div class="sicial-icon">
        <a href="#" class="vk"></a>
        <a href="#" class="inst"></a>
    </div>
</div>
<header id="header" class="header show">
    <div class="header-wrapper">
        <div class="logo">
            <a href="/"><img src="img/logo.svg" alt=""></a>
        </div>
        <nav class="main-menu">
            <a class="scrollLink" href="#service_anchor">Услуги</a>
            <a class="scrollLink" href="#company_anchor">Об агенстве</a>
            <a class="scrollLink" href="#reviews_anchor">Отзывы</a>
            <a class="scrollLink" href="#blog_anchor">Блог</a>
        </nav>
        <a id="menu_button" class="menu-button">
                <span class="ico">
                    <i class="line l1"></i>
                    <i class="line l2"></i>
                    <i class="line l3"></i>
                </span>
        </a>
        <div class="callback-header">
            <a href="#" class="inst inst-header"></a>
            <a href="#" class="vk vk-header"></a>
            <a class="header-button how_connect">Связаться с нами</a>
        </div>
    </div>
</header>
<div class="main-wrapper">

<!-- 1 блок-->

        <div class="flex-container">
            <div class="col w50">
                <div class="wrapper-text">
                    <h2 class="h2">Спасибо за обращение!</h2>
                    <p>Мы свяжемся с вами через 15 минут!</p>
                    <p>Ответим на вопросы, расскажем о наших услугах, спросим как дела и пожелаем всего доброго :)</p>
                    <p>А пока ты можешь <a href="#" class="link-on-blog">почитать наш блог</a></p>
                </div>
            </div>
            <div class="col w50">
                <div class="img-item" style='background-image: url("img/new-page.png"); '>
                </div>
            </div>
        </div>


    <!-- Мои модальные окна -->

    <div class="modal__wrapper  write_book__modal hidden">
        <div data-simplebar class="modal_center__container">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Написать книгу!</h2>
            <p class="modal_text">Давай напишем хорошую книгу!</br>
                Оставь заявку. Мы свяжемся и все обсудим.</p>

            <div class="error_div"></div>
            <form  name="mail_form">
                <label class="field">
                    <input type="text" required name="name" class="input-text placeholder validate" data-validate="required" data-placeholder="Ваше имя">
                </label>
                <label class="field">
                    <input type="tel" required name="phone" class="input-phone placeholder validate" data-validate="required" data-placeholder="Телефон">
                </label>
                <label class="field">
                    <input type="email" required name="email" class="input-email placeholder validate" data-validate="required" data-placeholder="E-mail">
                </label>

                <div class="form__button-wrapper">
                    <button id="feedback_submit" type="button" class="submit form__pink-button">Оставить заявку сразу</button>
                    <a class="choose-sevice take_service_inner">Выбрать услугу</a>
                </div>

                <p class="form_info">Нажимая на кнопку "Оставить заявку" вы даёте согласие на обработку персональных данных в соответствии с политикой конфиденциальности</p>

                <!--<div class="success-form">-->
                <!--<div class="table-block">-->
                <!--<div class="cell ">Сообщение успешно отправлено!</div>-->
                <!--</div>-->
                <!--</div>-->
            </form>
        </div>
    </div>

    <!-- 2 modal-contact-us -->

    <div class="modal__wrapper hidden how_connect__modal">
        <div data-simplebar class="modal_center__container">
            <div class="button_close">Закрыть <i class="close-icon"></i></div>
            <h2 class="h2">Как ты хочешь с нами связаться?</h2>
            <p class="modal_text">Давай напишем хорошую книгу!</br>
                Оставь заявку. Мы свяжемся и все обсудим.</p>
            <a href="tel:+79645154789" class="choose_connect phone-icon">Позвонить +7 (926) 434 86 43</a>
            <a href="https://msng.link/wa/79645154789" class="choose_connect whatsapp-icon">Написать в WhatsApp</a>
            <a href="https://msng.link/vi/79645154789" class="choose_connect viber-icon">Написать в Viber</a>
            <a href="https://msng.link/vk/iam_mase" class="choose_connect vk-icon">Написать в Vk</a>
        </div>
    </div>

    <!-- 3 modal-contact-us -->

    <div class="modal__wrapper hidden take_check-list__modal">
        <div data-simplebar class="modal_center__container">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Получить чек лист</h2>
            <p class="modal_text">Заполни форму и мы сразу отправим чек-лист тебе на e-mail. Бесплатно и быстро!</p>
            <form action="" method="">
                <label class="field">
                    <input type="text" name="name" required class="input-text placeholder validate" data-validate="required" data-placeholder="Ваше имя">
                </label>
                <label class="field">
                    <input type="tel" required name="phone" class="input-phone placeholder validate" data-validate="required" data-placeholder="Телефон">
                </label>
                <label class="field">
                    <input type="text" required name="email" class="input-email placeholder validate" data-validate="required" data-placeholder="E-mail">
                </label>
                <label class="form_chekbox">
                    <input type="checkbox" checked> Еще мне нужна консультация
                </label>

                <div class="form__button-wrapper">
                    <button id="feedback_submit" class="submit form__pink-button block-center">Получить бесплатно</button>
                    <!--<a href="#" class="choose-sevice">Выбрать услугу</a>-->
                </div>

                <p class="form_info">Нажимая на кнопку "Оставить заявку" вы даёте согласие на обработку персональных данных в соответствии с политикой конфиденциальности</p>

                <!--<div class="success-form">-->
                <!--<div class="table-block">-->
                <!--<div class="cell ">Сообщение успешно отправлено!</div>-->
                <!--</div>-->
                <!--</div>-->
            </form>
        </div>
    </div>


    <!-- 4 modal-contact-us -->

    <div class="modal__wrapper hidden give_feedback__modal">
        <div data-simplebar class="modal_center__container feedback_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Оставить отзыв</h2>
            <p class="modal_text">Заполни форму и после прочтения мы опубликуем ваш отзыв</p>
            <form action="" method="">
                <label class="field">
                    <input type="text" required name="name" class="input-text placeholder validate" data-validate="required" data-placeholder="Ваше имя">
                </label>
                <label class="field">
                    <input type="text" required name="lastname" class="input-text placeholder validate" data-validate="required" data-placeholder="Фамилия">
                </label>
                <label class="field">
                    <input type="tel" required name="phone" class="input-phone placeholder validate" data-validate="required" data-placeholder="Телефон">
                </label>
                <label class="field">
                    <input type="email" required name="email" class="input-email placeholder validate" data-validate="required" data-placeholder="E-mail">
                </label>
                <label class="field">
                    <textarea type="feedback" required name="feedback" class="input-email placeholder validate" data-validate="required" data-placeholder="Ваш отзыв"></textarea>
                </label>
                <!--<label class="form_chekbox">-->
                <!--<input type="checkbox" checked> Еще мне нужна консультация-->
                <!--</label>-->

                <div class="form__button-wrapper">
                    <button id="feedback_submit" class="submit form__pink-button block-center">Оставить отзыв</button>
                    <!--<a href="#" class="choose-sevice">Выбрать услугу</a>-->
                </div>

                <p class="form_info">Нажимая на кнопку "Оставить заявку" вы даёте согласие на обработку персональных данных в соответствии с политикой конфиденциальности</p>

                <!--<div class="success-form">-->
                <!--<div class="table-block">-->
                <!--<div class="cell ">Сообщение успешно отправлено!</div>-->
                <!--</div>-->
                <!--</div>-->
            </form>
        </div>
    </div>

    <!-- 5 modal-contact-us -->

    <div class="modal__wrapper hidden">
        <div data-simplebar class="modal_center__container check-list_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2 vs_check_icon"><i></i> Чек-лист отправлен</h2>
            <p class="modal_text">Мы отправили чек лист на указанную почту, письмо должно прийти в течении 5 минут.</p>
        </div>
    </div>

    <!-- 6 modal-contact-us -->

    <div class="modal__wrapper hidden">
        <div data-simplebar class="modal_center__container feedback_cheked_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2 vs_check_icon"><i></i>Отзыв принят</h2>
            <p class="modal_text">Спасибо за отзыв, скоро мы его опубликуем.</p>
        </div>
    </div>
    <!-- 6.1 modal-contact-us -->

    <div class="modal__wrapper hidden error_modal">
        <div data-simplebar class="modal_center__container feedback_cheked_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2 vs_check_icon">Произошла ошибка на сервере</h2>
            <p class="modal_text">Попробуйте отправить сообщение ещё раз.</p>
        </div>
    </div>

    <!-- 7 modal-contact-us -->

    <div class="modal__wrapper hidden lit_mama__modal">
        <div data-simplebar class="modal_center__container right_stuck_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Литература мама</h2>
            <p class="modal_text">Личный коучинг автора.</p>

            <div class="img_in_modal" style="background-image: url('img/1-rectangle.png')"></div>

            <p>Определяем цели, выстраиваем стратегию, выбираем каналы дистрибуции книги. Ежедневно выполняем план и еженедельно встречаемся для обсуждения результатов. Мы создали систему, в которой вы не сможете не написать хорошую книгу. </p>
            <p>В пакет услуги включено литературное редактирование рукописи на всех этапах, а также авторские методики работы с текстом.</p>
            <p>Ты можешь прийти к нам просто с идей, уже с половиной книги или с готовой рукописью. Персональный коуч поможет подготовить всё необходимое для выхода книги в свет.</p>

            <form action="#">

                <div class="wrapper_janr">
                    <h3 class="h3">Художественная литература</h3>
                    <p>Сложные жанры (фантастика, фэнтази, исторический роман, авангардная литература)</p>

                    <label><input type="checkbox" class="chekbox_rd_button" val="100 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="200 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="300 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>
                </div>
                <div class="wrapper_janr">
                    <p>Простые жанры (детектив, любовный роман, мистика, приключения, триллер, боевик)</p>

                    <label><input type="checkbox" class="chekbox_rd_button" val="100 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="200 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="300 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>
                </div>
                <div class="wrapper_janr">
                    <h3 class="h3">Нон-фикшн</h3>
                    <p>Нехудожественная литература</p>

                    <label><input type="checkbox" class="chekbox_rd_button" val="100 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="200 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="300 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>
                </div>

                <div class="form__button-wrapper block-center">
                    <a id="feedback_submit" class="submit  make_request form__pink-button">Оформить заявку</a>
                    <!--<button id="feedback_submit" class="submit form__pink-button">Оформить заявку</button>-->
                    <a class="have_question make_question">У меня есть вопросы</a>
                </div>
            </form>
            <div class="mb-desc-120"></div>
        </div>
    </div>




    <!-- 8 modal-contact-us -->

    <div class="modal__wrapper hidden good_ghost__modal">
        <div data-simplebar class="modal_center__container right_stuck_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Добрый призрак</h2>
            <p class="modal_text">Сделаем все за тебя. Тайно и красиво.</p>

            <div class="img_in_modal" style="background-image: url('img/2-rectangle.png')"></div>

            <p>Наши редакторы пишут книги нон-фикшн на заказ. У тебя есть идея, желание рассказать о своей профессиональной деятельности или просто настало время повысить свою экспертность, сделать имя на рынке. Мы оформим твои мысли на бумаге. </p>
            <p>Сначала через журналистский опрос соберём фактический материал, затем напишем и согласуем с тобой черновик. Возможно, еще один черновик, отредактируем и отдадим корректору на вычитку. В итоге ты получишь книгу и сэкономишь время.</p>

            <form action="#">

                <div class="wrapper_janr">
                    <h3 class="h3">Нон-фикшен</h3>
                    <p>Не художественная литература</p>

                    <label><input type="checkbox" class="chekbox_rd_button" val="100 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="200 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="300 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>
                </div>
                <div class="wrapper_janr">
                    <h3 class="h3">Мемуары</h3>

                    <label><input type="checkbox" class="chekbox_rd_button" val="100 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="200 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>

                    <label><input type="checkbox" class="chekbox_rd_button" val="300 стр. / 1,5 месяца - 123 456 руб."> <p class="work_price"><span class="book_content">100 стр. / 1,5 месяца</span><span class="book_price">123 456 руб.</span></p></label>
                </div>

                <div class="form__button-wrapper block-center">
                    <a id="feedback_submit" class="submit make_request make_request form__pink-button">Оформить заявку</a>
                    <!--<button id="feedback_submit" class="submit form__pink-button">Оформить заявку</button>-->
                    <a class="have_question make_question">У меня есть вопросы</a>
                </div>
            </form>
            <div class="mb-desc-120"></div>
        </div>
    </div>

    <!-- 9 modal-contact-us -->

    <div class="modal__wrapper hidden script_editor__modal">
        <div data-simplebar class="modal_center__container right_stuck_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Редактура рукописи</h2>
            <p class="modal_text">Проверим чёткость мысли. Нужен текст для подзаголовка.</p>

            <div class="img_in_modal" style="background-image: url('img/3-rectangle.png')"></div>

            <p>Наши редакторы пишут книги нон-фикшн на заказ. У тебя есть идея, желание рассказать о своей профессиональной деятельности или просто настало время повысить свою экспертность, сделать имя на рынке. Мы оформим твои мысли на бумаге. Профессиональный редактор — не соавтор книги. Это первый читатель и первый критик, который поможет автору ответить на вопрос «А всё ли понятно в моей рукописи?».</p>
            <p>Редактор — это связующее звено между читателем и автором, он смотрит на книгу свежим взглядом, находит проблемные места, доводит текст до ума, и, конечно, до издательства.</p>
            <p>Оставь заявку и мы проконсультируем об услуге.</p>

            <form action="#">
                <div class="form__button-wrapper block-center">
                    <a id="feedback_submit" class="submit make_request form__pink-button">Оформить заявку</a>
                    <!--<button id="feedback_submit" class="submit form__pink-button">Оформить заявку</button>-->
                    <a class="have_question make_question">У меня есть вопросы</a>
                </div>
            </form>
            <div class="mb-desc-120"></div>
        </div>
    </div>

    <!-- 10 modal-contact-us -->

    <div class="modal__wrapper hidden script_correct__modal">
        <div data-simplebar class="modal_center__container right_stuck_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Корректура рукописи</h2>
            <p class="modal_text">Нужен текст для подзаголовка.</p>

            <div class="img_in_modal" style="background-image: url('img/4-rectangle.png')"></div>

            <p>Многие писатели допускают ошибки в своих рукописях. Сегодня одна запятая не на своем месте может решить судьбу заявки в издательстве, собрать сотню негативных комментариев в социальных сетях или показать тебя в невыгодном свете.</p>
            <p>Зачем тебе такой риск, если профессионалы своего дела вычитают и оформят книгу по стандартам русского языка? Никаких сомнений, только результат.</p>
            <p>Никаких сомнений, только результат. Оставь свои контакты и мы проконсультируем об услуге.</p>

            <form action="#">
                <div class="form__button-wrapper block-center">
                    <a id="feedback_submit" class="submit make_request form__pink-button">Оформить заявку</a>
                    <!--<button id="feedback_submit" class="submit form__pink-button">Оформить заявку</button>-->
                    <a class="have_question make_question">У меня есть вопросы</a>
                </div>
            </form>
            <div class="mb-desc-120"></div>
        </div>
    </div>


    <!-- 11 modal-contact-us -->

    <div class="modal__wrapper hidden script_consult__modal">
        <div data-simplebar class="modal_center__container right_stuck_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Консультация рукописи</h2>
            <p class="modal_text">Нужен текст для подзаголовка.</p>

            <div class="img_in_modal" style="background-image: url('img/3-rectangle.png')"></div>

            <p>Профессиональный редактор — не соавтор книги. Это первый читатель и первый критик, который поможет автору ответить на вопрос «А всё ли понятно в моей рукописи?». </p>
            <p>Редактор — это связующее звено между читателем и автором, он смотрит на книгу свежим взглядом, находит проблемные места, доводит текст до ума, и, конечно, до издательства. </p>
            <p>Оставь заявку и мы проконсультируем об услуге.</p>

            <form action="#">
                <div class="form__button-wrapper block-center">
                    <a id="feedback_submit" class="submit  make_request form__pink-button">Оформить заявку</a>
                    <!--<button id="feedback_submit" class="submit form__pink-button">Оформить заявку</button>-->
                    <a class="have_question make_question">У меня есть вопросы</a>
                </div>
            </form>
            <div class="mb-desc-120"></div>
        </div>
    </div>

    <!-- 12 modal-contact-us -->

    <div class="modal__wrapper hidden lit_agent__modal">
        <div data-simplebar class="modal_center__container right_stuck_modal">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Литературный агент</h2>
            <p class="modal_text">Нужен текст для подзаголовка.</p>

            <div class="img_in_modal" style="background-image: url('img/6-rectangle.png')"></div>

            <p>Мы не можем гарантировать издание той или иной книги, но можем сделать максимум, чтобы это важное событие имело место быть.</p>
            <p>Издательский рынок живет трендами, не малую роль играет и твоя популярность, поэтому услуги литературного агента оплачиваются только после подписания договора в издательстве.</p>
            <p>Наши агенты берут 20% от сделки.</p>

            <form action="#">
                <div class="form__button-wrapper block-center">
                    <a id="feedback_submit" class="submit make_request form__pink-button">Оформить заявку</a>
                    <!--<button id="feedback_submit" class="submit form__pink-button">Оформить заявку</button>-->
                    <a class="have_question make_question">У меня есть вопросы</a>
                </div>
            </form>
            <div class="mb-desc-120"></div>
        </div>
    </div>

    <!-- 12 modal-contact-us -->

    <div class="modal__wrapper hidden take_question__modal">
        <div data-simplebar class="modal_center__container right_stuck_modal">
            <div class="button_close_st2">Закрыть <i class="close-icon"></i> </div>
            <div class="button_prev_modal_st2"><i class="back-icon"></i> Назад</div>
            <h2 class="h2">Остались вопросы? Ответим на все.</h2>
            <p class="modal_text">Выбирай удобный способ связи. И мы постораемся все решить.</p>
            <a href="tel:+79645154789" class="choose_connect phone-icon">Позвонить +7 (926) 434 86 43</a>
            <a href="https://msng.link/wa/79645154789" class="choose_connect whatsapp-icon">Написать в WhatsApp</a>
            <a href="https://msng.link/vi/79645154789" class="choose_connect viber-icon">Написать в Viber</a>
            <a href="https://msng.link/vk/iam_mase" class="choose_connect vk-icon">Написать в Vk</a>
            <div class="mb-desc-120"></div>
        </div>
    </div>

    <div class="modal__wrapper hidden make_question_last__modal">
        <div data-simplebar class="modal_center__container right_stuck_modal">
            <div class="button_close_st4">Закрыть <i class="close-icon"></i> </div>
            <div class="button_prev_modal_st4"><i class="back-icon"></i> Назад</div>
            <h2 class="h2">Остались вопросы? Ответим на все.</h2>
            <p class="modal_text">Выбирай удобный способ связи. И мы постораемся все решить.</p>
            <a href="tel:+79058970276" class="choose_connect phone-icon">Позвонить +7 (926) 434 86 43</a>
            <a href="https://msng.link/wa/79058970276" class="choose_connect whatsapp-icon">Написать в WhatsApp</a>
            <a href="https://msng.link/vi/79058970276" class="choose_connect viber-icon">Написать в Viber</a>
            <a href="https://msng.link/vk/vasily_konnov" class="choose_connect vk-icon">Написать в Vk</a>
            <div class="mb-desc-120"></div>
        </div>
    </div>

    <!-- 13 set-modal -->

    <div class="modal__wrapper hidden take_service__modal">
        <div data-simplebar class="modal_chuse_service">

            <div class="header-modal">
                <div class="button_close">Закрыть <i class="close-icon"></i> </div>
                <!--<div class="button_prev_modal"><i class="back-icon"></i> Назад</div>-->
                <h2 class="h2">Выбрать услугу</h2>
            </div>

            <div class="body_modal">
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: url('img/1-service.png')"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Литература мама</h3>
                        <p>Консультируем и сопровождаем авторов<br> от идеи до результата.</p>
                        <div class="price">от 150 000 руб.</div>
                        <a class="more lit_mama_inner">Выбрать</a>

                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: url('img/2-service.png')"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Добрый призрак</h3>
                        <p>Для того, кто гений в другой области. Специально обученные филологи<br> напишут книгу за тебя. Не отвлекайся от свершений.</p>
                        <div class="price">от 300 000 руб.</div>
                        <a class="more good_ghost_inner">Выбрать</a>

                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: #7D546D"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Редактура рукописи</h3>
                        <p>Консультируем и сопровождаем авторов<br> от идеи до результата.</p>
                        <div class="price">от 150 000 руб.</div>
                        <a class="more script_editor_inner">Выбрать</a>

                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: #F1E1D4"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Корректура рукописи</h3>
                        <p>Консультируем и сопровождаем авторов<br> от идеи до результата.</p>
                        <div class="price">от 150 000 руб.</div>
                        <a class="more script_correct_inner">Выбрать</a>
                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: #86394F"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Консультация рукописи</h3>
                        <p>Нужно краткое описание</p>
                        <div class="price">от 150 000 руб.</div>
                        <a class="more script_consult_inner">Выбрать</a>
                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: #9EB2AE"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Литературный агент</h3>
                        <p>Консультируем и сопровождаем авторов от идеи до результата.</p>
                        <div class="price">20% от сделки</div>
                        <a class="more lit_agent_inner">Выбрать</a>
                    </div>
                </div>
            </div>

            <div class="footer_modal">
                <h3 class="h3">Я не знаю что мне нужно</h3>
                <p>Проконсультируем и поможем с выбором</p>
                <a class="more take_question">Попросить консультацию</a>
                <div class="pb-20"></div>
            </div>

        </div>
    </div>

    <!---->

    <div class="modal__wrapper hidden  make_request__modal">
        <div data-simplebar class="modal_chuse_service">

            <div class="header-modal">
                <div class="button_close_st3">Закрыть <i class="close-icon"></i> </div>
                <div class="button_prev_modal_st3"><i class="back-icon"></i> Назад</div>
                <h2 class="h2">Выбрать дополнительные услуги</h2>
            </div>

            <div class="body_modal">
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: #7D546D"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Редактура рукописи</h3>
                        <p>Консультируем и сопровождаем авторов<br> от идеи до результата.</p>
                        <div class="price">от 150 000 руб.</div>
                        <label class="text_service-input">Выбрать <input type="checkbox" val="Редактура рукописи - от 150 000 руб."></label>
                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: #F1E1D4"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Корректура рукописи</h3>
                        <p>Консультируем и сопровождаем авторов<br> от идеи до результата.</p>
                        <div class="price">от 150 000 руб.</div>
                        <label class="text_service-input">Выбрать <input type="checkbox" val="Корректура рукописи - от 150 000 руб."></label>
                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: #86394F"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Консультация рукописи</h3>
                        <p>Нужно краткое описание</p>
                        <div class="price">от 150 000 руб.</div>
                        <label class="text_service-input">Выбрать <input type="checkbox" val="Консультация рукописи - от 150 000 руб."></label>
                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="modal_img_service" style="background: #9EB2AE"></div>
                    <div class="modal_text_service">
                        <h3 class="h3">Литературный агент</h3>
                        <p>Консультируем и сопровождаем авторов от идеи до результата.</p>
                        <div class="price">20% от сделки</div>
                        <label class="text_service-input">Выбрать <input type="checkbox" val="Литературный агент - от 150 000 руб."></label>
                    </div>
                </div>
                <div class="modal_wrapper_service">
                    <div class="block-center mtb-40px">
                        <a class="pink-button take_order">Продолжить</a>
                    </div>
                </div>
            </div>
            <div class="footer_modal">
                <h3 class="h3">Я не знаю что мне нужно</h3>
                <p>Проконсультируем и поможем с выбором</p>
                <a class="more make_question_last">Попросить консультацию</a>
                <div class="pb-20"></div>
            </div>

        </div>
    </div>

    <!--    -->

    <div class="modal__wrapper hidden take_order__modal">
        <div data-simplebar class="modal_chuse_service">
            <div class="header-modal">
                <div class="button_close_st4">Закрыть <i class="close-icon"></i></div>
                <div class="button_prev_modal_st4"><i class="back-icon"></i> Назад</div>
                <h2 class="h2">Оставить заявку</h2>
            </div>
            <div class="order_result">
                <p><span>Услуга:</span> Литература мама</p>
                <p><span>Жанр:</span> Художественная литература (сложные жанры)</p>
                <p><span>Кол-во страниц:</span> 100 страниц</p>
                <p><span>Стоимость:</span> 123 456 руб.</p>
                <p><span>Срок:</span> 2,5 мес.</p>
                <p><span>Доп. услуги:</span> Редактура рукописи</p>
            </div>
            <div class="body_modal_order_result">
                <form action="" method="">
                    <label class="field">
                        <input type="text" required name="name" class="input-text placeholder validate" data-validate="required" data-placeholder="Ваше имя">
                    </label>
                    <label class="field">
                        <input type="tel" required name="phone" class="input-phone placeholder validate" data-validate="required" data-placeholder="Телефон">
                    </label>
                    <label class="field">
                        <input type="text" required name="email" class="input-email placeholder validate" data-validate="required" data-placeholder="E-mail">
                    </label>
                    <label class="form_chekbox">
                        <!--<input type="checkbox" checked> Еще мне нужна консультация-->
                    </label>
                    <div class="form__button-wrapper">
                        <button id="feedback_submit" class="submit form__pink-button block-center">Получить бесплатно</button>
                        <!--<a href="#" class="choose-sevice">Выбрать услугу</a>-->
                    </div>

                    <p class="form_info">Нажимая на кнопку "Оставить заявку" вы даёте согласие на обработку персональных данных в соответствии с политикой конфиденциальности</p>
                </form>
                <div class="pb-20"></div>
            </div>
        </div>
    </div>


    <!---->


    <div class="modal__wrapper hidden polit_conf__modal">
        <div data-simplebar class="modal_center__container politic-konf">
            <div class="button_close">Закрыть <i class="close-icon"></i> </div>
            <h2 class="h2">Политика конфиденциальности</h2>
            <p class="modal_text">Настоящая Политика в области обработки персональных данных и конфиденциальности персональной информации (далее — Политика) действует в отношении всей информации, которую ООО «Сноб Медиа» и/или ее аффилированные лица, включая все лица, входящие в одну группу с ООО «Сноб Медиа», могут получить о пользователе во время использования им любого из сайтов, сервисов, служб, программ и продуктов ООО «Сноб Медиа» (далее — Сервисы), а также в ходе исполнения ООО «Сноб Медиа» / его аффилированными лицами любых соглашений и договоров, заключенных с пользователем в связи с использованием Сервисов. Согласие пользователя на предоставление персональных данных (персональной информации), данное им в соответствии с настоящей Политикой в рамках отношений с одним из лиц, входящих в группу лиц ООО «Сноб Медиа», распространяется на все лица, входящие в данную группу лиц.</p>
            <p class="modal_text">Использование Сервисов означает безоговорочное согласие пользователя с настоящей Политикой и указанными в ней условиями обработки его персональной информации, а именно на совершение действий, предусмотренных п. 3 ч. 1 ст. 3 Федерального закона от 27.07.2006 N 152-ФЗ "О персональных данных" как без, так и с использованием средств автоматизации, и подтверждает, что, давая такое согласие, он действует свободно, своей волей и в своем интересе; в случае несогласия с этими условиями пользователь должен воздержаться от использования Сервисов.</p>
        </div>
    </div>

</div>
<footer>
    <div class="footer-wrapper">
        <div class="footer_item-1"><p>Литературное агенство "Wine&Prose"<br> Все права защищены © 2019 </p></div>
        <div class="footer_item-2"><p class="footer-logo"><a href="#">Сайт сделан</a> <a class="lf-img" href="#"></a></p></div>
        <div class="footer_item-3"><a class="polit_conf">Политика конфеденциальности</a></div>
    </div>
</footer>
<script src="libs/js/jquery-3.3.1.min.js?v=1"></script>
<script src="js/plugins/jquery.formstyler.min.js"></script>
<script src="libs/js/swiper.min.js"></script>
<script src="libs/js/simplebar.js"></script>
<script src="libs/js/wow.min.js"></script>
<script src="js/form.js"></script>
<script src="js/js-thank-you.js?v=1"></script>
</body>
</html>