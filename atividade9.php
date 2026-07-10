<?php 
$aprovados =0;
$alunos = [
(object)["nome" => "maria", "nota" => 10],
(object)["nome" => "isabella", "nota" => 90],
(object)["nome" => "ana luisa", "nota" => 80],
(object)["nome" => "julia", "nota" => 70]
];

foreach ($alunos as $aluno) {
    if ($aluno -> nota >=70) {
       
    $aprovados++;
    
    }
}
echo "o total de aprovados e: $aprovados";




?>