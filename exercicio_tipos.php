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
        <h1>exercício de tipos de dados</h1>
        
        <?php
        $var = "esta e uma variavel string";
        $varInt = 7;
        $varF = 5.789;
        $varB = true;
        ?>
        <?php
        echo "<br>";
        echo $var;
        echo "<br>";
        echo "variavel do tipo int: ".$varInt;
        echo "<br>";
        echo "variavel do tipo float: ".$varF;
        echo "<br>";
        echo "variavel do tipo bol: ".$varB;
        if($varB){
            echo "<br>";
            echo "variavel do tipo bol:true";
            
        }else{
            echo "<br>";
            echo "variavel do tipo bol:false";
        } 
        ?>
    </body>
</html>
