<?php
    
    include("../PDO/CrudPDO.php");
    
    if(isset($_GET['id'])){
        $acao = "editar";
        $crud = new CrudPDO();
        $bFetch = $crud->selectDB("*", "Professor", "where CodigoProfessor = ?", array($_GET['id']));
        $fetchs = $bFetch->fetch(PDO::FETCH_ASSOC);
        $id = $fetchs['CodigoProfessor'];
        $nome = $fetchs['Nome'];
        $cpf = $fetchs['CPF'];
        $email = $fetchs['Email'];
    }
    else {
        $acao = "cadastrar";
        $id = 0;
        $nome = "";
        $cpf = "";
        $email = "";
    }
?>
<div class="resultado"></div>
<div class="formulario">
    <h1 class="center">Cadastro</h1>
    <form name="formCadastro" id="formCadastro" method="post" action="../Controller/ProfessorCadastrar.php">
        <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>" />
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
        <div class="formularioInput">
            Nome: <br/>
            <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" />
        </div>
        <div class="formularioInput">
            CPF: <br/>            
            <input type="number" id="cpf" name="cpf" value="<?php echo $cpf; ?>" />
        </div>
        <div class="formularioInput">
            Email: <br/>
            <input type="email" id="email" name="email" value="<?php echo $email ?>" />
        </div>
        <div class="formularioInput">
            <input type="submit" value="Cadastrar" />
        </div>
    </form>        
</div>
