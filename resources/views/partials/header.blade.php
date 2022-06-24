<header>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{ route('home') }}">Home <i class="fa-solid fa-house-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{ route('movies') }}">Movies <i class="fa-solid fa-clapperboard"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'about' ? 'active' : ''}}" href="{{ route('about') }}">About <i class="fa-solid fa-address-card"></i></a>
          </li>   
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'contacts' ? 'active' : ''}}" href="{{ route('contacts') }}">Contacts <i class="fa-solid fa-pen"></i></a>
          </li> 
        </ul>
      </div>
    </div>
  </nav>

</header>