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
?>
<p>
    <a href="index.php">На главную</a>
</p>
<div class="form">
    <form method="post">
        <label>
            Заголовок:
            <input type="text" name="title" value="<?= $fields['title'] ?>">
            <br>
        </label>
        <br>
        <label>
            Автор:
            <input type="text" name="author" value="<?= $fields['author'] ?>">
        </label>
        <br>
        <label>
            Краткое содержание:
            <input type="text" name="summary" value="<?= $fields['summary'] ?>">
        </label>
        <br>
        <label>
            Текст:
            <textarea name="text"><?= $fields['text'] ?></textarea>
        </label>
        <br>
        <button>Отправить</button>
        <p><?= $err ?></p>
    </form>
</div>