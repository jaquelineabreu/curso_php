<?php

    class User{


        function falar(){
            echo "Olá, sou um objeto! <br>";
        }

        function soma($x, $y){
            echo $x + $y . "<br>";
        }


    }

    $maria = new User();

    $maria->falar();

    $maria->soma(2,2);

  