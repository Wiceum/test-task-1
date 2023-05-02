<?php

include_once('Models/messages.php');
include_once('Core/utils.php');

$fields = array_fill_keys(['title', 'author', 'summary', 'text'], '');
$validateErrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_POST, ['title', 'author', 'summary', 'text']);
    $validateErrors = formValidate($fields);
    $fields = formSanitize($fields);

    if (empty($validateErrors)) {
        messagesAdd($fields);
        header('Location: index.php');
        exit();
    }
}

include('Views/v_form_message.php');