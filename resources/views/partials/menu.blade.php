<nav class="navbar navbar-dark bg-dark justify-content-between navbar-expand-lg">
    <a class="navbar-brand" href="/">
        <img src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_N_blue-512.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Novas do Vitor
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvb" aria-controls="nvb" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nvb">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Postagens</a>
            </li> 
                    
        </ul>
    </div>
    <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('logout') }}" type="submit">Sair</a>
</nav>