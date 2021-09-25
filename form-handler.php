<?php

$name =$_POST['name'];
$mail =$_POST['mail'];
$phone =$_POST['phone'];
$form=$_POST['form'];


$token = "1716460969:AAFDLiLVo7Ir-JzpJzDXrxB47Zdn_QrpD-c";


$chat_id = "426883626";

$arr = array(
    'Имя:' => $name,
    'E-mail:' => $mail,
    'Телефон' => $phone,
    'Форма' => $form
);


foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

echo $text;
?>