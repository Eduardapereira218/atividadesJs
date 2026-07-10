<?php 
$aprovados = 0;
$reprovados = 0;
$candidatos = [
    (object)["nome" => "maria", "nota" => 10],
    (object)["nome" => "isabella", "nota" => 90],
    (object)["nome" => "ana luisa", "nota" => 80],
    (object)["nome" => "julia", "nota" => 70],
    (object)["nome" => "gabriel", "nota" => 60]
];

foreach ($candidatos as $candidato) {
    if ($candidato->nota >= 80) {
        $aprovados++;
    } else {
        $reprovados++;
    }
}
echo "Total de aprovados: $aprovados\n";
echo "Total de reprovados: $reprovados\n";

?>