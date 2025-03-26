<?php
    $url = "https://expensetracker.lukasbusch.dev";
    $response = @file_get_contents($url);
    
    // Append a log entry to a file
    $logMessage = date("Y-m-d H:i:s") . " - Ping executed. ";
    $logMessage .= $response ? "Success." : "Failed.";
    file_put_contents("cron_log.txt", $logMessage . "\n", FILE_APPEND);
?>
