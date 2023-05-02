<h1>Блог</h1>
<a href="index.php">На главную</a>
<a href="?c=message-edit&id=<?=$message['id']?>">Редактировать</a>
<hr>
<h2><?= $message['title'] ?></h2>
<em>Автор: <?= $message['author'] ?></em>
<br>
<p><?= $message['text'] ?></p>