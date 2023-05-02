<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/Core/db.php');

function commentsByMessageId(int $message_id) : array
{
    $sql = "SELECT * FROM commentaries 
                WHERE message_id=$message_id
                ORDER BY created_at DESC";
    $query = dbQuery($sql);
    return $query->fetchAll();
}

function commentAdd(array $fields) : bool
{
    $sql = "INSERT INTO commentaries (message_id, author, text) VALUES (:message_id, :author, :text)";
    dbQuery($sql, $fields);
    return true;
}

