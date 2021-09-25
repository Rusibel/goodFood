<?php
$_POST = json_decode( file_get_contents("php://input"), true ); // декодировать из JSON
echo var_dump($_POST);