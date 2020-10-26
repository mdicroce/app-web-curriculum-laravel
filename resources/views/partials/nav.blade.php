<nav class="navbar bg-white navbar-light navbar-expand-md shadow-sm">
    <a class="navbar-brand" href=" {{route('home')}} ">
        {{config('app.name')}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li class="nav-item  "><a class="{{setActive('home')}} nav-link"href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link {{setActive('about')}}"href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link {{setActive('portfolio.index')}}" href="/portfolio">Portfolio</a></li>
            <li class="nav-item"><a class="{{setActive('contact')}} nav-link" href="/contact">Contact</a></li>
            @guest
                <li class="nav-item"> <a href="{{route('login')}}">Login</a></li>
            @endguest
            @auth
                
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                </li>
            @endauth
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </ul>
    </div>
    </nav>

