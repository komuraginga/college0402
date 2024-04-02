<?php
class Animal{
public $cry = "bowbow!";
function bow(){
echo $this ->cry .PHP_EOL;
}
}

    class Dog extends Animal{
        public $cry = "ワンワン！";
    }
     $animal_1 = new Dog();
    $animal_1->bow();
    
    class Cat extends Animal{
        public $cry = "ニャー！";
    }
     $animal_1 = new Cat();
    $animal_1->bow();
?>