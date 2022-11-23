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
  <h1>Tabela dos Pacientes</h1>
    <div class="bordered striped centered highlight responsive-table">
       <table class="table_style">
            <thead>
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
                $imc=$peso/($altura*$altura);
              echo "  <tr class='active_row'>
               <td>$nome</td>
               <td>$idade</td>
               <td>$peso</td>
               <td>$altura</td>
               <td>$imc</td>
               </tr>"
             ?>
          </tbody>
        </table>
    </div>
</body>
</html>