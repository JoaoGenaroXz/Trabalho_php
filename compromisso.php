<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="XZone_SemFundo.png" alt="Sistema" style="width:150px;" class="rounded-pill"> 
        </a>
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Cadastro</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastroCompromisso.php" button = "cadastroCompromisso.php">Compromisso</a></li>
                            <li><a class="dropdown-item" href="#" button = "" >Vago</a></li>
                            <li><a class="dropdown-item" href="#"button = "">Vago</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Listagem</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" button = "listarCompromisso.php">Compromisso</a></li>
                            <li><a class="dropdown-item" href="#">Vago</a></li>
                            <li><a class="dropdown-item" href="#">Vago</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="sair.php">Sair</a>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class = "painel">
        <form class="p_lanca" action="gravar.php" method="POST">
            <h1>Cadastro Compromisso</h1>
          <div class="form-group">
            <label for="inputAddress">Descrição</label>
            <input type="text" class="form-control" id="ncompromisso" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="endereco" placeholder="Rua aracaju, nº 0" required>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="inputCity">Cidade</label>
              <input type="text" class="form-control" id="cidade" required>
            </div>
          </div>
          <div class ="form-group">
            <label for="data">Data</label>
              <input type="date" class="form-control" id="data" required>
          </div>
          <div class ="form-group">
            <label for="hora">Hora</label>
              <input type="time" class="form-control" id="hora" required>
          </div>
          <button type="submit" class="salvar">Salvar</button>
        </form>
      </div>
</div>
</body>
</html>