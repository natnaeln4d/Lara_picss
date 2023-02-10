<x-layout title="{{$image->title}}">
<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-9">
                <div class="image-container">
                    <img src="{{$image->fileUrl()}}" class="img-fluid" />
                </div>
<!-- {{--
              @include('image._related')
              @include('image._comments') --}} -->

            </div>
            <div class="col-md-3">
                <div class="d-flex align-items-center mb-3">
                    <img src={{$image->user->profile_picture}}
                        alt="{{$image->user->profile_picture}}" class="rounded-circle mr-3">
                    <div class="ms-3">
                        <h5><a href="#" class="text-decoration-none">{{$image->user->name}}</a></h5>
                        <p class="text-muted mb-0">{{$image->user->getImageCount()}}</p>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-3 border-top border-bottom">

                    <div>
                        <button type="button" title="Like mage" class="btn btn-primary">
                            <img src="{{asset('icons/thumbs-up.svg')}}" alt="" class="align-text-top" width="18" height="18"> 150
                        </button>

                        <button type="button" title="Favorite mage" class="btn btn-danger">
                            <img src="{{asset('icons/heart.svg')}}" alt="" width="18" height="18">
                        </button>
                    </div>

                    <button title="Download" class="btn btn-success d-flex align-items-center">
                        <img src="{{asset('icons/download.svg')}}" alt="" class="align-text-top" width="18" height="18">
                        <span class="display-block ms-2">Download</span>
                    </button>
                </div>

                <div class="bg-light mt-3 p-3 border">
                    <table width="100%" class="table table-hoved">
                        <tbody>
                            <tr>
                                <th>Uploaded</th>
                                <td>{{$image->uploadDate()}}</td>
                            </tr>
                            <tr>
                                <th>Dimensions</th>
                                <td>{{$image->dimention}}</td>
                            </tr>
                            <tr>
                                <th>Views</th>
                                <td>{{$image->view_count}}</td>
                            </tr>
                            <tr>
                                <th>Downloads</th>
                                <td>{{$image->downloads_count}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- <div class="tagcloud mt-3">
                    <ul>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Mountain</a></li>
                        <li><a href="#">Blue</a></li>
                        <li><a href="#">Forest</a></li>
                        <li><a href="#">Animal</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</x-layout>
