<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: text/html; charset=utf-8');

require_once __DIR__.'/vendor/autoload.php';
require __DIR__.'/vendor/phpmailer/phpmailer/src/Exception.php';
require __DIR__.'/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require __DIR__.'/vendor/phpmailer/phpmailer/src/SMTP.php';

// Все соответствующие модальные окошки в браузере будут отправлять свои данные на этот файл mail.php
// Значит, надо разобраться, какое именно модальное окно к нам стучится.
// Сделать это можно по-разному, но я предлагаю так:
// 1. Принимаем идентификатор (id модалки) из $_POST['modal_id']
// 2. В зависимости от этого modal_id формируем переменные $body и $altbody с html-текстом письма и не-html
// Т.е. если стучится первая модалка "Написать книгу!", то modal_id у неё будет, скажем, write_book_modal
// Тогда мы формируем текст письма с переменными $name, $phone, $email
// Иначе - с другими переменными в зависимости от полей конкретной модалки.

function sendEmailToClient($clientAddress){

    if($_POST['modal_id'] == 'check_list_form'){
//        var_dump($_POST);
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";
        $mail->setFrom('hello@wineandprose.ru', 'Vine&Prose');

        $mail->addAddress($clientAddress);
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Чек-лист «Как написать книгу за 60 дней»';

        $mail->Body    = 'Привет! ' . '<br>' .
                         'Благодарим тебя за интерес и отправляем ссылку на скачивание чек-листа. ' . '<br>' .
                         'Для того чтобы скачать PDF файл с чек-листом нажми на <a href="#">эту ссылку.</a>';

        $mail->AltBody = 'Привет! ' . "\r\n" .
                         'Благодарим тебя за интерес и отправляем ссылку на скачивание чек-листа. ' . "\r\n" .
                         'Для того чтобы скачать PDF файл с чек-листом перейдите по этой ссылке - http://ссылка';

        $mail->send();
    }
//    elseif($_POST['modal_id'] == 'give_feedback_form'){
////        var_dump($_POST);
//        $mail = new PHPMailer(true);
//        $mail->CharSet = "UTF-8";
//        $mail->setFrom('wineprose@wineprose.ru', 'Vine&Prose');
//
//        $mail->addAddress($clientAddress);
//        $mail->isHTML(true);                                  // Set email format to HTML
//        $mail->Subject = 'Ваш отзыв принят';
//        $mail->Body    = 'Большое спасибо за ваш отзыв! После рассмотрения мы опубликуем его на нашем сайте!';
//        $mail->AltBody = 'Большое спасибо за ваш отзыв! После рассмотрения мы опубликуем его на нашем сайте!';
//
//        $mail->send();
//    }
//    elseif($_POST['modal_id'] == 'service_form'){
//        var_dump($_POST);
//        $mail = new PHPMailer(true);
//        $mail->CharSet = "UTF-8";
//        $mail->setFrom('wineprose@wineprose.ru', 'Vine&Prose');
//
//        $mail->addAddress($clientAddress);
//        $mail->isHTML(true);                                  // Set email format to HTML
//        $mail->Subject = 'Ваш заказ принят в ближайшее время мы свяжемся с вами';
//        $mail->Body    = '-----';
//        $mail->AltBody = '-----';
//
//        $mail->send();
    else{
        echo 'Сообщение пользователю в ответ не было отправленно!';
    }
}

// Если в $_POST вообще нет modal_id, игнорируем обращение к скрипту
if(!empty($_POST['modal_id'])) {
    /* 1-я модалка "Написать книгу!" */
    if($_POST['modal_id'] == 'write_book_form') {
        if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) ) {
//            var_dump($_POST);
            exit('Ошибка принятых данных от модального окна "Написать книгу!"');
        }else{
//            var_dump($_POST);
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            $mail->Subject = 'Заявка min '.$name;

            $body =     'Новая заявка на написание книги: ' . '<br>' .
                        'Имя: '. $name . '<br>' .
                        'Телефона: ' . $phone . '<br>' .
                        'Email: ' . $email;

            $altbody =  'Новая заявка на написание книги: ' . "\r\n" .
                        'Имя: '. $name . "\r\n" .
                        'Номер телефона: ' . $phone . "\r\n" .
                        'Email: ' . $email;
        }
