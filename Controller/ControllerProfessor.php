<?php

require_once ROOT_PATH.'/PDO/ProfessorPDO.php';

$crud = new ProfessorPDO();

$crud->insertProfessor($id, $nome, $cpf, $email);
