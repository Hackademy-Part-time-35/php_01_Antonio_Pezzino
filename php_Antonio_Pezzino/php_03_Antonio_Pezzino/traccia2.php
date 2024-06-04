<?php

class Student {
    public $name;
    public $surname;
    public $scores = [];
    public $average;

    public function __construct($name, $surname, $scores = []){
        $this->name = $name;
        $this->surname = $surname;
        $this->scores = $scores;
        $this->average = $this->calculateAverage();
    }

    public function addNewScore($score){
        $this->scores[] = $score;
        $this->average = $this->calculateAverage();
    }

    private function calculateAverage(){
        $total = array_sum($this->scores);
        return $total / count($this->scores);
    }

    public function printAverage(){
        echo "La media dei voti di $this->name $this->surname è: $this->average.\n";
    }
}

// Esempio di utilizzo
$student1 = new Student("Mario", "Rossi", [8, 7, 9]);
$student2 = new Student("Luigi", "Verdi", [6, 7, 8]);

$student1->printAverage();
$student2->printAverage();

$student1->addNewScore(10);
$student2->addNewScore(9);

?>



