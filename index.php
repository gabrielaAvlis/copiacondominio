<!DOCTYPE html>
<html lang="pt-br"></html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-widht, initial-sacle=1, shrink-tofit=no">
  <title>Gerenciamento de Condominio</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>


<body>

   <!--Container, tamanho do layout padrão-->
   <div class="container"></div>

  <!--Menu-->
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">Gerenciamento de Condominio</a>
      <div class="position-relative">
        <div class="position-absolute top-0 start-0"></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="cliente.php">MEUS CLIENTES</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="imoveil.php">IMOVEL</a>
          </li> 

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              RELATORIOS
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Clientes</a></li>
              <li><a class="dropdown-item" href="#">Imoveis</a></li>
              <li><a class="dropdown-item" href="#">Faturas</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>

          <nav class="navbar bg-blue">
            <div class="container-fluid">
              <form class="d-flex" role="Pesquisar">
                <input class="form-control me-2" type="Pesquisar" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              </form>
            </div>
          </nav>
    
    <div class="fixed-bottom text-center bg-info nav flex-column fw-bold"><!--Rodape-->
      <p> Gestao De Condominio</p> 
      <p>Email : GestaoDeCondominio@gmail.com</p> 
      <p>Telefone: +55 (91) 98411-4045 </p>
    </div>

</body>
</html>
