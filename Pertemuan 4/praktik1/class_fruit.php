<?php 

    class Fruit {
        // Property
       public $name;
       public $color;
       
        //Method
        function getName($name) {
            return $this->name = $name;
        }

        function getColor($color) {
            return $this->color = $color;
        }
    }

    // Object
    $apple = new Fruit();
    echo $apple->getName("Apple");
    echo '<br>';
    echo $apple->getColor("Red");

    echo '<br><br>';

    $banana = new Fruit();
    echo $banana->getName("Banana");
    echo '<br>';
    echo $banana->getColor("Yellow");

    




?>