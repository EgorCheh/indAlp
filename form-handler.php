<?php
function getIp() {
    $keys = [
      'HTTP_CLIENT_IP',
      'HTTP_X_FORWARDED_FOR',
      'REMOTE_ADDR'
    ];
    foreach ($keys as $key) {
      if (!empty($_SERVER[$key])) {
        $ip = trim(end(explode(',', $_SERVER[$key])));
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
          return $ip;
        }
      }
    }
  }

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
};

if($form=='')

{
    $ip = getIp();

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={bot-$ip}","r");
}
else{
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    $message='Имя: '.$name.' \n Email: '.$mail.' \n Телефон: '.$phone.' \n Описание: '.$description;
    mail("info.indalplv@gmail.com",$form,"Имя: $name \nEmail: $mail\nТелефон: $phone\nОписание: $description");
}


?>