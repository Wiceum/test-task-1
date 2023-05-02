<?php

include_once('Models/messages.php');

// checkID
$strId = $_GET['id'] ?? '';
$id = (int)$strId;

$message = messagesOne($id);
$hasMsg = $message !== false; // $message !== null;

if ($hasMsg) {
    include('Views/v_message.php');
} else {
    header('HTTP/1.1 404 Not Found');
    include('Views/errors/v_404.php');
}

