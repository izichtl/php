<?php 
session_start();




$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Sénior';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['erro-nome'] = 'O nome não pode ser vazio';
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3){
    $_SESSION['erro-nome'] = 'O nome não pode ter menos do que 3 caracteres';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40){
    $_SESSION['erro-nome'] = 'O nome não pode ter mais do que 40 caracteres';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade)){
    $_SESSION['erro-nome'] = 'Por favor preencha a idade com um numero';
    header('location: index.php');
    return;
}
else if($idade < 6){
    $_SESSION['erro-nome'] = 'O participante não tem idade minina para competir';
    header('location: index.php');
    return;
}
    
    
    
if($idade >= 6 && $idade <= 12){
        for($i = 0; $i <= count($categorias)-1; $i++){
        if($categorias[$i] == 'Infantil'){
            $_SESSION['sucesso'] = 'O nadador '.$nome. ' está na categoria '.$categorias[$i];
            header('location: index.php');
            return;
        }
    }
} 
else if($idade >= 13 && $idade <=18){
    for($i = 0; $i <= count($categorias)-1; $i++){
        if($categorias[$i] == 'Adolescente'){
            $_SESSION['sucesso'] = 'O nadador '.$nome. ' está na categoria '.$categorias[$i];
            header('location: index.php');
            return;
            
        }
    }
}
else if($idade >= 60){
    for($i = 0; $i <= count($categorias)-1 ; $i++){
        if($categorias[$i] == 'Sénior'){
            $_SESSION['sucesso'] = 'O nadador '.$nome. ' está na categoria '.$categorias[$i];
            header('location: index.php');
            return;

        }
    }
    
}



?>