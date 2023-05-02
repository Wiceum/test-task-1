<?php

include_once('Models/messages.php');
include_once('Models/comments.php');

$strId = $_GET['id'] ?? '';
$id = (int)$strId;

$message = messagesOne($id);
$hasMsg = $message !== false;

$comments = commentsByMessageId($id);
$commentErrors = [];

if ($hasMsg) {
    include('Views/v_message.php');
} else {
    header('HTTP/1.1 404 Not Found');
    include('Views/errors/v_404.php');
}

