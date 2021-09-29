@extends('layout.app')
@section('content')
    

<div class="main-content">
    @foreach ($categories as $category)
    <div class="container">
        
        <div class="img-container">
            <div class="row justify-content-between">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="{{ $category->image_1 }}" alt="9" style="width: 250px; height: 250px; object-fit: cover;" class="img-fluid"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="{{ $category->image_2 }}" alt="9" style="width: 250px; height: 250px; object-fit: cover;" class="img-fluid"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-12"><img src="{{ $category->image_3 }}" alt="9" style="width: 250px; height: 250px; object-fit: cover;" class="img-fluid"></div>
                </div>
            </div>
            <div>
                <h2 class="title">UZ</h2>
                <p>{!! $category->summernote_uz !!}</p>
            </div>

            <div>
                <h2 class="title">RU</h2>
                <p>{!! $category->summernote_ru !!}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection