<?php
include_once('Models/messages.php');
$messages = messagesAll();

?>
<h1>Блог</h1>
<a href="add.php">add</a>
<hr>
<h2>Список сообщений</h2>
<div>
    <?php foreach($messages as $message): ?>
        <div>
            <strong><?=$message['title']?></strong>
            <em><?=$message['created_at']?></em>
            <div>
                <?=$message['text']?>
            </div>
            <hr>
        </div>
    <?php endforeach; ?>
</div>