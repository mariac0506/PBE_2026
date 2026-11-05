<?php 

require_once "Turma.php";

// criando o professor
$professor = new Professor ("Leonardo Evangelista" , "leo@gmail.com" , "Programação");

 //Criar turma
// enviado o objeto professor, no caso o Leonardo
$turma = new Turma("INFO",$professor);

// criar turma
// enviando o objeto professor, no caso o Leonardo
$aluno1 = new Aluno("Bento" , 'bento@gmail.com' , "B569");
$aluno1->AdicionarNota(8);
$aluno1->AdicionarNota(7);
$aluno1->AdicionarNota(9);

$aluno2 = new Aluno("Maria" , 'Maria@gmail.com' , "A506");
$aluno2->AdicionarNota(10);
$aluno2->AdicionarNota(9);
$aluno2->AdicionarNota(8);

$aluno3 = new Aluno("Clara" , 'clara@gmail.com' , "C965");
$aluno3->AdicionarNota(8);
$aluno3->AdicionarNota(9);
$aluno3->AdicionarNota(10);

//adiciono os alunos a turma criada
$turma->adicionarAluno($aluno1);
$turma->adicionarAluno($aluno2);
$turma->adicionarAluno($aluno3);


//exibir resumo da turma
$turma->exibirDadosTurma();

//exibindo lista de alunos
$turma->listarAlunos();

// mostrando o polimorfismo funcionando
$pessoas = [$professor ,  $aluno1 , $aluno2];
foreach($pessoas as $pessoa){
    $pessoa -> exibirDadosPessoa();
    echo "<hr>";
}