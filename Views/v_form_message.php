<p>
    <a href="index.php">На главную</a>
</p>
<div class="form">
    <form method="post">
        <input hidden name="id" value="<?= $fields['id'] ?? ''?>">
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
        <div>
            <?php foreach ($validateErrors as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    </form>
</div>
<pre>
    <?php
    print_r($_SERVER['REQUEST_METHOD'] . PHP_EOL);
    var_dump($validateErrors);?>
</pre>