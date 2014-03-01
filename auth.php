<?php

include 'Pusher.php';
 // include 'config.php';
 
 $text = $_POST['text'];

 define(APP_KEY, '0d2edb0cc4800c60cdf7');
 define(APP_SECRET, '4bac48411bf759b43c8a');
 define(APP_ID, '66881');
 
 $pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);

 $socket_id = $_POST['socket_id'];
 $channel_name = $_POST['channel_name'];

 $auth = $pusher->socket_auth($channel_name, $socket_id);

 echo $auth;

?>