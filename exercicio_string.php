<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>exercicio string</h1>
        <?php
        $var = "esta e uma string";
        echo $var;
        echo "<br>";
        echo "quantidade de caracteres: ". strlen($var);
        echo "<br>";
        echo "quantidade de palavras: ". str_word_count($var);
        echo "<br>";
        echo "frase invertida: ". strrev($var);
         
        ?>
    </body>
</html>
