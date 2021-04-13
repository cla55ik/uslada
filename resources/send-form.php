<?
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['phone'])) {
    $message .= 'Телефон: ' . $_POST['phone'] . ' ';
    
    $mailTo = "ivan5420@yandex.ru"; // Ваш e-mail
    $subject = "Письмо с сайта Холодец"; // Тема сообщения
    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: holodec@site.ru <holodec@site.ru>\r\n";
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Спасибо, мы свяжемся с вами в самое ближайшее время!";
    } else {
        echo "Сообщение не отправлено!";
    }
}
?>
