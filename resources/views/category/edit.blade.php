@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-6" style="margin-left: 15vw; margin-top: -2vh; height: 78vh">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Добавить продукт</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($categories as $category)
            
       
        <form action="/category/edit/{{$category->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Uz</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title_uz" required value="{{$category->title_uz}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Ru</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title_ru" required value="{{$category->title_ru}}">
                </div>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
        </form>
    </div>
@endsection