<?php 




$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Sénior';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome não pode ser vazio.';
    return;
}
if(strlen($nome) < 3){
    echo 'O nome deve conter mais do que 2 caracteres.';
    return;
}
if(strlen($nome) > 40){
    echo 'O nome não pode conter mais do que 40 caracteres.';
    return;
}
if(!is_numeric($idade)){
    echo 'A idade precisa ser um numero.';
    return;
}
if($idade < 6){
    echo 'O participante não tem idade minima para competir;';
    return;
}


if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias)-1; $i++){
        if($categorias[$i] == 'Infantil'){
            echo 'O nadador ', $nome, ' está na categoria ', $categorias[$i];
        }
    }
} 
else if($idade >= 13 && $idade <=18){
    for($i = 0; $i <= count($categorias)-1; $i++){
        if($categorias[$i] == 'Adolescente'){
            echo 'O nadador ', $nome, ' está na categoria ', $categorias[$i];
        }
    }
}
else if($idade >= 60){
    for($i = 0; $i <= count($categorias)-1 ; $i++){
        if($categorias[$i] == 'Sénior'){
            echo 'O nadador ', $nome, ' está na categoria ', $categorias[$i];
        }
    }
    
}




?>