<?php

// Polimorfirmos nos possibilita ter o mesmo método na classe pai e na classe filha que realizam ações diferentes
abstract class Animal{
    public function falar(){
        return "Emitiu um som<br>";
    }

    public function mover(){
        return "Andou <br>"; 
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Au au<br>";
    }
}

class Gato extends Animal{
    public function falar(){
        return "Miau<br>";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Fiu fiu<br>";
    }

    public function mover(){
        return "Voou e ". parent::mover(); 
    }
}

$golden = new Cachorro();

echo $golden->falar();
echo $golden->mover();

echo "<br>";

$garfield = new Gato();

echo $garfield->falar();
echo $garfield->mover();

echo "<br>";

$queroQuero = new Passaro();

echo $queroQuero->falar();
echo $queroQuero->mover();

?>