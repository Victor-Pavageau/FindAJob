<nav class="navbar navbar-light" style="background-color: #fff;">
    <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{ asset('logo.png') }}" width="50" height="50" class="d-inline-block align-middle" alt="">
        <p class="d-inline-block align-bottom" alt="">Trouve 1 Job</p>
    </a>
    <nav class="float-right">
        <a href="{{route('inscription')}}"><button class="float-right btn btn-outline-success my-2 my-sm-0">S'inscrire</button></a>
        <a href="{{route('login')}}"><button class="float-right btn btn-outline-success mr-sm-4" >Se connecter</button></a>
    </nav>
</nav>