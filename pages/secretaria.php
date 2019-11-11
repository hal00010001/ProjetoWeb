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
                                    <img src="../includes/sec.png" height="140px" width="100%"></img>
				</div>
			</center>	
				<br>
                                <p><a href="professor.php">Incluir / Alterar Professor</a></p>
                                <p><a href="materia.php">Incluir / Alterar Disciplina</a></p>
                                <p><a href="turma.php">Incluir / Alterar Turma</a></p>
                                <p><a href="aluno.php">Incluir / Alterar Aluno</a></p>
		</div>
		<!-- Coluna Central -->
		<div class="col-sm-10 text-left"> 
			<h1>Olá, [nome]!</h1>
			<p>Você está usando o perfil de <i>Secretária</i>.</p>
			<br>
			<p>[conteúdo específico por usuário]</p>
			<hr>
			<h3>Avisos</h3>
			<p>[Avisos quaisquer específicos de cada usuário]</p>
			
		</div>
	</div>
</div>
<?php include("../includes/footer.php"); ?>