<?php
/**
 * Refatorando código 🔧
 * Data: 14/01/2000
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

    private $currentActivity = "Refatorando código 🔧";
    private $date = "14/01/2000";

    public function executeActivity() {
        echo "Data: " . $this->date . "\n";
        echo "Atividade: " . $this->currentActivity . "\n";
    }
}

$activity = new DailyActivity();
$activity->executeActivity();

?>
