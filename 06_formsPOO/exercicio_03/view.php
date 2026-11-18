<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ATIVIDADE 03 - Folha de Pagamento</title>
</head>
<body>
    <h2>Gerador de Holerite - TechNova</h2>
    <form action="logica.php" method="POST">
        <label for="nome">Nome do Funcionário:</label><br>
        <input type="text" name="nome" required><br><br>

        <label for="cargo">Cargo:</label><br>
        <select name="cargo" required>
            <option value="">Selecione o cargo</option>
            <option value="Auxiliar">Auxiliar (R$ 2.200,00)</option>
            <option value="Técnico">Técnico (R$ 3.520,00)</option>
            <option value="Analista">Analista (R$ 5.500,00)</option>
        </select><br><br>

        <label for="horasExtras">Horas Extras no mês:</label><br>
        <input type="number" name="horasExtras" min="0" value="0" required><br><br>

        <label>Utiliza Vale-Transporte?</label><br>
        <input type="radio" name="valeTransporte" value="sim" required>
        <label for="vt_sim">Sim</label>
        <input type="radio" name="valeTransporte" value="nao" required>
        <label for="vt_nao">Não</label><br><br>

        <button type="submit">Gerar Holerite</button>
    </form>
</body>
</html>