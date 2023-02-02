<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Manejo de variables con PHP</title>
</head>
<body>
<h2>Inciso 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5</p>
    <?php
        $_myvar = "PRIMERO";
        echo '$_myvar es correcta válido, inicia con un underscore.<br>';

        $_7var = "SEGUNDO";
        echo '$_7var es correcta válido, inicia con un underscore.<br>' ;

        // myvar = "TERCERO";
        echo 'myvar es incorrecta, no inicia con el signo de dolar.<br>';

        $myvar = "CUARTO";
        echo '$myvar es correcta válido, inicia con el signo de dolar.<br>';

        $var7 = "QUINTO";
        echo '$var7 es correcta válido, inicia con el signo de dolar.<br>';

        $_element1 = "SEXTO";
        echo '$_element1 es correcta válido, inicia con un underscorer.<br>';

        // $house*5 = "SEPTIMO";
        echo '$house*5 es incorrecta, intenta hacer una multiplicacion con la variable.<br>';
    ?>

    <h2>Inciso 2</h2>
        <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
        <p>$a = "ManejadorSQL";</p>
        <p>$b = 'MySQL';</p>
        <p>$c = &$a;</p>
        <?php
            $a = "ManejadorSQL<br>";
            $b = 'MySQL<br>';
            $c = &$a;
            
            echo "a. Ahora muestra el contenido de cada variable:<br>";
            echo "a = ".$a;
            echo "b = ".$b;
            echo "c = ".$c."<br>";

            echo "b. Agrega al código actual las siguientes asignaciones:<br>";
            echo "a = PHP server”;<br>";
            echo "b = &a;<br><br>";
            $a = "PHP server<br>";
            $b = &$a."<br>";

            echo "c. Vuelve a mostrar el contenido de cada uno:<br>";
            echo "a = ".$a;
            echo "b = ".$b."<br>";

            echo "d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de
            asignaciones<br>";
            echo "R: No hubo ningun cambio en los valores de las variasbles, porque cada variable es distinto";
    ?>

<h2>Inciso 3</h2>
    <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
    verificar la evolución del tipo de estas variables (imprime todos los componentes de los
    arreglo):</p>

    <?php
        $a = "PHP5";
        echo "a = ".$a."<br>";

        $z[] = &$a."<br>";
        var_dump($z);

        $b = " 5a version de PHP<br>";
        echo "b = ".$b;

        // $c = $b*10;
        echo '$c = $b*10, NO se puede realizar la asiganacion de variable, por que no se multiplicar un string.';

        $a .= $b;
        echo "$a". 'la variable $a . duplica doble vez el valor de la variable $b <br>';

        // $b *= $c;
        echo 'la variable $b * no se le puede asignar el valor de $c por que un string no se pude multiplicar con un INT<br>';

        $z[0] = "MySQL";
        var_dump($z)."<br>";
    ?>

<h2>Inciso 4</h2>
    <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
    la matriz $GLOBALS o del modificador global de PHP.</p>

    <?php
        $aa = "PHP5";
        $z[0] = &$a."<br>";
        $bb = " 5a version de PHP";
        $aa.= $b;
        $z[0] = "MySQL";

        function valor()
        {
            $GLOBALS['n'] = $GLOBALS['aa']."<br>";
            // $GLOBALS['j'] = $GLOBALS['zz'];
            $GLOBALS['j'] = $GLOBALS['bb']."<br>";
            $GLOBALS['i'] = $GLOBALS['aa']."<br>";
        }
        valor();
        echo $n;
        echo "el valor del array no se puede transformar a string";
        echo $j;
        echo $i;
       
    ?>

<h2>Inciso 5</h2>
    <p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>
    <p>$a = “7 personas”;</p>
    <p>$b = (integer) $a;</P>
    <p>$a = “9E3”;</P>
    <p>$c = (double) $a;</P>
    <?php
        $a = "7 personas";
        $b = (integer) $a;
        $a = "9E3";
        $c = (double) $a;
        echo "a = ".$a."<br>";
        echo "b = ".$b."<br>";
        echo "a = ".$a."<br>";
        echo "c = ".$c."<br>";
    ?>
</body>
</html>