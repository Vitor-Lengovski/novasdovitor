@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>Novas do Vitor - Postagens</h1>
        </div>
    </div>  
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            @include('partials.errors')

            @if($post->id)
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @else
            <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @endif
                
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="title">Título</label> 
                        <input type="text" name="title" id="title" class="form-control" placeholder="Digite o título da notícia" value="{{ $post->title }}">
                    </div> 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="summary">Sumário</label> 
                        <input type="text" name="summary" id="summary" class="form-control" placeholder="Digite o sumário da notícia" value="{{ $post->summary }}">
                    </div> 
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="text">Texto</label> 
                        <textarea name="text" id="text" rows="5" class="form-control" placeholder="Digite o texto da notícia"> {{$post->text}} </textarea>
                    </div> 
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="0">Selecione...</option>
                            @foreach($categories as $category)
                                @if($category->id == $post->category_id)
                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="custom-control custom-switch">
                            @if($post->active)
                                <input type="checkbox" name="active" id="active" class="custom-control-input" value="S" checked>
                            @else
                                <input type="checkbox" name="active" id="active" class="custom-control-input" value="S">
                            @endif
                            <label for="active" class="custom-control-label">Notícia Ativa</label>                        
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>  
</div>
@endsection
