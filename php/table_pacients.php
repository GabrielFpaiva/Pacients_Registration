<?php
session_start();
    if(!isset($_SESSION["usuario"])){
        echo"<script>alert('Efetue o login primeiro!');</script>";
        echo'<script>window.location="login.php";</script>';
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela</title>
    <link rel="stylesheet" href="../css/table_pacients.css">
</head>
<body>
  <span class="title"><h1>Tabela dos Pacientes</h1></span>
  <hr width="50%">
    <div class="bordered striped centered highlight responsive-table">
       <table class="table_style">
             <thead >
                <tr>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Peso</th>
                  <th>Altura</th>
                  <th>IMC</th>
                </tr>
             </thead>
          <tbody>
          <?php
            $nome=[];
            $idade=[];
            $peso=[];
            $altura=[];
            if (! empty( $_POST)){
              $nome = $_POST["nome"];
              }
            if (! empty( $_POST)){
              $idade = $_POST["idade"];
              }
            if (! empty( $_POST)){
              $peso = $_POST["peso"];
              }
            if (! empty( $_POST)){
              $altura = $_POST["altura"];
              }
              $peso=(float)$peso;
              $altura=(float)$altura;
              $imc=$peso/($altura*$altura);
             function conexão(){
               $SERVER="localhost";
               $USERNAME="root";
               $PASSWORD="";
               $BANCODEDADOS="bancodados";
               $PORT= 3306;
               $link = mysqli_connect("localhost", "root", "");
               mysqli_query($link, "CREATE DATABASE IF NOT EXISTS bancodados");
               $BANCODEDADOS="bancodados";
               $conect = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$BANCODEDADOS,$PORT);
               //ver um jeito de criar banco de dados e tabelas sozinho
               return $conect;
              }
               $conect=conexão();
               //query banco de dados
              
               mysqli_query($conect, "CREATE TABLE IF NOT EXISTS dados(
                nome VARCHAR(100),
                idade INT ,
                peso FLOAT ,
                altura FLOAT ,
                imc FLOAT)"); 

               $sql="INSERT INTO dados(nome,idade,peso,altura,imc)VALUES('$nome',$idade,$peso,$altura,$imc)";
               mysqli_query($conect, $sql);
               // criar variavel para guardar o que vai ser guardado para facilitar a query
               $rows = mysqli_query($conect,"SELECT * FROM dados");
               $nome=[];
               $idade=[];
               $peso=[];
               $altura=[];
               $imc=[];
               while($row = mysqli_fetch_assoc($rows)){
                 //armazena a informação contida na coluna do BD
                 $i=0;
                 $nome[$i] = $row ["nome"];
                 $idade[$i] = $row ["idade"];
                 $peso[$i] = $row ["peso"];
                 $altura[$i] = $row ["altura"];
                 $imc[$i] = $row ["imc"];
                 echo 
                 "<tr class='active_row'>
                 <td align=>$nome[$i]</td>
                 <td>$idade[$i]</td>
                 <td>$peso[$i]</td>
                 <td>$altura[$i]</td>
                 <td>$imc[$i]</td>
                 </tr>";
                 $i++;
                }
                ?>
          </tbody>
        </table>
        <form action="../php/register_pacient.php" >
          <button class="button">Cadastrar novo paciente</button>
        </form>
           
    </div>
    </body>
</html>