<?php
include_once('Models/messages.php');
$messages = messagesAll();

?>
<h1>Блог</h1>
<a href="add.php">add</a>
<hr>
<h2>Список сообщений</h2>
<hr>
<div>
    <?php foreach($messages as $message): ?>
        <div>
            <h3><?=$message['title']?></h3>
            Автор:<?=$message['author']?>
            <br>
            <em><?=$message['summary']?></em>
            <hr>
        </div>
    <?php endforeach; ?>
</div>