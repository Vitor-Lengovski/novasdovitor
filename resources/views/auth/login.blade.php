@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row mt-3 ">
        <div class="col-12">
            <div class="card w-50 m-auto">
                <div class="card-header">
                    <h1 class="text-center">Login</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="password">Senha</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Entrar</button>
                    </form>  
                </div>
                <div class="card-footer text-muted">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
