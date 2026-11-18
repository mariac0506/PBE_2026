<?php
// estou no deletar.php

session_start();
// remover da lista
// remover apenas um item
// unset($_SESSION['nome']); remover uma posição do session
// unset($_SESSION['turma'][1]);  remover UM item da lista

session_destroy(); // apagar tudo de uma vez

echo "<h4> Após remover </h4>";
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

echo "<a href='deletar.php'> apagar </a>";

