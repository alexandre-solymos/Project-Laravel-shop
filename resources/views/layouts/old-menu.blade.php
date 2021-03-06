
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/articles"><i class="fi fi-home"></i>
                        Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">Cart
                        @if(Cart::instance('default')->count() > 0)
                            <span>{{ Cart::instance('default')->count() }}</span>
                        @endif</a>
                </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                @if (Auth::user())
                    @if (Auth::user()->role === 'ADMIN')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">Admin</a>
                        </li>
                    @endif


                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn">Deconnexion</button></form>
                    </li>
                @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">inscription</a>
                    </li>

                @endif


            </ul>

        </div>
    </div>
</nav>
