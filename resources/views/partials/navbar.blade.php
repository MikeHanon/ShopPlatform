<header class="flex justify-between items-center py-5">
    <div>Logo</div>

    <nav>
        <livewire:search />
        <a href="{{route('shops.index')}}" class="mr-5 hover:text-green-500">magasin</a>
        <a href="#" class="mr-5 hover:text-green-500">panier</a>
        @guest
        <a href="{{route('login')}}"class="mr-5 hover:text-green-500">Se connecter</a>
        <a href="{{route('register')}}"class="mr-5 hover:text-green-500">Inscription</a>
        @else
        <a href="{{route('home')}}"class="mr-5 hover:text-green-500">profil</a>
        <a href="{{route('logout')}}"class="mr-5 hover:text-green-500" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Se déconnecter</a>
        <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
        @csrf
        </form>
        @endguest
    </nav>
</header>