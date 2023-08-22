<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOPS INHERITANCE</title>
</head>
<body>
    <h1> Single type of in inheritance</h1>
    <?php
class MathConcept
{
    public function getinteger($number)
    {
        return floor($number);
    }
    public function getlastdigit($number)
    {
        return $number % 10;
    }
}

class NumberConcept extends MathConcept
{

    public function addcomma($number)
    {

        return number_format($number);

    }
    public function roundValue($value)
    {
        return ceil($value);
    }
}

$php = new NumberConcept();
$num = 123456;
$numresults = $php->addcomma($num);
echo $num . '=>' . $numresults;

echo '<br>';
echo '<br>';

$dd = 45678;
$id = $php->getlastdigit($dd);
echo $dd . '=> last digit is' . $id;

?>
<h1>Multilevel type of inheritance</h1>
<?php
class Employee
{
    protected $name;
    protected $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getDetails()
    {
        return "Name: $this->name, Salary: $this->salary";
    }
}

class Manager extends Employee
{
    protected $department;

    public function __construct($name, $salary, $department)
    {
        parent::__construct($name, $salary);
        $this->department = $department;
    }

    public function getDetails()
    {
        return parent::getDetails() . ", Department: $this->department";
    }

    public function manageTeam()
    {
        return "$this->name is managing a team.";
    }
}

class Director extends Manager
{
    protected $bonus;

    public function __construct($name, $salary, $department, $bonus)
    {
        parent::__construct($name, $salary, $department);
        $this->bonus = $bonus;
    }

    public function getDetails()
    {
        return parent::getDetails() . ", Bonus: $this->bonus";
    }

    public function planStrategy()
    {
        return "$this->name is planning the company's strategy.";
    }
}

// Usage
$employee = new Employee("John Doe", 50000);
$manager = new Manager("Alice Smith", 70000, "HR");
$director = new Director("Bob Johnson", 90000, "Finance", 20000);

echo $employee->getDetails() . "<br>";
echo $manager->getDetails() . "<br>";
echo $manager->manageTeam() . "<br>";
echo $director->getDetails() . "<br>";
echo $director->planStrategy() . "<br>";

?>
<h1>Heirarichal type of inheritance</h1>
<?php
class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getArea() {
        return "Area calculation not defined for $this->name.";
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getArea() {
        $area = 3.14 * $this->radius * $this->radius;
        return "$this->name (Circle) - Area: $area";
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($name, $length, $width) {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        $area = $this->length * $this->width;
        return "$this->name (Rectangle) - Area: $area";
    }
}

// Usage
$circle = new Circle("Circle 1", 5);
$rectangle = new Rectangle("Rectangle 1", 4, 6);

echo $circle->getArea() . "<br>";
echo $rectangle->getArea() . "<br>";

?>
</body>
</html>

