<header  class="">
  <nav class="navbar navbar-expand-lg bg-light my_nav container-fluid mb-5" style="position: fixed; top: 0; z-index:999;">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ Vite::asset('resources/img/logo.jpg') }}" alt="Bootstrap" width="85" height="50" class="logo">
    </a>
      <!-- <a class="navbar-brand" href="#">Comics</a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a> 
          </li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="agg_comic btn btn-outline-info" aria-current="page" href="{{route('comics.create')}}" style="color: white;"> <i class="fa-solid fa-file-circle-plus"></i> Aggiungi</a>
            
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>