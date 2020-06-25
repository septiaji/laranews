  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="@auth /user @else / @endauth">LaraNews</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @auth
          <li class="nav-item">
            <a class="nav-link" href="/user/post/create">Create Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a
                class="nav-link"
                href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('form-logout').submit()"
            >Logout</a>
            <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        @else
          <li class="nav-item active">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
          </li>
        @endauth
      </ul>
      <form action="@auth /user @else / @endauth" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="search" value="{{ request()->get('search') }}" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
