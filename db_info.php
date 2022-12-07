<?php
const localhost = 'localhost';
if ($_SERVER["REMOTE_ADDR"]=="127.0.0.1") {
    define("db_user", 'root');
    define("db_pass", '1122');
    define("db_name", '');
} else {
    define("db_user", 'abdo_root');
    define("db_pass", '');
    define("db_name", '');
}


//xc7rQmh74UZ5