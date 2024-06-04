<?php

class Company {
    public static $count = 0;
    public static $avg_annual_expenses = [];//extra 
    public $name;
    public $location;
    public $tot_employees;
    public $avg_salary;

    public function __construct($name, $location, $avg_salary = 0, $tot_employees = 0){
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->avg_salary = $avg_salary;
        self::$count++;
        self::$avg_annual_expenses[$name] = $this->calculateExpense(12);
    }

    public function printInfo(){
        if ($this->tot_employees > 0) {
            echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti.\n";
        } else {
            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti.\n";
        }
    }

    public function calculateExpense($months){
        return $this->tot_employees * $this->avg_salary * $months;
    }

    public function printExpense($months){
        $expense = $this->calculateExpense($months);
        echo "La spesa totale per $months mesi è: $expense.\n";
    }

    public static function printCount(){
        echo "Sono state create " . self::$count . " aziende.\n";
    }

    // extra
    public static function printAvgAnnualExpenses(){
        $total = array_sum(self::$avg_annual_expenses);
        $average = $total / self::$count;
        echo "Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di $average all’anno.\n";
    }
}

// compagnie
$company1 = new Company("Aulab", "Italia", 2000, 50);
$company2 = new Company("Bulab", "Francia", 2500, 60);
$company3 = new Company("Culab", "Germania");
$company4 = new Company("Dulab", "Spagna", 3500, 80);
$company5 = new Company("Eulab", "Portogallo", 4000, 90);

$company1->printInfo();
$company2->printInfo();
$company3->printInfo();
$company4->printInfo();
$company5->printInfo();

$company1->printExpense(12);
$company2->printExpense(12);
$company3->printExpense(12);
$company4->printExpense(12);
$company5->printExpense(12);

Company::printCount();
Company::printAvgAnnualExpenses();//extra
?>
