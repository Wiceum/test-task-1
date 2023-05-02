<?php

function extractFields(array $target, array $fields): array
{
    $res = [];

    foreach ($fields as $field) {
        $res[$field] = trim($target[$field]);
    }

    return $res;
}

function checkControllerName(string $name) : bool
{
    return !!preg_match('/^[a-z0-9-]+$/', $name);
}
