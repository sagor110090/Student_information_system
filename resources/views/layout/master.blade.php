<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/parsley.css')}}">

    
</head>
<body>


        <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Student Information System</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li ><a href="{{ route('index')}}">Home</a></li>
                      <li><a href="{{ route('add')}}">Add Student</a></li>
                      <li><a href="{{ route('list')}}">Student List</a></li>

                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        @guest
        
                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                               
                                <li> <a  href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                          document.getElementById('logout-form').submit();">
                                                              {{ __('Logout') }}
                                                          </a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                                          
                        @endguest
                    </ul>
        
                  </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
              </nav>
    
  


 

@yield('content')



  
</div>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/js/npm.js')}}"></script>
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/js/parsley.js') }}"></script>
    


</body>
</html>