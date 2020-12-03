@extends('partials.layout')

@section('content')
<div class="container-fullwidth">
    <nav class="navbar navbar-dark bg-dark justify-content-between navbar-expand-lg">
    <a class="navbar-brand" href="#">
        <img src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_N_blue-512.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Novas do Vitor
    </a>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">Notícias Quentes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    @if (Auth::check())
        <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('logout') }}" type="submit">Sair</a>
    @else
        <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('login') }}" type="submit">Login</a>
    @endif
    </nav> 
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @foreach($posts as $post)
                        <div>
                            <h2 class="text-success text-justify">{{$post->title}}</h2>
                            <p class="text-justify">{{$post->summary}}</p>
                            <p class="text-justify">{{$post->text}}</p>
                            <div class="row align-items-end">
                                <p class="col-6">{{ ($post->active) ? 'Ativa' : 'Inativa' }}</p>
                                <p class="col-6">Postada em {{$post->created_at->format('d/m/Y')}}</p>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
