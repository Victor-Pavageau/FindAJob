<nav class="navbar navbar-light" style="background-color: #fff;">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{ asset('logo.png') }}" width="50" height="50" class="d-inline-block align-middle" alt="">
        <p class="d-inline-block align-bottom" alt="">Trouve 1 Job</p>
    </a>
    <nav class="float-right">
        @if(!Cookie::get('utilisateur'))
        <a href="{{route('inscription')}}"><button class="float-right btn btn-outline-success my-2 my-sm-0">S'inscrire</button></a>
        <a href="{{route('identification')}}"><button class="float-right btn btn-outline-success mr-sm-4" >Se connecter</button></a>
        @else
        <ul id="menu-deroulant">
	        <span class="Bonjour" class="my-2 my-sm-0"> Bonjour {{ json_decode(Cookie::get('utilisateur'))->Prenom }}</span>
	           <br><a class="couleurouge" href="{{route('deconnecteUtilisateur')}}">Déconnexion</a>
	    </ul>
        @endif
    </nav>
</nav>