@props([
    'title'=>''
    ])
    <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Eding Muhamad Saprudin">
    <title>{{$title }}Discover Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{asset('icons/logo.svg')}}" alt="" width="30" height="24"
                    class="d-inline-block align-text-top color-light"/>
                Image Sharing
            </a>
            <!-- <div class="d-flex m-1">
                <a href='#' class="btn btn-outline-secondary me-2" style="margin-right:6px ;">Register</a>

                <a href='#' class="btn btn-danger">Login</a>
            </div> -->



                <ul class="navbar-nav ml-auto">
                    @guest
                    <li class="nav-item mr-2"><a href="{{route('login')}}" class="btn btn-outline-secondary">Login</a></li>
                    <li class="nav-item"><a href="{{route('register')}}" class="btn btn-outline-primary">Register</a></li>
                    @else
                    <li class="nav-item">
                        <a style="float:left ;"  href="{{route('image.create')}}">
                            <button type="submit" class="btn btn-primary">Upload Image</button>
                    </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{auth()->user()->name}}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('setting.profile.edit')}}">Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                      </div>
                    </li>
                    @endguest
                  </ul>
        </div>
    </nav>

  {{$slot}}
    <footer class="bg-light text-muted py-3 mt-5 border-top">
        <div class="container-fluid">
            <p class="float-end mb-1">
                <a href="#" class="text-decoration-none">Back to top</a>
            </p>
            <p>Image sharing website provides beautiful, high quality & royalty free photos shared by creators everywhere.</p>
            <p>&copy; 2023 Devx</p>
        </div>
    </footer>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="{{asset('js/app.js')}}"></script>


    <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
        crossorigin="anonymous"></script>

</body>

</html>
