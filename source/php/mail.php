<?php
    $to = "aplastyr@yandex.ru";
    $tema = "Сообщение с сайта Ничотак";
    $message = "Вам написал: ".$_POST['name']."<br>";
    $message .= "E-mail: ".$_POST['email']."<br>";
    $message .= "Номер телефона: ".$_POST['tel']."<br>";
    $message .= "Сообщение: ".$_POST['message']."<br>";
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    mail($to, $tema, $message, $headers);

    header('Refresh: 5; URL=https://nichotak.000webhostapp.com/');
    echo ('<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body><h1>Ваше сообщение отправлено!</h1>
    <p>Вскоре мы с вами свяжемся<br>
    Через 5 секунд вы вернетесь на главную страницу.</body>');
    $title = 'Сообщение отправлено';
?>
