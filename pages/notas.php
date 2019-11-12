<?php 
    include("../includes/headerPages.php");
    include("../PDO/CrudPDO.php");
?>
<div class="container-fluid text-center img-center">    
	<div class="row content">
		<!-- Coluna Lateral -->
		<div class="col-sm-2 sidenav">
			<center>
				<div class="imguser">
					<img src="../includes/prof.png" height="140px" width="100%"></img>
				</div>
			</center>	
				<br>
				<p><a href="#">Atualizar Frequência</a></p>
				<p><a href="#">Atualizar Notas</a></p>
		</div>
		<!-- Coluna Central -->
		<div class="col-sm-10 text-left"> 
                    <h1>Olá, [nome]!</h1>
                    <p>Você está usando o perfil de <i>Professor</i>.</p>
                    <br>
                    <p>[conteúdo específico por usuário]</p>
                    <hr>
                    <h3>Avisos</h3>
                    <p>[Avisos quaisquer específicos de cada usuário]</p>			
		</div>
                <div id="divTableNotas">
                <table class="tableClass">
                    <thead>
                        <tr>
                            <th>Nome</th><th>Frequ&ecirc;ncia</th><th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- Início do Loop -->
                            <?php
                                $crud = new CrudPDO();
                                $bFetch = $crud->selectDB("av.CodigoNotas, al.Nome, av.Nota, av.Presenca", "Avaliacao", "AS av JOIN Aluno AS al ON av.CodigoAluno = al.CodigoAluno", array());

                                while($fetchs = $bFetch->fetch(PDO::FETCH_ASSOC)){
                                    ?>

                                    <tr>
                                        <td><?php echo $fetchs['al.Nome']; ?></td>
                                        <td><?php echo $fetchs['av.Presenca']; ?></td>
                                        <td><?php echo $fetchs['av.Nota']; ?></td>
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
        </div>
        
</div>
<?php include("../includes/footer.php"); ?>
