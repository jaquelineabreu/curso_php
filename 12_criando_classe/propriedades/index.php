<?php

    class Car {
        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar(){
            echo "vrummmmmmm <br>";
        }
    }


    $ferrari = new Car;
    $ferrari->rodas = 4;
    $ferrari ->cor = "azul";

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";
    echo $ferrari->cor . "<br>";

    $ferrari->ligar();





?>