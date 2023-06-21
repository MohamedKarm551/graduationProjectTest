<?php

use JetBrains\PhpStorm\NoReturn;

defined("__secret__Constant__") or die("no :(");

/**
 * @param string $file
 * @param string $dir
 * @return string
 */
function f__r(string $file, string $dir="/dist/"):string
{
    $f = new File;
    $f->directory = $dir;
    $f->file_name = $file;
    if(!$f->file__exists()) return $file;
    return $f->get__file();
}

#[NoReturn] function r__($location='/'): void
{
    header('Location: '.$location);
    exit;
}

/**
 * @param string $cat
 * @return array|false
 */
function h__u(string $cat): array|false
{
    return count(explode("/",$cat)) < 3 ? array_slice(explode("/",$cat), 0, 2) : false;
}

/**
 * @param $value
 * @return bool
 */
function h__v($value): bool
{
    $value  = $value ?? "";
    if(is_array($value)) {
        return (bool)count($value) > 0;
    }
    return (bool)strlen($value);
}

function get__track(): bool|array
{
    global $DB;
    return $DB->fetch("track");
}


function get__path($where): bool|array
{
    global $DB;
    return $DB->fetch("path",where:$where);
}

