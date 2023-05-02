<h1>Блог</h1>
<a href="add.php">add</a>
<hr>
<h2>Список сообщений</h2>
<hr>
<div>
    <?php foreach($messages as $message): ?>
        <div>
            <h3><?=$message['title']?></h3>
            <em><?=$message['summary']?></em>
            <br>
            <a href="message.php?id=<?=$message['id']?>">
                Подробнее...
            </a>
            <hr>
        </div>
    <?php endforeach; ?>
</div>