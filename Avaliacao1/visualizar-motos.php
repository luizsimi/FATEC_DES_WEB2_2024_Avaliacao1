<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
function lerRegistros($arquivo) {
$registros = file($arquivo, FILE_IGNORE_NEW_LINES);
return $registros;
}

$motos = lerRegistros('motos.txt');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Ver Motos</title>
<style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        }

        .container {
        max-width: 800px;
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

        table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        }

        th, td {
       padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }

        th {
        background-color: #800000;
        color: #fff;
        }

        tr:hover {
        background-color: #f2f2f2;
        }

        a {
        display: block;
        text-align: center;
        margin-top: 20px;
        text-decoration: none;
        color: #800000;
        }
     
        a:hover {
        color: #800000;
        }
    </style>
</head>
<body>
<div class="container">
<h2>Motos Estacionadas</h2>
<table>
    <tr>
    <th>Nome</th>
    <th>R.A.</th>
    <th>Placa</th>
    </tr>
    <?php foreach ($motos as $moto): ?>
    <?php list($nome, $ra, $placa) = explode('/', $moto); ?>
    <tr>
       <td><?php echo $nome; ?></td>
       <td><?php echo $ra; ?></td>
        <td><?php echo $placa; ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
        <a href="arquivo.php">Voltar</a>
    </div>
</body>
</html>