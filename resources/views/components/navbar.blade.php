<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>

          @if (Auth::check() && Auth::user()->Role == 'Admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('getCreateMovie') }}">Create Movie</a>
            </li>
          @endif

          @if (Auth::check())
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
              </form>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('getRegister') }}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('getLogin') }}">Login</a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