//        var_dump($_POST);
    }
    /* 2-я модалка */
    elseif($_POST['modal_id'] == 'check_list_form') {

        if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email'])) {
//            var_dump($_POST);
            exit('Ошибка принятых данных от модального окна "Получить Чек Лист!"');
        }
        else{
//            if(!empty($_POST['checkbox'])){
//            var_dump($_POST['checkbox']);

            if($_POST['checkbox'] == 'true'){
                $checkbox = 'Консультация: нужна.';
            }else{
                $checkbox ='Консультация: не нужна.';
            }

            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            $mail->Subject = 'Чек лист '.$name;

            $body =     'Клиент получил чек-лист. ' . '<br>' .
                'Имя: ' . $name . '<br>' .
                'Телефон: ' . $phone . '<br>' .
                'Email: ' . $email . '<br>' . $checkbox;

            $altbody =  'Клиент получил чек-листа ' . "\r\n" .
                'Имя: '. $name . "\r\n" .
                'Номер телефона: ' . $phone . "\r\n" .
                'Email: ' . $email . "\r\n" . $checkbox;

            // Отправляем письмо с чек-листом

            sendEmailToClient($email);

            //  $fileForClient = 'Вы оставили заявку на получение Чек-листа на сайте Wine&Prose';
        }
    }
    /* 3-я модалка */
    elseif($_POST['modal_id'] == 'give_feedback_form') {
        if(empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['feedbackText'])) {
            exit('Ошибка принятых данных от модального окна "Оставить отзыв!"');
        }else{
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $feedbackText = $_POST['feedbackText'];

            $mail->Subject = 'Отзыв '.$name;

            $body =     'Поступил новый отзыв.' . '<br>' .
                'Имя: ' . $name . '<br>' .
                'Фамилия: ' . $lastname . '<br>' .
                'Номер телефона: ' . $phone . '<br>' .
                'Email: ' . $email . '<br>' .
                'Текст отзыва: ' . $feedbackText;

            $altbody =  'Поступил новый отзыв.' . "\r\n" .
                'Имя: ' . $name  . "\r\n" .
                'Фамилия: ' . $lastname  . "\r\n" .
                'Номер телефона: ' . $phone . "\r\n" .
                'Email: ' . $email  . "\r\n" .
                'Текст отзыва: ' . $feedbackText;
        }
    }
    /* Форма заказа */

    elseif($_POST['modal_id'] == 'service_form') {
        if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) ) {
            exit('Ошибка принятых данных от модального окна "Закаказ!"');
        }else{

//            var_dump($_POST);

            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
//            $selected_title = $_POST['selected_title'];
            $selected_janres = $_POST['selected_janres'];
//            $selected_additional_servicest = $_POST['selected_additional_services'];

            $mail->Subject = 'Заявка max '.$name;

            $body =     'Новая заявка на написание книги.' . '<br>' .
                'Имя: '. $name . '<br>' .
                'Номер телефона: ' . $phone . '<br>' .
                'Email: ' . $email. '<br>' . $selected_janres;
//                'Услуга: ' . $selected_title. '<br>' .
//                'Жанр: ' . $selected_janres. '<br>' .
//                'Дополнительные услуги: ' . $selected_additional_servicest;

            $altbody =  'Новая заявка на написание книги ' . $name . ' ' . $lastname . "\r\n" .
                'Имя: '. $name . "\r\n" .
                'Номер телефона: ' . $phone . "\r\n" .
                'Email: ' . $email;
        }
    }
}else{
    exit('Ошибка: не удалось определить id формы.');
}

// Проверяем, сформированы ли $body и $altbody
if(empty($body) || empty($altbody)) {
//    var_dump($body);
//    var_dump($altbody);
    exit('Ошибка формирования текста письма.');
}

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";
try {
//Server settings
//    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
//    $mail->isSMTP();                                            // Set mailer to use SMTP
//    $mail->Host       = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
//    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
//    $mail->Username   = 'user@example.com';                     // SMTP username
//    $mail->Password   = 'secret';                               // SMTP password
//    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
//    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('wineprose@wineprose.ru', 'Сайт Wine&Prose');

    $mail->addAddress('vasiliy.konnov@gmail.com');     // Add a recipient
//    $mail->addAddress('alexmase21@yandex.ru');     // Add a recipient

// Add a recipient

//    $mail->addAddress('ellen@example.com');               // Name is optional
      $mail->addReplyTo('vasiliy.konnov@gmail.com');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    // Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject ='Сообщение с сайта Wine&Prose';
    $mail->Body    = $body;
    $mail->AltBody = $altbody;

    $mail->send();
    echo 'mail_success';
} catch (Exception $e) {
    echo "Сообщение не отправлено, произошла ошибка: {$mail->ErrorInfo}";
}




?>