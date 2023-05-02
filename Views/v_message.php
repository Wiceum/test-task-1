<h1>Блог</h1>
<a href="index.php">На главную</a>
<a href="?c=message-edit&id=<?=$message['id']?>">Редактировать</a>
<hr>
<h2><?= $message['title'] ?></h2>
<em>Автор: <?= $message['author'] ?></em>
<br>
<p><?= $message['text'] ?></p>

<br>
<hr>

<h3>Комментарии</h3>
<hr>
<?php if(!empty($comments)): ?>
<?php foreach ($comments as $comment): ?>
    <div>
        <p><?=$comment['text']?></p>
        <p><em><?=$comment['author']?>  <?=$comment['created_at']?></em></p>
    </div>
    <hr>
    <br>
<?php endforeach;?>
<?php endif; ?>

<a href="?c=comment-add&message_id=<?=$message['id']?>">Добавить комментарий</a>