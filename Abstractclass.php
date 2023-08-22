<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract class</title>
</head>
<body>
    <?php

    abstract class NumberConcept {

        abstract function Checkleapyear($year);
    }

    class ImplementClass extends NumberConcept {
        
        public function Checkleapyear($year)
        {
            if(($year % 100 == 0 && $year % 400 == 0) || ($year % 100 !== 0 && $year % 4 == 0)){
                echo $year.' is a Leap Year';
            }
            else{
                echo $year . " is Not a Leap Year";
            }
        }
    }
    $obj = new ImplementClass();
    $obj->Checkleapyear(2023);

    ?>
</body>
</html>
