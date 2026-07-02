<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test GitHub</title>
</head>
<body>
    <h1>ทดสอบ GitHub และ Render</h1>

    <button onclick="sayHello()">กดเพื่อทักทาย</button>

    <p id="message"></p>

    <script>
        function sayHello() {
            document.getElementById("message").textContent = "สวัสดีครับ!";
        }
    </script>
</body>
</html>