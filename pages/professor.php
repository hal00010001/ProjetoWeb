<?php 
    include("../includes/headerPages.php");
    include("../PDO/CrudPDO.php");
?>

        <h2>Professor</h2>
        <div id="divPW">
            <div id="divTable">
                <table class="tableClass">
                    <thead>
                        <tr>
                            <th>Nome</th><th>CPF</th><th>Email</th><th>Fun&ccedil;&otilde;es</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- Início do Loop -->
                            <?php
                                $crud = new CrudPDO();
                                $bFetch = $crud->selectDB("*", "Professor", "", array());

                                while($fetchs = $bFetch->fetch(PDO::FETCH_ASSOC)){
                                    ?>

                                    <tr>
                                        <td><?php echo $fetchs['Nome']; ?></td>
                                        <td><?php echo $fetchs['CPF']; ?></td>
                                        <td><?php echo $fetchs['Email']; ?></td>
                                        <td>
                                            <a href="<?php echo "professorVisualizar.php?id={$fetchs['CodigoProfessor']}"; ?>">Visualizar</a>
                                            <a href="<?php echo "professorForm.php?id={$fetchs['CodigoProfessor']}"; ?>">Editar</a>
                                            <a class="deletar" href="<?php echo "../Controller/ProfessorDeletar.php?id={$fetchs['CodigoProfessor']}"; ?>">Deletar</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="linkNovo">
                <a href="professorForm.php">Novo Professor</a>
            </div>            
        </div>        
    <?php include("../includes/footer.php"); ?>