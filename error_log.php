<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(0) . "\n";
}

catch (Exception $e) {
    error_log($e, 3, "errors.log");
    echo("<h1>Er is iets fout gegaan!</h1>");
}

?>
</body>
</html>