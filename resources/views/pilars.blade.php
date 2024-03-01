@extends('layouts.main')
@section('title', 'Pilares e Valores')
@section('content')
<div class="container">
    <h2 class="pt-5">Sobre Nós</h2>
    <div class="row mt-3 mb-5">
        <p><a href="/quem-somos" class="navlink">Quem Somos</a> &#62; <a href="/pilares-e-valores" class="navlink fw-bold">Pilares e Valores</a> &#62; <a href="/nossa-infraestrutura" class="navlink">Nossa Infraestrutura</a></p>
    </div>
    <h1 class="text-center mb-5">Pilares e Valores</h1>
    <div class="container">
        <div class="row text-start pt-5 px-5">
            <p>Há mais de um século, o Colégio São Carlos é um farol de educação e integridade. Desde 1905, nossa instituição tem 
                sido um lar onde a excelência acadêmica e os valores cristãos se encontram.
            </p>
            <p>Aqui buscamos criar vencedores para a vida, fundamentados na compaixão, respeito e inovação. Em nossa jornada educacional, 
                cultivamos não apenas mentes brilhantes, mas também corações compassivos.
            </p>
            <p>Explore conosco nossos pilares sólidos e valores profundos, que moldam a essência do Colégio São Carlos.</p>
            <p class="mb-5">Seja bem-vindo a uma comunidade onde o conhecimento se encontra com o caráter, preparando cada aluno para um futuro promissor.</p>
            <h1 class="mb-5">Nossos pilares</h1>
            <div class="row mt-3">
                <div class="col-md-5">
                    <img src="/img/hat.png" alt="" class="d-block mx-auto">
                    <h3 class="text-center mt-3">Educação de Qualidade desde 1905</h3>
                    <p class="text-center mt-3">Compromisso inabalável com a excelência educacional ao longo de mais de um século.</p>
                </div>
                <div class="col-md-5">
                    <img src="/img/heart.png" alt="" class="d-block mx-auto">
                    <h3 class="text-center mt-3">Valores Cristãos</h3>
                    <p class="text-center mt-3">Fundamentado em princípios éticos e morais, promovendo a empatia, respeito e amor ao 
                        próximo.</p>
                </div>
                <div class="col-md-5">
                    <img src="/img/clock.png" alt="" class="d-block mx-auto">
                    <h3 class="text-center mt-3">Desenvolvimento Integral</h3>
                    <p class="text-center mt-3">No Colégio São Carlos, garantimos o desenvolvimento integral dos alunos com uma ampla 
                        variedade de atividades, tanto de manhã quanto à tarde.</p>
                </div>
                <div class="col-md-5">
                    <img src="/img/pin.png" alt="" class="d-block mx-auto">
                    <h3 class="text-center mt-3">Formação de Vencedores para a Vida</h3>
                    <p class="text-center mt-3">Preparamos os alunos para enfrentar desafios, adotar a resiliência e desenvolver 
                        habilidades para o sucesso em todas as áreas da vida.</p>
                </div>
                <div class="col-md-5">
                    <img src="/img/connection.png" alt="" class="d-block mx-auto">
                    <h3 class="text-center mt-3">Comunidade e Colaboração</h3>
                    <p class="text-center mt-3">Favorecemos um ambiente de aprendizado inclusivo, onde a colaboração e a comunidade são 
                        valorizadas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection