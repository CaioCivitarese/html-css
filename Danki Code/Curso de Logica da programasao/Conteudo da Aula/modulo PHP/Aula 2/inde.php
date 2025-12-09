<?php
//1) verificarstem mais de 5 letras
//2) se e numero
//3) se possui o @

//isset = verrificar se existe = vareavel ter valor ou ser criada.
if(isset($_POST['acao'])){
    $nome = $_POST{'nome'};
    $numero = $_POST['numero'];
    $email = $_POST['email'];
    if(strlen ($nome) >=5){
        echo 'Nosso nome tem mais ou igual a 5 letras!';
    }
    if(is_numeric($numero)){
        echo 'E um nomero!';
    }
    if(strtr($email, '@') != ''){
        echo 'tem @';
        echo '<br>';
        if(strtr($email, 'gmail') != ''){
            echo 'O ee-mail do usuario e gmail!';
            echo '<br>';
        }
    }
}
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="numero">
    <input type="text" name="email">
    <input type="suvmit" name="acao">
</form>