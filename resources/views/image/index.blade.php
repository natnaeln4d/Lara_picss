<x-layout title="Discover free images">  
<div class="container-fluid mt-4">
@if($message=session('message'))
<div class="alert alert-success">
    {{$message}}
</div>
@endif
        <div class="row" data-masonry='{"percentPosition": true }'>
        @foreach($images as $image)
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                <a href="{{$image->permlink()}}">
                    <img src="{{$image->fileUrl()}}" alt="{{$image->title}}" class="card-img-top" >
                         </a>
                
                    <div class="photo-buttons">
                    <div>
                       <a href="{{route('image.edit',$image->id)}}"  class="btn btn-sm btn-info me-2" >Edit</a> | 
                       <form action="{{route('image.destory',$image->id)}}" method="post" >
                        @csrf
                        @method('DELETE')
                     <button class="btn btn-sm btn-danger" type="submit" onclick="alert('are you sure')">Delete</button>
                     </form>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

</div>

</x-layout>
