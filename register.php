<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
   <!--Container, tamanho do layout padrão-->
  <div class="container">
    <div class="row">
      <?php
      include "conexao.php";
      if(isset($_POST['submit'])) 
      $nome = $_POST['nome'];
      $telefone_celular = $_POST['tefone_celular'];
      $email = $_POST['email'];
      $CPF = $_POST['CPF'];
	    $endereco = $_POST['endereco'];
      $complemento = $_POST['complemento'];
      $cidade = $_POST['cidade'];
	    $UF = $_POST['UF'];
	    $CEP = $_POST['CEP'];
      
      $sql = "INSERT INTO `clientes`(`nome`,`telefone_celular`, `email`, `CPF`, `endereco`, `complemento`, `cidade`, `UF`, `CEP`) VALUES ('$nome','$telefone_celular','$email', '$CPF','$endereco','$complemento','$cidade','$UF', '$CEP')";


      if (mysqli_query($conn, $sql)){
	      mensagem( "$nome cadastrado com sucesso!",'sucess');
      } else
	      mensagem( "$nome NÃO foi cadastrado!", 'danger');
    ?>
    </div>
  </div>
    
 </body>
</html>