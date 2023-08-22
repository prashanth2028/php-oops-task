<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Encapsulation</title>
</head>
<body>
    <?php
    class GetterSetter {
        public $fruitsname;
        public $fruitscolor;
        public $fruitstaste;

        public function GetfruitsName() {
            return $this->fruitsname;
        }
        public function SetfruitsName($fruitsname) {
            $this->fruitsname = $fruitsname;
        }
        public function GetfruitsColor() {
            return $this->fruitscolor;
        }
        public function SetfruitsColor($fruitscolor) {
            $this->fruitscolor = $fruitscolor;
        }
        public function GetfruitsTaste() {
            return $this->fruitstaste;
        }
        public function SetfruitsTaste($fruitstaste) {
            $this->fruitstaste = $fruitstaste;
        }
    }

    class Trees extends GetterSetter {
        public function Results() {
            $this->SetfruitsName('Apple');
            echo 'The fruit name is '. $this->GetfruitsName() . ' ';

            $this->SetfruitsColor('red');
            echo 'and the Color of the furit is ' .$this->GetfruitsColor(). ' . ';

            $this->SetfruitsTaste('sweet');
            echo ' the taste of the furit is '. $this->GetfruitsTaste().'<br>';
        }
    
    }

    $obj = new Trees();
    $obj->Results();
    ?>
</body>
</html>
