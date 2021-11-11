<?php

require 'vendor/autoload.php';

use Mohamedyasser\App\Help;

const SERVICE = 'C';
const QUERY = 'D';

$inputFile = 'input_1.txt';

if (!file_exists($inputFile)) {
    throw new Exception('File not found!');
}

$lines = [];

try {
    $input = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} catch (Exception $e) {
    throw new Exception('Error read file!');
}

$countService = (int)$input[0];

unset($input[0]);

if ($countService == 0 || $countService > 100000 || count($input) != $countService) {
    throw new Exception('Invalid data!');
}

$serviceList = [];

foreach ($input as $line) {
    switch ($line[0]) {
        case SERVICE:
            $serviceList[] = Help::createService($line);
            break;
        case QUERY:
            echo (count($serviceList) > 0) ? Help::generateStatisticAnalytic($line, $serviceList) : '-';
            echo PHP_EOL;
            break;
    }
}

