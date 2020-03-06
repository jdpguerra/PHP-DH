<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Aula 02</title>
</head>
<body>
    <h1> Loops e Funçôes</h1>
    <p>Loops - FOR</p>

<hr>

<p>For utilizando incremento.</p>

    <?php

    
   for ($i=1; $i <=10 ; $i++) { 
       echo $i."<br>";
       
          }
   
   ?>
<hr>

   <p>For utilizando decremento.</p>

    <?php

    for ($i=10; $i >0 ; $i--) { 
        echo $i."<br>";
    }
?>
<hr>

<p>While utilizando incremento.</p>

 <?php
$i=1;
while ($i <= 10) {
  echo $i."<br>";
    $i++;  # code...
}

?>
<hr>

<p>While utilizando decremento.</p>

<?php
$i=10;
while ($i >0) {
 echo $i."<br>";
   $i--;  # code...
}

?>
<hr>

<p>Do While utilizando incremento.</p>

 <?php
 $i=1;
 do {
  echo $i."<br>";
  $i++;
 } while ($i <= 10);


?>
<hr>

<p>Do While utilizando decremento.</p>

 <?php
 $i=10;
 do {
  echo $i."<br>";
  $i--;
 } while ($i >0);


?>
<hr>

<p>Exemplos percorrendo Arrays com Loops</p>
<p>For percorrendo array</p>
 <?php
 //Array de animais
 //percorrer array
$animais =["Gato","Cachorro","Girafa","Elefante","Leão"];

for ($i=0;$i < count($animais); $i++) { 
    echo $animais[$i]."<br>";
    # code...
}

?>

<hr>

<p> While Percorrendo array</p>

<?php

$i=0;
$animais =["pato","pata","Girafa","lion","mono"];

 while ( $i < count($animais) )  {
echo $animais[$i]."<br>";
$i++;

}
?>
<hr>

<p>Do While Percorrendo array</p>

<?php

$i=0;
$animais =["pato","pata","Girafa","lion","mono"];

do {
    echo $animais[$i]."<br>";
    $i++;#code...
} while ($i < count($animais) );
?>

<hr>
<p> Foreach percorrendo array</p>

<?php

foreach($animais as $animal) {
    echo $animal."<br>";
}

?>
<hr>
<p> Foreach percorrendo array</p>

<?php
$user =[
"nome" => "Marcelao",
"email" => "md@google.com",
"telefone" => "+ 5511 222222",
];
foreach($user as $key => $value) {
    echo "$key=>$value"."<br>";
}

?>
<hr>
<p>Função que retorna tabuada de um numero.</p>
<?php
function tabuada($numero){
$resultado =0;
$arrayResultado =[];

for($i=1;$i<10;$i++) { 
    $resultado = $numero *$i;
    echo $resultado ."<br>";
    array_push($arrayResultado,$resultado);
}
return $arrayResultado;
}
 $result = tabuada(10);
 arrayResultado;
 var_dump

?>

</body>
</html>