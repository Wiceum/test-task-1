<?php
include('Models/comments.php');

$commentValidateErrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $strId = $_GET['message_id'] ?? '';
    $message_id = (int)$strId;  //чтобы подставить в форму
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = extractFields($_REQUEST, ['message_id','author', 'text']);
    $commentValidateErrors = formValidate($fields);
    $fields = formSanitize($fields);

    if (empty($commentValidateErrors)) {
        commentAdd($fields);
        header('Location: index.php/?c=message&id=' . $fields['message_id']);
        exit();
    }

    $message_id = $fields['message_id']; //подстановка в шаблон при ошибке
}

include('Views/v_form_comment.php');