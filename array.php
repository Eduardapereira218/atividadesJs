<?php 
$aprovados = 0;
$candidatos = [

(object)["nome" => "rafael", "nota" => 50],
(object)["nome" => "natanael", "nota" => 100],
(object)["nome" => "ana luisa", "nota" => 90],
(object)["nome" => "enzo", "nota" => 70]
];

foreach ($candidatos as $candidatos) {
    if ($candidatos -> nota >=70) {
       
    $aprovados++;
    
    }
}
echo "o total de aprovados e: $aprovados";
?>