<!DOCTYPE html>
<body>
        <h1>Resultado do aluno</h1>
            <p><b>Nome: </b> <?= $nome ?> </p>
            <p><b>Nota_01: </b> <?= $nota_01 ?> </p>
            <p><b>Nota_2: </b> <?= $nota_02 ?> </p>
            <p><b>Nota_03: </b> <?= $nota_03 ?> </p>
            <p><b>media: </b> <?= $media ?> </p>

        <?php if($media >=7): ?>
             <p> aprovado!!</p>
        <?php else: ?>
            <p>reprovado</p>
        <?php endif ?>

        <?php if($media == 10): ?>
            <p>voce atingiu nota maxima!!</p>
        <?php endif ?>
</body>
</html>