<?php
$fio = $_POST['tel'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("vlasov_anvar_t@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: vlasov_anvar_t@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>