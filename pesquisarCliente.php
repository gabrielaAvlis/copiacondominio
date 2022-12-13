<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>

  <?php
    
    $pesquisarCliente = $_POST['busca'] ?? '';
    
    include "conexao.php";

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '$%$pesquisarCliente%' ";

    $dados = mysqli_query($mysqli, $sql);

    while($linha = mysqli_fetch_assoc($dados)) {
      foreach ($linha as $key => $value) {
          echo "$key: $value<br>";
      }
      echo "hr";
    }

   ?>

   <!--Container, tamanho do layout padrão-->
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Pesquisar</h1>
        <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="pesquisarCliente.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </nav>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">UF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nome</th>
                    <td> Rua x </td>
                    <td> 999999999 </td>
                    <td> PA </td>
                </tr>
            </tbody>        

        </table>
        
        <a href="cliente.php" class="btn btn-info">Voltar para o inicio</a>     
      </div>
    </div>
  </div>
    

    
 </body>
</html>
