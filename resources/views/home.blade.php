@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color:#2277ff;">
        
        @if($message=session('message'))
            <div class="alert alert-success">
                {{$message}}
            </div>
        @endif
            </div>
        </div>
    </div>
</div>
            <!-- <div class="card">
                <div class="card-header text-dark">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-dark" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->
      @foreach($videos as $video)
      <div class="play-it">
            <a href="#">
                        <video  controls class="video-p" >
                            <source src="{{asset('upload_video')}}/{{$video->file}}"></source>
                        </video>
                    </a>
                
                <div class="video-title">
                <h1>{{$video->title}}</h1>
                    <div class="view-section-p">
                    
                        <p style="opacity:60% ;">4,189,271 views</p>
                        <p tyle="opacity:50% ;">Mar 3, 2021</p>
                        <button style="opacity: 100%;" class="like"><i class="fa-solid fa-thumbs-up"></i>7K</button>
                        <button style="opacity: 100%;" class="like"><i class="fa-solid fa-thumbs-down"></i>1K</button>
                    </div>
                        <div class="account-con">
                                    <div class="account">
                                        <a href="#">
                                            <div class="imgg">
                                                <img src="{{asset('photos/photo_2022-05-21 23.08.36.jpeg')}}" alt="logo">
                                                <div class="name-sub">
                                                <p class="accout-na">Mr. Java</p>
                                                <p class="sub">1.2M subscribers<p>
                                                </div>
                                            </div>
                                        </a>
                                    
                                    </div>
                        
                        </div>
                </div>
    
      </div>
        @endforeach

    
@endsection
