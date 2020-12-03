@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>Novas do Vitor - Postagens</h1>
            <a href="{{route('posts.create')}}" class="btn btn-success">Inserir</a>
        </div>
    </div>  
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Data</th>
                    <th>Título</th>
                    <th>Sumário</th>
                    <th>Texto</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
                @foreach($posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <th>{{ $post->category->name }}</th>
                        <th>{{ $post->created_at }}</th>
                        <th>{{ $post->title }}</th>
                        <th>{{ $post->summary }}</th>
                        <th>{{ $post->text }}</th>
                        <th>{{ ($post->active) ? 'Sim' : 'Não' }}</th>
                        


                        <th>
                            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-info">Editar</a>
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </div>
                            </form>
                        </th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>  
</div>
@endsection