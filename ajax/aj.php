<?php
require "../inc.php";
$action = json_decode($_POST["action"]);
$data = json_decode($_POST["data"],true);

switch ($action) {
    case "get-questions":
        $path_id = $data["value"];
        ob_start();
        require __WIDGETS__."question.php";
        $html = ob_get_clean();
        echo json_encode([
           "html" => $html
        ]);
    break;
}