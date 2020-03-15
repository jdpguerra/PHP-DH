<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Aula 01</title>
</head>
<body>
<?php
$titulo="Primeira de Aula de PHP";
?>
<h1> teste de commtt

<?php echo $titulo; ?>

</h1>

<hr>
<h1>If-Else</h1>
<?php
$idade=70;

if($idade>=16&&$idade<=90){
    if($idade>=16&&$idade<18||$idade>70) {echo"Seu voto e Facultativo"; }
    else {echo "Seu voto e Obrigatorio";}
} else{echo "Pode votar apenas pessoas +18 anos,Vai chegar sua hora";}

?>
<hr>
<h1>Switch</h1>
    
    <?php
    $genero="Masculino";
        switch ( $genero ) {
            case "Masculino":
                echo "É do gênero masculino";
                break;
            case "Feminino":
                echo "É do gênero feminino";
                break;
            default:
                echo "Prefere não dizer";
                break;
        }
    ?>
    
    <?php
    $numero=3;
        switch ( $numero) {
            case 0:
                echo "Você informou o valor".$numero;
                break;
            case 1:
 /* Como concatenar na frase */
            echo "Você informou o valor $numero";
                break;
            default:
                echo $numero;
                break;
        }
    ?>

<hr>
<h1>Arrays</h1>
<?php
$arrayAnimais=["Cachorro","Gato","Girafa","Elefante"];
var_dump($arrayAnimais);

$estojo=array(
    "Caneta Azul",
    "Caneta Verde",
    "Caneta Vermelha",
    "Controle do projetor"
);
?>

 $usuario = [
            "email" => "vtorres@digitalhouse.com",
            "senha" => "123456"   
        ];

        // percorrendo array usuario
        echo "<pre>";
            var_dump($usuario);
        echo "</pre>";
    
</body>
</html>