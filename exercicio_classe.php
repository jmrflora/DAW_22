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
        <h1>exercico objeto</h1>
        <?php
       class disciplina{
           public $nome;
           public $sigla;
           public $carga_h;
           
           public function __construct($nome,$sigla,$carga_h){
               $this->nome = $nome;
               $this->sigla = $sigla;
               $this->carga = $carga_h;
       }
       public function getDisc(){
           return "noma da disciplina: ".$this->nome.
                   " sigla da disciplina: ".$this->sigla.
                   " carga horaria: ".$this->carga_h;
       }
       }
       $objDisciplina = new disciplina("desenvolvimento web", "3daw", "80");
       echo $objDisciplina->getDisc();
       echo "<br>";
       
       $objDisciplina2 = new disciplina("redes", "3rsd", "120");
       echo $objDisciplina2->getDisc();
       echo "<br>";
        ?>
    </body>
</html>
