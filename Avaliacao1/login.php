<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: arquivo.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
if ($_POST['username'] === 'portaria' && $_POST['password'] === 'FatecAraras') {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $_POST['username'];
    header('Location: arquivo.php');
exit;
} else {
    $error = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-image: url('img.jpg.png'); 
  background-size: cover;
  background-position: center;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  background-color: rgba(255, 255, 255, 0.8); 
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 300px;
}

h2 {
  margin-top: 0;
  text-align: center;
  color: #333;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #333;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #800000;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #800000;
}

.error {
  color: #ff0000;
  text-align: center;
  margin-top: 10px;
}
</style>
</head>
<body>
<div class="login-container">
  <h2>Login</h2>
  <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
  <form method="post">
    <label for="username">Usuário:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Login</button>
  </form>
</div>
</body>
</html>

