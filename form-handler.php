<?php

$name =$_POST['name'];
$mail =$_POST['mail'];
$phone =$_POST['phone'];
$form=$_POST['form'];
$description=$_POST['description'];

include "settings.php";

$arr = array(
    'Имя:' => $name,
    'E-mail:' => $mail,
    'Телефон' => $phone,
    'Форма' => $form,
    'Описание' => $description
);


foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
}


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

 
$message='Имя: '.$name.' \n Email: '.$mail.' \n Телефон: '.$phone.' \n Описание: '.$description;


mail("chehovich.egor@gmail.com",$form,"Имя: $name \nEmail: $mail\nТелефон: $phone\nОписание: $description");

?>