<?php

if(isset($_POST['acao'])){
    $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['acao'])){
    $acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}
else {
    $acao = 0;
}

if(isset($_POST['id'])){
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}
else {
    $id = 0;
}


if(isset($_POST['nome'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['nome'])){
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}
else {
    $nome = "";
}


if(isset($_POST['cpf'])){
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['cpf'])){
    $cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
}
else {
    $cpf = "";
}


if(isset($_POST['email'])){
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['email'])){
    $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
}
else {
    $email = "";
}