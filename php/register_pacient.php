<?php
session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location: login.php");    
        exit;
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pagina de cadastro</title>
  <link href="../css/register_pacient.css" rel="stylesheet" type="text/css" />
</head>

<body>
  
   <form class="formulario" method="post" action="table_pacients.php">
       <h1 class="title"><i class="icon icon-mail-1"></i>Cadastro de Pacientes</h1>
        
        <label class="label">
            <span>Nome</span>
            <input type="text" name="nome" class="campo" placeholder="Digite o nome do paciente" required=""/>
        </label>
        
        <label class="label">
            <span>Idade</span>
            <input type="number" name="idade" class="campo" placeholder="Digite a idade do paciente" required=""/>
        </label>
        
        <label class="label">
            <span>Peso</span>
            <input type="number" step="0.01" name="peso" class="campo" placeholder="Digite o peso do paciente" required=""/>   
        </label>
        
          <label class="label">
            <span>Altura</span>
            <input type="number" step="0.01" name="altura" class="campo" placeholder="Digite a altura do paciente" required=""/>   
        </label>
        
        <label class="label"> 
        
            <input type="hidden" name="acao" value="cadastrar"> 
            <button  type="submit" class="botao"> Cadastrar </button>
        
        
        </label>
        
    </form>   
    <a href="exit.php">Sair</a>
</body>

</html>