<?php

include_once('Models/messages.php');

$fields = ['title' => '', 'text' => ''];
$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields['title'] = trim($_POST['title']);
    $fields['text'] = trim($_POST['text']);

    if ($fields['name'] === '' || $fields['text'] === '') {
        $err = 'Заполните все поля!';
    } else {
        messagesAdd($fields);
        header('Location: index.php');
        exit();
    }
}

?>
<div class="form">
    <form method="post">
        <label>Заголовок:
            <input type="text" name="title" value="<?= $fields['title'] ?>">
            <br>
        </label>
        <br>
        <label>
        Текст:
        <br>
            <textarea name="text"><?= $fields['text'] ?></textarea>
            <br>
        </label>
        <button>Отправить</button>
        <p><?= $err ?></p>
    </form>
</div>