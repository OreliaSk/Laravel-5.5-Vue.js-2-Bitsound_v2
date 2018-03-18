<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <div class="navbar-header">
          <!-- Collapsed Hamburger -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="{{ url('/') }}">
              {{config('app.name', 'Bitsound (version 2.0)')}}
          </a>
      </div>

      <div class="collapse navbar-collapse" id="navbarNav">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
              &nbsp;
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{$chemin}}/">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{$chemin}}/about">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{$chemin}}/posts">Articles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{$chemin}}/artists">Artistes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{$chemin}}/festivals">Festivals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{$chemin}}/contact">Nous contacter</a>
            </li>
          </ul>

          <ul class="nav navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li><a href="{{ route('login') }}" class="m-2">Login</a></li>
                  <li><a href="{{ route('register') }}" class="m-2">Register</a></li>
              @else
                <li><a href="{{ route('login') }}" class="nav-item m-2">{{ Auth::user()->name }}</a></li>
                <li><a class="nav-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <li><a href="{{ route('dashboard') }}" class="m-2">Mon profil</a></li>
              @endguest
          </ul>
      </div>
  </div>
</nav>