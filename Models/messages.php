<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/Core/db.php');

function messagesAll(): array
{
    $sql = "SELECT * FROM messages ORDER BY created_at DESC";
    $query = dbQuery($sql);
    return $query->fetchAll();
}

function messagesAdd(array $fields): bool
{
    $sql = "INSERT INTO messages (title, author, summary, text) VALUES (:title, :author, :summary, :text)";
    dbQuery($sql, $fields);
    return true;
}