@extends('layouts.main')
@section('title', 'Home')
@section('content')
<div class="container-fluid px-0" id="banner">
    <video autoplay muted loop src="/img/video/banner.mp4" id="banner-video" type="video/mp4"></video>
</div>
<div class="container" id="about">
    <div class="row justify-content-around align-items-center">
        <h2 class="text-center mt-5 fs-7">Sobre Nós</h2>
        <h1 class="text-center my-5 fw-3">Quem somos</h1>
        <img class="mx-auto my-auto h-50" src="/img/fachada.png" alt=""/>
        <p class="mt-5 px-5">Desde 1905 somos uma escola que mantém uma tradição de ensino de alta qualidade que nos diferencia das outras da cidade
            e região.
        </p>
        <p class="mt-5 px-5">Nossos alunos recebem não apenas uma educação sólida, mas também são incentivados a serem cidadãos ativos e positivos
            em nossa sociedade.
        </p>
        <p class="mt-5 px-5">Contamos com um rico capital intelectual de professores excepcionalmente qualificados e experientes, 
            que demonstram o compromisso contínuo com a sua própria atualização na área educacional e desenvolvimento pessoal.
        </p>
        <a href="/sobre-nos" class="btn btn-primary">Saber mais</a>
    </div>
</div>
<div class="container text-start mt-5" id="yellow-box">
    <div class="row align-items-center">
        <div class="col">
            <img src="/img/yellow-hat.png" alt="">
        </div>
        <div class="col">
            <p>Educação de qualidade</p>
            <p>Desde 1906</p>
        </div>
    </div>
</div>
<div class="container-fluid pt-5" id="learning">
    <h2>níveis de ensino</h2>
    <h1>educação infantil</h1>
    <img src="/img/infantil.png" alt="" class="w-75"/>
    <div class="row align-items-center mt-5">
        <div class="col">
            <img src="/img/book.png" alt="">
            <p class="text-capitalize text-warning mt-3">material didático completo</p>
        </div>
        <div class="col">
            <img src="/img/eng.png" alt="">
            <p class="text-capitalize text-warning mt-3">Programa Bilíngue</p>
        </div>
        <a href="/ensinos" class="btn btn-warning">Saiba Mais</a>
    </div>
</div>
<div class="container" id="student">
    <div class="row align-items-center mt-5">
        <img src="/img/student.png" alt="" class="img-fluid">
    </div>
    <div class="row align-items-center mt-5">
        <img src="/img/ftd.png" alt="" class="w-50 mx-auto">
    </div>
</div>
<div class="container" id="bilingue">
    <h2>niveis de ensino</h2>
    <h1>programa bilíngue</h1>
    <p>Criado para transformar o ensino-aprendizado de Inglês das escolas, o StandFor Evolution é um programa de carga horária 
        que proporciona às crianças e aos adolescentes o estudo e a vivência de uma segunda língua, tornando-os cidadãos bilíngues 
        e aptos para interagir e ir além.
    </p>
    <div class="row">
        <div class="col">
            <img src="/img/check-squared.png" alt="">
        </div>
        <div class="col">
            <p>+360</br>Escolas</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="/img/check-squared.png" alt="">
        </div>
        <div class="col">
            <p>+93.500</br>Estudantes</p>
        </div>
    </div>
    <button class="btn btn-primary">Saber Mais</button>
</div>
<div class="container" id="infra">
    <h2>infraestrutura</h2>
    <h1>Esteja por dentro da melhor escola de São Carlos</h1>
    <p>No Colégio São Carlos, proporcionamos mais do que apenas uma educação excepcional - oferecemos um ambiente educacional 
        verdadeiramente enriquecedor.
    </p>
    <p>Nossa escola é um espaço amplo e dinâmico, projetado para inspirar o aprendizado e o crescimento.</p>
    <img src="/img/pool.png" alt="" class="h-50">
    <div class="row">
        <div class="col">
            <img src="/img/check-rounded.png" alt="">
        </div>
        <div class="col">
            <p>Piscina aquecida</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="/img/check-rounded.png" alt="">
        </div>
        <div class="col">
            <p>Biblioteca</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="/img/check-rounded.png" alt="">
        </div>
        <div class="col">
            <p>Laboratório</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="/img/check-rounded.png" alt="">
        </div>
        <div class="col">
            <p>Quadras cobertas e descobertas</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="/img/check-rounded.png" alt="">
        </div>
        <div class="col">
            <p>Salão de dança</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="/img/check-rounded.png" alt="">
        </div>
        <div class="col">
            <p>Salas de aulas modernas</p>
        </div>
    </div>
    <button class="btn btn-primary">Saber Mais</button>
</div>
<div class="container mt-5" id="levels">
    <div class="container rounded" id="sas">
        <div class="row align-items-center">
            <img src="/img/sas.png" alt="" class="w-50 mx-auto my-5">
            <p class="px-5">O SAS Educação é uma plataforma de educação que oferece soluções completas e integradas para as escolas parceiras.</p>
            <p class="px-5">Atualmente, conta com mais de 1.100 escolas parceiras em todo o Brasil. Sua atuação inclui livros didáticos, alinhados 
                à BNCC e vai muito além disso! Trabalha com modelos de avaliações para cada etapa da vida escolar, com formações 
                continuadas para gestão e docência e com consultorias especializadas.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <img src="/img/table.png" alt="" class="mx-auto"/>
        </div>
    </div>
</div>
@endsection