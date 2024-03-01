@extends('layouts.main')
@section('title', 'Pilares e Valores')
@section('content')
<div class="container">
    <h2 class="pt-5">Sobre Nós</h2>
    <div class="row mt-3 mb-5">
        <p><a href="/quem-somos" class="navlink">Quem Somos</a> &#62; <a href="/pilares-e-valores" class="navlink">Pilares e Valores</a> &#62; <a href="/nossa-infraestrutura" class="navlink fw-bold">Nossa Infraestrutura</a></p>
    </div>
    <h1 class="text-center">Nossa Infraestrutura</h1>
    <div class="container">
        <div class="row text-start pt-5 px-5">
            <p>No Colégio São Carlos, proporcionamos muito mais do que uma educação excepcional - oferecemos um ambiente educacional 
                verdadeiramente enriquecedor. Nossa escola é um espaço amplo e dinâmico, projetado para inspirar o aprendizado e o 
                crescimento tanto acadêmico quanto pessoal. A infraestrutura do Colégio São Carlos é cuidadosamente planejada para 
                garantir que os alunos tenham acesso a uma ampla gama de recursos que estimulem sua curiosidade e criatividade.
            </p>
            <p><bold>A piscina coberta</bold> e aquecida, além de um local para atividades físicas, é também um espaço onde os alunos podem aprender 
                sobre segurança na água e técnicas de natação.
            </p>
            <p><bold>A bilbioteca</bold> é um oásis de conhecimento, repleto de uma vasta coleção de livros e revistas proporcionando 
            um ambiente tranquilo para a leitura e pesquisa.
            </p>
            <p><bold>O laboratório</bold> de ciências é equipado com tecnologia de ponta, permitindo que os estudantes realizem experimentos 
            práticos e descubram o mundo da química, física e biologia de forma envolvente.
            </p>
            <p><bold>Nas quadras cobertas e descobertas</bold>, os alunos participam de atividades esportivas que promovem o trabalho em equipe, a disciplina e o espírito 
            esportivo.</p>
            <p><bold>No salão de dança</bold>, a criatividade floresce, onde os alunos podem explorar diferentes estilos de dança, expressar 
            suas emoções e desenvolver habilidades motoras enquanto se divertem.
            </p>
            <p><bold>As salas de aula modernas</bold> são equipadas com tecnologia de ponta, proporcionando um ambiente propício para a aprendizagem colaborativa e 
            interativa.
            </p>
            <p>No Colégio São Carlos, a educação vai além da sala de aula.</p>
            <p class="mb-5">Se você valoriza a educação de qualidade e deseja um ambiente de aprendizado enriquecedor para seus filhos, sua decisão é 
                clara: escola o Colégio São Carlos.
            </p>
            <div class="row text-center">
                <div class="col-md-4">
                    <h2 class="mt-5">Piscina coberta e descoberta</h2>
                    <img src="/img/pool2.png" alt="" class="d-block mx-auto w-75">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">Quadras coberta e descoberta</h2>
                    <img src="/img/quadra.png" alt="" class="d-block mx-auto w-75">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">Salas de aulas</h2>
                    <img src="/img/classroom.png" alt="" class="d-block mx-auto w-75">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">Laboratórios</h2>
                    <img src="/img/lab.png" alt="" class="d-block mx-auto w-75">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">Biblioteca</h2>
                    <img src="/img/library.png" alt="" class="d-block mx-auto w-75">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">Sala de dança</h2>
                    <img src="/img/dance.png" alt="" class="d-block mx-auto w-75">
                </div>
                <div class="col-md-4">
                    <h2 class="mt-5">Diversas</h2>
                    <img src="/img/chess.png" alt="" class="d-block mx-auto w-75 mb-5">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection