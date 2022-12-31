<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->



    <title>YOUTUBE</title>
</head>
<body>
    <div class="row col-dm-12">
        <div class="col-md-12 d-flex">
          
            <nav class="navbar  col-md-12" style="border: 0.5px  #2277ff;; margin-top:1px; background:linear-gradient(to bottom right,#101010,#1E1B32) ">
                
                <div class="toggle-bar">
                
                    <div class="bar">
                        <span class="bar-dash"></span>
                        <span class="bar-dash"></span>
                        <span class="bar-dash"></span>
                    </div>
                    <div class="thubnmail">
                     
                        <img src="{{asset('photos/youtube_logo.jpg')}}" alt="" class="logo" srcset="">
                        <a href="" class="navbar-brand">
                            J'TUBE
                        </a>
                    </div>
                   
                </div>
                
                <!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

        
                    @guest
                            @if (Route::has('login'))
                               <div>
                              
                                    <a class="text-sm text-gray-700 dark:text-gray-500 underline m-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                               
                            @endif

                            @if (Route::has('register'))
                              
                                    <a class="text-sm text-gray-700 dark:text-gray-500 underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                             
                            @endif
                            </div>
                        @else
                        <ul class="nav navbar">
                            <li class="nav-item"><form class="form-inline pull-xs-right">
                                <input class="form-control"  type="text" placeholder="Search...">
                                <button class="btn btn-primary" type="submit">Search</button> </form></li>
                        </ul>
                     
        
       
                <div class="top-left-conner">
                <div class="dropdown ">
                    <a href="#" class="bar-left" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="bar-dash1"></span>
                        <span class="bar-dash1"></span>
                        <span class="bar-dash1"></span>
                    </a> 
                    <ul class="dropdown-menu bg-primary text-white"  aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#"> {{ __('Home') }}</a></li>
                        <li><a class="dropdown-item" href="#"> {{ __('Channel') }}</a></li>
                        <li><a class="dropdown-item" href="#">{{ __('Edit profile') }}</a></li>
                        <li><a class="dropdown-item" href="{{route('folder.uploadvideo')}}">{{ __('Upload Video') }}</a></li>
                    </ul>  
                </div>
                <div class="dropdown ">
                   <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <img class="circle" src="{{asset('photos/profile.png')}}" alt="" srcset="">
                                </a>
                                <ul class="dropdown-menu bg-primary text-white  " aria-labelledby="dropdownMenuLink">
                                  <li>  <a href="{{ route('logout') }}"  class="dropdown-item"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('signout') }}
                                                        
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>                      
                                    </a>
                                  </li>
                </div>
                 
                   
       
                   
                </div>
                @endguest
                           
              
            
            
            </nav>
        
        </div>
       
        <div class="side">
               
            <div class="side-right">
                <div class="side-item">
                    <a href="">
                    <i class="fa-solid fa-house"></i>
                    </a>
                </div>
                <div class="side-item">
                    <a href="">
                    <!-- <i class="fa-solid fa-cowbell-circle-plus"></i> -->
                    <i class="fa-solid fa-house"></i>
                    </a>
                </div>
               
                <div class="side-item">
                    <a href="">
                    <i class="fa-solid fa-house"></i>
                    <!-- <i class="fa-regular fa-users"></i> -->
                        
                    </a>
                </div>
                <div class="side-item">
                    <a href="">
                    <!-- <i class="fa-solid fa-house"></i> -->
                    <i class="fa-solid fa-book-user"></i>
                       
                    </a>
                </div>
                <div class="side-item">
                    <a href="">
                    <i class="fa-solid fa-person-falling"></i>
                        
                    </a>
                </div>
              
                


            </div>
        </div>
        <div class="video-g">


   @yield('content')


        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    
</body>
</html>