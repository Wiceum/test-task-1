<?php

include_once('Models/messages.php');
include_once('Core/utils.php');

$validateErrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $strId = $_GET['id'] ?? '';
    $id = (int)$strId;

    $fields = messagesOne($id);
    $hasMsg = $fields !== false;

    if ($hasMsg) {
        include('Views/v_form_message.php');
    } else {
        header('HTTP/1.1 404 Not Found');
        include('Views/errors/v_404.php');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_REQUEST, ['id', 'title', 'author', 'summary', 'text']);
    $validateErrors = formValidate($fields);
    $fields = formSanitize($fields);
    $id = $fields['id'];

    if (empty($validateErrors)) {
        messagesUpdate($id, $fields);
        header('Location: index.php');
        exit();
    }

    include('Views/v_form_message.php');
}

