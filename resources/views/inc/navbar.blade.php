<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">{{config('app.name', 'Bitsound (version 2.0)')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
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
  </div>
</nav>