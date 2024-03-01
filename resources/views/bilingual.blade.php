@extends('layouts.main')
@section('title', 'Programa Bilíngue')
@section('content')
<div class="container">
    <h2 class="pt-5">Ensinos</h2>
    <div class="row mt-3 mb-5">
        <p><a href="/ensinos" class="navlink">Níveis de Ensino</a> &#62; <a href="/programa-bilingue" class="navlink fw-bold">Programa Bilíngue</a> &#62; <a href="/material-sas" class="navlink">Material SAS</a></p>
    </div>
    <h1 class="text-center">Programa Bilíngue</h1>
    <img src="/img/bilingual.png" alt="" class="d-block mx-auto w-75">
    <div class="container">
        <div class="row text-start pt-5 px-5">
            <p>Uma proposta da FTD Educação para desenvolver alunos bilíngues.</p>
            <p>Criado para transformar o ensino-aprendizado de Inglês das escolas,o StandFor Evolution é um programa de carga horária 
                estendida que proporciona às criançcas e aos adolescentes o estudo e a vivência de uma segunda língua, tornando-os 
                cidadãos bilíngues e aptos para interagir e ir além.
            </p>
            <p>.
            </p>
            <p>O SAS está aqui para trabalhar em parceria daqueles que se dedicam em todos os dias para alcançar o sonho de uma Educação 
                de excelência, garantindo o desenvolvimento completo dos nossos estudantes e os preparando para o mundo. Fazemos o que 
                fazemos porque acreditamos que a Educação transforma pessoas e pessoas transformam o mundo.
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
            <h1 class="my-5">Entenda o programa</h1>
            <img src="/img/program.png" alt="..." class="mb-5 d-block mx-auto" />
        </div>
    </div>
</div>
<div class="container-fluid footer px-5">
    <p class="pt-5"><bold-yellow>StandFor Evolution</bold-yellow> tem os <bold-yellow>melhores materiais</bold-yellow> para tornar os alunos 
    bilíngues</p>
    <p>O aluno vai estudar e se desenvolver com os materiais impressos e digitais <bold-yellow>StandFor</bold-yellow>, selo de 
    Inglês da <bold-yellow>FTD Educação.</bold-yellow></p>

    <p>Livros didáticos que promovem o desenvolvimento das competências do século XXI.</p>
    <p>Livros de leitura que facilitam o aprendizado de Inglês e aumentam o vocabulário.</p>
    <p>Livro digital como uma forma dinâmica de levar a tecnologia para a sala de aula.</p>
    <p class="mb-5">Iônica, o ambiente digital da FTD Educação.</p>
    <img src="/img/idea.png" alt="" class="img-fluid">
</div>
@endsection