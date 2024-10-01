<?php
include 'conexao.php'; // Incluir a conexão com o banco de dados
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Urna Eletrônica</title>
</head>
<body>
    <h1>Urna Eletrônica</h1>
    <form action="processa_voto.php" method="POST">
        <label>
            <input type="radio" name="candidato" value="Inês Brasil">
            <img src="cand1.jpg" alt="Inês Brasil - PPL (Partido Puro Lacre)">
            <p class="legenda">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inês Brasil - PLL (Partido Puro Lacre)</p>
        </label><br>

        <label>
            <input type="radio" name="candidato" value="Gretchen">
            <img src="cand2.png" alt="Gretchen - PPO (Partido Puro Ódio)">
            <p class="legenda">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gretchen - PPO (Partido Puro Ódio)</p>
        </label><br>

        <label>
            <input type="radio" name="candidato" value="Bora Bill">
            <img src="cand3.jpg" alt="Bora Bill - PBB (Partido Bora Bill)">
            <p class="legenda">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bora Bill - PBB (Partido Bora Bill)</p>
        </label><br>

        <label>
            <input type="radio" name="candidato" value="Flávia Saraiva">
            <img src="cand4.jpg" alt="Flávia Saraiva - PMR (Partido Menina Risonha)">
            <p class="legenda">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flávia Saraiva - PMR (Partido Menina Risonha)</p>
        </label><br>

        <label>
            <input type="radio" name="candidato" value="Belle Belinha">
            <img src="cand5.jpg" alt="Belle Belinha - PMC (Partido Miojo com Corote)">
            <p class="legenda">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Belle Belinha - PMC (Partido Miojo com Corote) </p>
        </label><br>

        <label>
            <input type="radio" name="candidato" value="nulo">
            Voto Nulo
        </label><br><br>

        <label>
            <input type="radio" name="candidato" value="branco">
            Voto em Branco
        </label><br><br>

        <button type="submit" class="button">Votar</button>
    </form><br>
    <a href="contagem.php">Contagem de Votos</a>
</body>
</html>