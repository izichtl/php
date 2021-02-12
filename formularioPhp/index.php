<?php 




$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = 'Eduardo';
$idade = 20;


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
else{
    for($i = 0; $i <= count($categorias)-1 ; $i++){
        if($categorias[$i] == 'Adulto'){
            echo 'O nadador ', $nome, ' está na categoria ', $categorias[$i];
        }
    }
    
}




?>