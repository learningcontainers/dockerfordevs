<?php

$counter = 0;

echo "Starting an endless counter" . PHP_EOL;
while (true) {
    print 'Counter: ' . $counter++ . PHP_EOL;
    error_log('Errors: ' . rand(1, 1000) . PHP_EOL);
    sleep(5);
}