<?php 
// Отправка заказа на почту test@mail.com
$name = stripslashes(htmlspecialchars($_REQUEST['name']));
$phone = stripslashes(htmlspecialchars($_REQUEST['phone']));
$subject = 'Заказ товара c сайта!'; // заголовок письмя
$addressat = "test@mail.com"; // Ваш Электронный адрес
$success_url = './form-ok.php?name='.$name.'&phone='.$phone.'&time='.date("Y-m-d H:i:s").'';
$message = "ФИО: {$name}\nКонтактный телефон: {$phone}\nТовар: {$_REQUEST['product_id']}";
$verify = mail($addressat,$subject,$message,"Content-type:text/plain;charset=utf-8\r\n");
if ($verify == 'true'){ //если письмо отправлено
    header('Location: '.$success_url); //редирект на страницу спасибо
    echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
    exit;
}
?>