@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>Novas do Vitor - Categorias</h1>
            <a href="{{route('categories.create')}}" class="btn btn-success">Inserir</a>
        </div>
    </div>  
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
                @foreach($categories as $category)
                    <tr>
                        <th>{{ $category->id }}</th>
                        <th>{{ $category->name }}</th>
                        <th>{{ $category->description }}</th>
                        <th>{{ ($category->active) ? 'Sim' : 'Não' }}</th>

                        <th>
                            <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-info">Editar</a>
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