<?php

function clampStat($value)
{
    if ($value < 0) {
        return 0;
    }

    if ($value > 100) {
        return 100;
    }

    return $value;
}
function writeGameLog($message)
{
    $logFile = __DIR__ . '/game_log.txt';

    file_put_contents(
        $logFile,
        date('Y-m-d H:i:s') . " - " . $message . PHP_EOL,
        FILE_APPEND | LOCK_EX
    );
}