<?php
 include 'Pusher.php';
 // include 'config.php';
 
 $text = $_POST['text'];
 $name = $_POST['name'];

 define(APP_KEY, '0d2edb0cc4800c60cdf7');
 define(APP_SECRET, '4bac48411bf759b43c8a');
 define(APP_ID, '66881');
 
 if( verify_message( $text ) ) {
   $pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
   $pusher->trigger( 'private-test_channel', 'new_message_chat', array('text' => $text, 'name' => $name) );
 }
 
 function verify_message() {
   return true;
 }
 ?>