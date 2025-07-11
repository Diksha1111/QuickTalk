<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Room</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">QuickTalk</header>
<br>
<div class="form-wrapper">
    <div id="chat">
        <div id="messages"></div>
        <div style="display: flex; gap: 10px; margin-top: auto;">
            <input type="text" id="msgBox" placeholder="Type a message..." autocomplete="off">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    </div>

    <script>
        const conn = new WebSocket('ws://localhost:8080');
        const messages = document.getElementById('messages');
        const msgBox = document.getElementById('msgBox');

        conn.onopen = function () {
            console.log("WebSocket connection established.");
        };

        conn.onerror = function (error) {
            console.error("WebSocket error:", error);
        };

        conn.onclose = function () {
            console.warn("WebSocket connection closed.");
        };

        conn.onmessage = function (e) {
            try {
                const data = JSON.parse(e.data);
                const messageEl = document.createElement('div');
                messageEl.innerHTML = `<strong>${data.user}:</strong> ${data.message}`;
                messages.appendChild(messageEl);
                messages.scrollTop = messages.scrollHeight;
            } catch (err) {
                console.error("Invalid message format", err);
            }
        };

        function sendMessage() {
            const msg = msgBox.value.trim();
            if (msg === '') return;

            if (conn.readyState === WebSocket.OPEN) {
                conn.send(JSON.stringify({
                    user: "<?php echo $_SESSION['user']['username']; ?>",
                    message: msg
                }));
                msgBox.value = "";
            } else {
                alert("WebSocket connection not open. Please refresh the page or ensure server is running.");
            }
        }
    </script>
</body>
</html>
