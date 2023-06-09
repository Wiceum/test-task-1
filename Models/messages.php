<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/Core/db.php');

function messagesAll(): array
{
    $sql = "SELECT * FROM messages ORDER BY created_at DESC";
    $query = dbQuery($sql);
    return $query->fetchAll();
}

function messagesOne(int $id)
{
    $sql = "SELECT * FROM messages WHERE id=:id";
    $query = dbQuery($sql, ['id' => $id]);
    return $query->fetch();
}

function messagesAdd(array $fields): bool
{
    $sql = "INSERT INTO messages (title, author, summary, text) VALUES (:title, :author, :summary, :text)";
    dbQuery($sql, $fields);
    return true;
}

function messagesUpdate(int $id, array $fields) : bool
{
    unset($fields['id']);
    $sql = "UPDATE messages SET title = :title, author = :author, text = :text, summary = :summary WHERE id = $id";
    dbQuery($sql, $fields);
    return true;
}

