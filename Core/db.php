<?php

function dbInstance(): PDO
{
    $db = new PDO(
        'mysql:host=localhost;dbname=homestead;port=33060;charset=utf8',
        'homestead',
        'secret',
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
    return $db;
}

function dbQuery(string $sql, array $params = []) : PDOStatement
{
    $db = dbInstance();
    $query = $db->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $query;
}

function dbCheckError($query)
{
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }

    return true;
}
