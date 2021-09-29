@extends('layout.app')
@section('content')
    

<div class="main-content">
    @foreach ($categories as $category)
    <div class="container">
        <h2 class="title">Product</h2>
        <div class="img-container">
            <div class="row justify-content-between">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="asset(public_path({{$category->image_1}}))" alt="9" class="img-fluid"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="asset(public_path({{$category->image_1}}))" alt="9" class="img-fluid"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="asset(public_path({{$category->image_1}}))" alt="9" class="img-fluid"></div>
                </div>
            </div>
            <div>
                <p>{{ $category->summernote_uz }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection