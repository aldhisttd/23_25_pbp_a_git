<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Login</h2>

  <form id="loginForm" onsubmit="return false;">
    <label>Username:</label><br>
    <input type="text" id="username"><br><br>

    <label>Password:</label><br>
    <input type="password" id="password"><br><br>

    <button type="button" onclick="login()">Login</button>
  </form>
</body>
</html>