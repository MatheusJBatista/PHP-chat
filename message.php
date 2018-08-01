<?php
require __DIR__ . "/vendor/autoload.php";

  $options = array(
    'cluster' => 'us2',
    'encrypted' => true
  );
  $pusher = new Pusher\Pusher(
    '46c60cd1b2ae910d3b08',
    '1c027bf2a9a76d54cb49',
    '567661',
    $options
  );

  $pusher->trigger('message', 'send-message', array('message' => $_POST['message']));