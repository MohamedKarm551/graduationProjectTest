<?php

defined("__secret__Constant__") or die("no :(");

/**
 * @param string $file
 * @param string $dir
 * @return string
 */
function force_reload(string $file, string $dir="/dist/"):string
{
    $f = new File;
    $f->directory = $dir;
    $f->file_name = $file;
    if(!$f->file__exists()) return $file;
    return $f->get__file();
}

function redirect($location='/'): void
{
    header('Location: '.$location);
}

/**
 * @param string $cat
 * @return array|false
 */
function handle_url(string $cat): array|false
{
    return
        count(explode("/",$cat)) < 3 ?
            array_slice(explode("/",$cat), 0, 2) :
        false;
}

/**
 * @param $value
 * @return bool
 */
function has_value($value): bool
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


function get__path($where="1"): bool|array
{
    global $DB;
    return $DB->fetch("path",where:$where);
}
function get__topic($where): bool|array
{
    global $DB;
    return $DB->fetch("topic",where:$where);
}
function get__course($where): bool|array
{
    global $DB;
    return $DB->fetch("course",where:$where);
}
function get__question($where): bool|array
{
    global $DB;
    return $DB->fetch("question",where:$where);
}
