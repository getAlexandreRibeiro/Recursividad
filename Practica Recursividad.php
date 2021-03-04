<?php
echo "My first PHP script!";

$n = [1, 2, 5, 6, 7, 8];
$a = [10, 11, 12, 12, 14, 15, 16, 21, 10];

// Ejercicio 1

function skipAdd1 (int $n) {
    if($n == 0) {
        return 0;
    } else {
        return $n+skipAdd1($n-2);
    }
}

// Ejercicio 2
function skipAdd2(int $n) {
    if ($n==0) {
        return 0; // caso n valga 0 ya que no puede sumar ni restar
    } else if ($n==1) {
        return 1; // caso n valga 1 ya que no puede restar -2 a 1(enteros)
    } else {
        return $n+skipAdd2($n-2); // caso n valga mas de 1, le suma a n, n-2, en caso de 2, 2+(2-2)= 2
    }
}
echo "<br>";



// Ejercicio 3

function sumate(int $n) {
    if(($n) == 0) {
        return 0;
    } else {
        // al no cambiar el parametro que recibe la funcion, esta se convierte en un bucle infinito
        return $n[0] + sumate($n);
    }
}

/*
 * 
 */


// ejercicio 3 resuelto
function sumate2(array $n,int $r) {
    if ($r < 0) {
       return 0;
    } else {
        print($n[$r]);
        print "<br> ";
        return ($n[$r]) + sumate2($n, $r-1);
    }
}
// echo sumate2($n,count($n)-1);



// Ejercicio 4: Factorial

function factorial($numero) {
    if ($numero >= 2) { // Creamos una condicion, un punto donde la funcion no vuelva a llamarse
        return ($numero * factorial($numero - 1)); // llamamos a la funcion ya creada pero modificandole
        // el parátro para que la condicion anteriormente escrita se cumple en algun momento
    } else {
        return true; // devolvemos el número obtenido al llegar a $numero[0]
    }
}

echo "<br>";
echo "<br>";
$numero = 100;
print number_format(factorial($numero));


// Ejercicio 5 Dibujando fractales:

/*-------------------------------------------------
---------Alexandre Ribeiro Pérola------------------

#Python 3.9
import turtle
from time import sleep

turtle.color("yellow", "blue")
turtle.screensize(canvwidth=1920, canvheight=1850)

grados = 0
turtle.begin_fill()
turtle.speed(5)
 # for x in range(1, 100):
   # for x in range(1,10):
    #    turtle.forward(200)
     #   turtle.left(90)
    #turtle.left((grados + 10))
# turtle.end_fill()


def fractal(n):
    if n >= 2:
        sleep(0.1) # simple funcion para esperar
        turtle.forward(n+5) # distancia de la línea dibujada
        turtle.left((grados + 120)) # Grados que giran a la izq por cada iteración, 90 cuadrado, 120 triángulo...
        return n * fractal(n-1) # cambia si la forma crece hacia el exterior(+) o hacia el interior(-)
    else:
        return True

fractal(100)

-------------------------------------------------*/


//Ejercicio 6


/* Ambos algoritmos funcionan de forma similar, ambos iteran sobre si mismos de manera que se llaman una y otra vez en un bucle finito.
La mayor diferencia es que lo iterativos consumen menos recursos, ya que los recursivos crean varias veces bloques de memeria reservado para cada iteracion del mismo.
Ademas por definicion un algoritmo recursivo es aquel que dentro del cuerpo del algoritmo, de forma directa o indirecta, se realiza una llamada a él mismo.


un algotirmo iterativo puede ser: busqueda secuencial(metodos bubble sort, inserction sort, quick sort, merge sort...  )
Mientras que un algoritmo recursivo puede ser el numero de oro, los fractales, la relacion espacio temporal...XD

Creo que una manera muy util de entender los algoritmos es visualizandolos, me he pasado un buen rato buscando esta página, espero que la puedas
mostrar a los compañeros y usarla tu misma!!!!!

algorithm-visualizer[https://algorithm-visualizer.org/divide-and-conquer/bucket-sort]

Disfruta jugando con ella!



*/












?>

