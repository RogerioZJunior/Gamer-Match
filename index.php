<?php
    namespace Projeto\GamerMatch;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Página Inicial</title>
</head>
<body>

       <!-- ===================== HEADER ===================== -->
  <header class="gm-header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid px-4">
 
        <a class="navbar-brand gm-brand" href="#">
          <img src="imagens/logo.png" alt="GamerMatch" class="gm-logo-img">
          <span class="gm-brand-text">Plataforma de<span class="text-accent">eSports</span>
        </a>
 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#gmNav" aria-controls="gmNav" aria-expanded="false" aria-label="Abrir menu">
          <i class="bi bi-list"></i>
        </button>
 
        <div class="collapse navbar-collapse" id="gmNav">
          <ul class="navbar-nav mx-auto gm-nav">
            <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
            <li class="nav-item"><a class="nav-link" href="#eventos">Eventos</a></li>
            <li class="nav-item"><a class="nav-link" href="#jogos">Jogos</a></li>
            <li class="nav-item"><a class="nav-link active" href="#equipes">Equipes</a></li>
            <li class="nav-item"><a class="nav-link" href="#jogadores">Jogadores</a></li>
            <li class="nav-item"><a class="nav-link" href="#ranking">Ranking</a></li>
            <li class="nav-item"><a class="nav-link" href="#noticias">Notícias</a></li>
          </ul>
 
          <div class="d-flex align-items-center gap-2 gm-actions">
            <button id="themeToggle" class="btn btn-icon" type="button" title="Alternar tema" aria-label="Alternar tema claro/escuro">
              <i class="bi bi-sun-fill"></i>
            </button>
            <a href="login.html" class="btn btn-outline-light btn-sm gm-btn-outline">
              <i class="bi bi-box-arrow-in-right"></i> Entrar
            </a>
            <a href="cadastrar.html" class="btn btn-sm gm-btn-primary">
              <i class="bi bi-person-plus-fill"></i> Cadastre-se
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>
 


    <h1> Página Inicial </h1>
    <a href="view\cadastrar.php"><button>Cadastrar Usuario</button></a>
    <a href="view\Equipe.php"><button>Cadastrar Equipe</button></a>
    <a href="view\Jogo.php"><button>Cadastrar Jogo</button></a>
    <a href="view\Partida.php"><button>Cadastrar Partida</button></a>
    <a href="view\Campeonato.php"><button>Cadastrar Campeonato</button></a> <br><br>

    <a href="view\consultar.php"><button>Consultar</button></a>
    <a href="view\atualizar.php"><button>Atualizar</button></a>
    <a href="view\excluir.php"><button>Excluir</button></a>
</body>
</html>