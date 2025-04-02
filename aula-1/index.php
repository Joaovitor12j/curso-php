<?php

if (isset($argv[1])) {
    echo sprintf('%s, tá de boa ', $argv[1]);
} else {
    var_dump('Hello World!');
}