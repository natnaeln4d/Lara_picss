<x-layout title="Update Image">
<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Update your photo Title</div>
                         <div class="card-body">
                    <form action="{{route('image.update',$image->id)}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label  class="form-label" for="file">File</label>
                                <img src="{{$image->fileUrl()}}" alt="{{$image->title}}" width="400" class="img-fluid">
                            </div>  
                          <div class="mb-3"> 
                                <label class="form-label" for="title">Title</label>
                                <input type="text"class="form-control @error('title')is-invalid @enderror" name="title" value="{{old('title',$image->title)}}">
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
                             <button type="submit" class="btn btn-primary">Upload again</button>
                                <a href="{{route('image.index')}}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                     </div>
                   </div>
                </div>

            </div>
        </div>
    </div>
  
                  
</x-layout>
