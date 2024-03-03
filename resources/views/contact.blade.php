@extends('layouts.main')
@section('title', 'Contato')
@section('content')
<div class="container">
    <h1 class="pt-5">Contato</h1>
    <h2>Contato</h2>
    <div class="container">
        <div class="row text-start pt-5 px-5">
            <h1 class="pt-5">Ensino Fundamental</h1>
            <p>Rua Episcopal, 1859, Centro, São Carlos, SP</p>
            <p>(16) 3362-5044</p>
            <p>suporte@colsaocarlos.com.br</p>
        </div>
        <div class="row text-start pt-5 px-5">
            <h1 class="pt-5">Ensino Médio</h1>
            <p>Rua Episcopal, 1859, Centro, São Carlos, SP</p>
            <p>(16) 3362-5044</p>
            <p>suporte@colsaocarlos.com.br</p>
        </div>
    </div>
    <div class="container">
        <form>
            <div class="mb-3">
                <input type="text" class="form-control rounded-pill border-2" id="name" placeholder="Nome*">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control rounded-pill border-2" id="email" placeholder="Email*">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control rounded-pill border-2" id="name" placeholder="Telefone*">
            </div>
            <div class="mb-3">
                <textarea class="form-control rounded border-2" id="coments" rows="10" placeholder="Assunto*"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2 mb-5 rounded" id="saiba-mais">Enviar</button>
        </form>
    </div>
</div>

@endsection