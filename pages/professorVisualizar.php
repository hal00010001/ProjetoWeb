<?php

include("../includes/header.php");
include("../PDO/CrudPDO.php");

?>
<div class="divPW">
    
    <?php
        
        $crud = new CrudPDO();
        $idUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $bFetch = $crud->selectDB("*", "Professor", "where CodigoProfessor = ?", array($idUser));
        echo "ID User: " . $idUser;
        $fetchs = $bFetch->fetch(PDO::FETCH_ASSOC);
            
    ?>
    <h4>Dados do Professor</h4>
    <hr>
    <strong>Nome:</strong> <?php echo $fetchs['nome']; ?><br/>
    <strong>CPF:</strong> <?php echo $fetchs['cpf']; ?><br/>
    <strong>Email:</strong> <?php echo $fetchs['email']; ?><br/>
</div>
<?php include("../includes/footer.php"); ?>
