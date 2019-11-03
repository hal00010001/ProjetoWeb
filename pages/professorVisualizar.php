<?php

include("../includes/headerPages.php");
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
    <strong>Nome:</strong> <?php echo $fetchs['Nome']; ?><br/>
    <strong>CPF:</strong> <?php echo $fetchs['CPF']; ?><br/>
    <strong>Email:</strong> <?php echo $fetchs['Email']; ?><br/>
</div>
<?php include("../includes/footer.php"); ?>
