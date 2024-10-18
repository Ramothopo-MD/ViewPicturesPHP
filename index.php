<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    
    case "/home":
        require "home.php";
        break;
    case "/MakeMemory":
        require "MakeMemory.php";
        break;
    case "/viewMemories":
        require "viewMemories.php";
        break;
    default:
        http_response_code(404);
       require "404.php";
        break;
}

 