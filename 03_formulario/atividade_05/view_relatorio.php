<!DOCTYPE html>
<body>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 05</title>
</head>
<body>
        <h1>resultado IMC</h1>
        <p><b>Nome: </b> <?= $nome ?> </p>
        <p><b>altura: </b> <?= $altura ?> </p>
        <p><b>peso: </b> <?= $peso ?> </p>
         <p><b>imc: </b> <?= $imc ?> </p>

        <?php if($imc <18.5): ?>
             <p>abaixo do peso!</p>
        <?php elseif($imc >=18.5 && $imc < 24.9): ?>
            <p>peso normal!</p>
        <?php elseif($imc >= 25 && $imc < 29.9): ?>
            <p>sobre peso!</p>
        <?php else: ?>
            <p>obesidade!</p>

</body>
</html>