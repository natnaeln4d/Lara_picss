
@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color:#2277ff;">
                <div class="card-header">{{ __('Upload video') }}</div>

                <div class="card-body">
                <form action="{{route('folder.store')}}" method="post">
                    @csrf

                        <div class="row mb-6" style="margin-bottom:0.5rem;">
                            <label for="file" class="col-md-4 col-form-label text-md-end">{{ __('Add Video') }}</label>

                            <div class="col-md-8">
                                <input id="file" type="file" class="form-control @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file" autofocus>

                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-6" style="margin-bottom:0.5rem;">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Add title of video') }}</label>

                            <div class="col-md-8">
                                <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6" style="margin-bottom:0.5rem;">
                            <label for="Add discription of video" class="col-md-4 col-form-label text-md-end">{{ __('Add discription of video') }}</label>

                            <div class="col-md-8">
                                <textarea id="discription" type="text" class="form-control @error('discription') is-invalid @enderror" name="discription" value="{{ old('discription') }}" required autocomplete="discription"> </textarea>

                                @error('discription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6" style="margin-bottom:0.5rem;">
                            <label for="file" class="col-md-4 col-form-label text-md-end">{{ __('Add Thumbnail') }}</label>

                            <div class="col-md-8">
                                <input id="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail" value="{{ old('thumbnail') }}" required autocomplete="thumbnail" autofocus>

                                @error('thumbnail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                 

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('upload') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
