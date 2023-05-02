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

function formValidate(array $fields): array
{
    $errors = [];

    if (in_array('', $fields, true)) {
        $errors[] = 'Заполните все поля!';
    }

    return $errors;
}

function formSanitize($fields)
{
    foreach ($fields as $key => $field) {
        $fields[$key] = htmlspecialchars($field);
    }

    return $fields;
}