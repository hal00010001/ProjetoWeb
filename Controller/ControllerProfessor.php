<?php

require_once ROOT_PATH.'/PDO/ProfessorPDO.php';

$crud = new ProfessorPDO();

$crud->insertProfessor(0, "Almir", "70984131949", "hal0001@gmail.com");
