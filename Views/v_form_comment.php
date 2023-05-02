<div>
    <form method="post" action="index.php/?c=comment-add">
        <input hidden name="message_id" value="<?=$message_id?>">
        <label>
            Автор:<input name="author" type="text">
            <br>
        </label>
        <label>
            <textarea name="text" placeholder="Введите текст"></textarea>
            <br>
        </label>
        <button type="submit">Отправить комментарий</button>
        <div>
            <?php foreach ($commentValidateErrors as $error): ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    </form>
</div>