<?php
include("../include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


//
$name = $_POST['name'];
$phone = $_POST['phone'];
$insert = $pdo->prepare("INSERT INTO `orders` SET user_name=:user_name, phone=:phone");
$insert->bindParam(':user_name', $name);
$insert->bindParam(':phone', $phone);
$insert->execute();

////        уведомление на почту
require_once("../phpmailer/phpmailer/mailfunc.php");
$m_to = "svilkov87@mail.ru"; // кому - ящик (из формы)
$m_nameto = "svilkov87@mail.ru"; // Кому
$m_namefrom = $_POST['phone']; // Поле От в письме
$subj = "Новая заявка";
$tmsg = $_POST['name'];
$m_from = 'svilkov00@yandex.ru'; // от ког
$m_reply = 'svilkov00@yandex.ru'; // адрес для обратного ответа
$mail1 = phpmailer($subj, $tmsg, $m_to, $m_nameto, $m_namefrom, $m_from, $m_reply, $m_hostmail, $m_port, $m_password, $m_secure);


?>