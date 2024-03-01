<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Arquivos Proprietarios -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>Colégio São Carlos - @yield('title')</title>
</head>
<body>
<nav class="navbar bg-body-navbar navbar-expand-lg sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="/img/logo.png" alt="Logo" width="210" height="60" class="d-inline-block align-text-top ms-3">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto me-5" id="menu">
        <li class="nav-item px-3">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/#about">Sobre Nós</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/#learning">Níveis de Ensino</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="/contato">Fale Conosco</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid px-0">
        @yield('content')
</div>
<div class="footer pt-5">
  <div class="row text-center">
    <img class="mx-auto my-auto w-50 my-5" src="/img/logo.png" />
    <p class="my-5 fw-bold">Valores eternos, tempos modernos.</p>
    <p class="fw-bold">Sobre Nós</p>
    <ul class="footer-menu">
        <li><a href="#">História</a></li>
        <li><a href="#">Pilares e Valores</a></li>
        <li><a href="#">Estrutura</a></li>
    </ul>
  </div>
  <hr>
  <div class="row text-center">
    <p class="fw-bold">Ensino</p>
    <ul class="footer-menu">
        <li><a href="#">Educação Infantil</a></li>
        <li><a href="#">Ensino Fundamental</a></li>
        <li><a href="#">Ensino Médio</a></li>
        <li><a href="#">Programa Bilíngue</a></li>
    </ul>
  </div>
  <hr>
  <div class="row text-center">
    <p class="fw-bold">Contato</p>
    <ul class="footer-menu">
        <li><a href="#">Atendimento</a></li>
        <li><a href="#">Canal Direto</a></li>
        <li><a href="#">Agende uma visita</a></li>
    </ul>
  </div>
  <hr>
  <div class="row text-center">
    <img src="/img/active.png" alt="" class="w-25 mx-auto">
    <p class="fw-bold">ActiveSoft - Siga</p>
    <p>Acesso às informações pedagógicas e administrativas.</p>
  </div>
  <div class="row text-center">
    <img src="/img/classapp.png" alt="" class="w-25 mx-auto">
    <p class="fw-bold">Class App</p>
    <p>Acesso ao aplicativo de comunicação com a nossa instituição.</p>
  </div>
  <div class="row text-center">
    <img src="/img/sas-bg.png" alt="" class="w-25 mx-auto">
    <p class="fw-bold">Portal SAS</p>
    <p>Acesso ao Eureka, Educacross, livros digitais, avaliações, simulados, entre outras ferramentas.</p>
  </div>
  <div class="row text-center">
    <img src="/img/ftd.png" alt="" class="w-25 mx-auto">
    <p class="fw-bold">StandFlor Evolution</p>
    <p>Informações sobre o nosso programa bilíngue.</p>
  </div>
  <hr>
  <p class="text-center mt-5">Rua Episcopal, 1859 - Centro. São Carlos/SP.</p>
  <p class="text-center mb-5">(16) 3362-5044</p>
  <p class="text-center mt-5">Todos os direitos reservados 2024 Colégio São Carlos.</p>
  <p class="text-center mb-5">Protegendo a propriedade intelectual e garantindo sua segurança online.</p>
  <img class="img-fluid mt-5" src="/img/fachada.png" alt=""/>
</div>
</body>
</html>