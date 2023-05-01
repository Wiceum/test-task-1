<?php

include_once('Models/messages.php');

$fields = ['title' => '', 'author' => '', 'summary' => '', 'text' => ''];
$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields['title'] = trim($_POST['title']);
    $fields['author'] = trim($_POST['author']);
    $fields['summary'] = trim($_POST['summary']);
    $fields['text'] = trim($_POST['text']);

    if (in_array('', $fields, true)) {
        $err = 'Заполните все поля!';
    } else {
        messagesAdd($fields);
        header('Location: index.php');
        exit();
    }
}

include('Views/v_add_message.php');