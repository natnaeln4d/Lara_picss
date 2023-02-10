<x-layout title="Upload New Image">
<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Upload your photo</div>

                    <div class="card-body">
                    <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                            <div class="mb-3">
                                <label  class="form-label" for="file">File</label>
                                <input type="file" class="form-control @error('file')is-invalid @enderror" name="file">
                                @error('file')
                                <div>
                                    {{$message}}
                                </div>
                                @else
                                <!-- <div class="form-text">
                                    You can only upload your photo in following types: jpg & png
                                </div> -->
                                @enderror
                            </div>
                            <div class="mb-3"> 
                                <label class="form-label" for="title">Title</label>
                                <input type="text"class="form-control @error('title')is-invalid @enderror" name="title" value="{{old('title')}}">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                               
                                @enderror
                            </div>
                            <!-- <div class="mb-3">
                                <label class="form-label" for="title">Photo Tags</label>
                                <input type="text" class="form-control">
                                <div class="form-text">
                                    Separate your tags with comma
                                </div>
                            </div> -->
                            <div class="mb-3">
                             <button type="submit" class="btn btn-primary">Upload</button>
                                <a href="{{route('image.index')}}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                  
    
                             
            
                         
                    </div>
                </div>

            </div>
        </div>
    </div>
  
</x-layout>
