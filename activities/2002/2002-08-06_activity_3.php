<?php
/**
 * Fazendo code review 👀
 * Data: 06/08/2002
 * Commit #3
 */

class DailyActivity {

    private $activities = [
        "Desenvolvendo APIs Laravel",
        "Corrigindo bugs no backend",
        "Otimizando queries MySQL",
        "Implementando autenticação JWT",
        "Escrevendo testes PHPUnit",
        "Refatorando controllers MVC"
    ];

    private $currentActivity = "Fazendo code review 👀";
    private $date = "06/08/2002";

    public function executeActivity() {
        echo "Data: " . $this->date . "\n";
        echo "Atividade: " . $this->currentActivity . "\n";
    }
}

$activity = new DailyActivity();
$activity->executeActivity();

?>
