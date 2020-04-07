<?php

header("Content-Type: text/plain; charset=utf-8");

//Concatenating of strings
$a = 'Hello--';
$b = 'Petya';
echo $a.$b."\n";

//Test of dereferencing a variable
$c = 'Hidden';
$d = 'c';
echo $$d."\n";


//Test of comparison operators
$num = 10;
$st = '10';
if($num === $st) {
    echo "The test of true result\n";
}
else {
    echo "The test of false result\n";
}

if($num == $st) {
    echo "The test of true result\n";
}
else {
    echo "The test of false result\n";
}

//Test of explode and foreach loop
$string_to_explode = "Petya Masha Katya Illia";
$mass_of_strings = explode(" ", $string_to_explode);
foreach ($mass_of_strings as &$name_item) {
    echo $name_item." ";
}

//Test of implode
$array = ['Name', 'Surname', 'Date of birth'];
$separated_array = implode(" ", $array);
echo "\n".$separated_array."\n";

//Test of standart loop and dynamic casts
$array_integers = ['1', '2', '3', '4'];
for($i = 0; $i < count($array_integers); $i++){
    $array_integers[$i] = $array_integers[$i] * 2;
    echo $array_integers[$i]." ";
}

//Test of associative arrays
$associative_mass = [
    "first" => "Ukraine",
    "second" => "Germany",
    10 => "Japan",
    "fourth" => "Sweeden"
];
echo "\n".$associative_mass["first"]."\n";
echo $associative_mass[10]."\n";
foreach ($associative_mass as $i => $value) {
    echo $associative_mass[$i]." ";
}
echo "\n";

//Start of OOP tests

//Main class
class Human {
    public $name;
    public $age;

    //Constructor with parameters
    function __construct($name, $age) {
        $this->age = $age;
        $this->name = $name;
    }

    public function human_show() {
        echo "The human`s name is $this->name and age is is $this->age\n";
    }

}

//Inherited class from Main class HUMAN
class Employee extends Human {
    public $salary;
    public $post;

    function __construct($name, $age, $salary, $post) {
        parent::__construct($name, $age);
        $this->post = $post;
        $this->salary = $salary;
    }

    function human_show() {
        echo "The employee`s post is $this->post and salary is is $this->salary\n";
        parent::human_show();
    }

}
$emp = new Employee('John', 25, 100, 'worker');
$emp->human_show();


//Singleton example
class OnlyOne {
    private static $instance;
    private $var;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance(): OnlyOne{
        if(self::$instance === NULL) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    function get_var() {
        return $this->var;
    }
    function set_var($var) {
        $this->var = $var;
    }
}

$instance = OnlyOne::getInstance();
$instance->set_var(10);

$instance2 = OnlyOne::getInstance();
var_dump($instance2);
?>