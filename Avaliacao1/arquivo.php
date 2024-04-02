<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title></title>
 <style>
        
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    }

    .container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
    margin-top: 0;
    text-align: center;
    }

    p {
    text-align: center;
        }
        
    button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #800000;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    }

    button:hover {
    background-color: #800000;
    }

    a {
    text-decoration: none;
    color: inherit;
    }
    </style>
</head>
<body>
    <div class="container">
    <h2>Estacionamento Fatec-Araras</h2>
    <p>Bem-vindo Usuario: <?php echo $_SESSION['username']; ?>!  <a href="logout.php">Sair</a></p>
    <button><a href="visualizar-carros.php">Ver Carros Estacionados</a></button>
    <button><a href="visualizar-motos.php">Ver Motos Estacionadas</a></button>
    </div>
</body>
</html>
