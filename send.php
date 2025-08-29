<?php
$token = "8414254641:AAEWGtazocKKlEuo5BDTu4mVTQlT4-R82qE";
$chat_id = "-1002777193606";

// Form Data
$timeframe = $_POST['timeframe'];
$signal = $_POST['signal'];
$style = $_POST['style'];

// Different Templates
if ($style == "1") {
    // Premium Style
    $message = "━━━━━━━━━━━━━━━\n"
              ."🚨 *COLOR ZONE VIP* 🚨\n"
              ."━━━━━━━━━━━━━━━\n\n"
              ."⏰ *Timeframe:* `$timeframe`\n"
              ."🎯 *Direction:* 🔥 $signal 🔥\n"
              ."📊 *Market:* wingo\n\n"
              ."⚡ Status: *ACTIVE*\n"
              ."━━━━━━━━━━━━━━━\n"
              ."✅ Follow strictly for best result!";
}
elseif ($style == "2") {
    // Modern Style
    $message = "✨ *COLOR ZONE VIP* ✨\n\n"
              ."📌 Market: wingo\n"
              ."⏰ Duration: *$timeframe*\n"
              ."🎯 Signal: *$signal*\n\n"
              ."🚀 Take Action Now!";
}
else {
    // Minimal Style
    $message = "🔔 COLOR ZONE VIP\n"
              ."Timeframe: $timeframe\n"
              ."Signal: $signal\n"
              ."Status: Active ✅";
}

// Send to Telegram
$url = "https://api.telegram.org/bot$token/sendMessage";
$data = [
    'chat_id' => $chat_id,
    'text' => $message,
    'parse_mode' => "Markdown"
];
file_get_contents($url . "?" . http_build_query($data));

header("Location: index.html?sent=1");
?>
