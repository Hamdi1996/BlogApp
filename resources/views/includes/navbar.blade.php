<nav class=" navbar navbar-expand-md navbar-light navbar-dark bg-primary">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
            Blog
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/about">About</a>
                  </li>
                  {{-- <li class="nav-item">
                      <a class="nav-link" href="/skill">Skills</a>
                  </li> --}}
                  <li class="nav-item">
                      <a class="nav-link" href="/posts">Posts</a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link" href="/posts/create">Create Post </a>
                  </li>
              </ul>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto pull-right">
              <!-- Authentication Links -->
              @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} 
                        </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                      <a class="dropdown-item" href="{{ route('home') }}">Dashboard
                            </a>

                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>



<style>
  .navbar-brand{
    font-family: 'Kalam' ,cursive;
    font-size: 2em;
  }
  .nav-link
  {
    margin-left: 15px;
    font-family: 'Kalam' ,cursive;
    font-size: 18px;
    
  }
  .navbar
  {
    margin-bottom: 0;
  }
  .nav-link:hover
{

color: white;
}
</style>