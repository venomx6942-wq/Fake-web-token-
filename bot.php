<?php
$token = "8603431466:AAGfzdIoWE7jEmziVEMhA5oNs2dEuhD1Az0";
$chat_id = "8586849798";

// Telegram message bhejne ka function
function sendTelegram($token, $chat_id, $message) {
    $url = "https://api.telegram.org/bot$token/sendMessage";
    $data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'HTML'
    ];
    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    $context = stream_context_create($options);
    @file_get_contents($url, false, $context);
}
?>
