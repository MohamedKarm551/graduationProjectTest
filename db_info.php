<?php
const localhost = 'localhost';
$remoted_addr = $_SERVER["REMOTE_ADDR"];
if ($_SERVER["REMOTE_ADDR"]=="127.0.0.1" || $remoted_addr=="::1") {
    define("db_user", 'root');
    define("db_pass", '');
    define("db_name", 'graduation');
} else {
    define("db_user", '');
    define("db_pass", '');
    define("db_name", '');
}


//xc7rQmh74UZ5