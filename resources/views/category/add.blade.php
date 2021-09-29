@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-6" style="margin-left: 15vw; margin-top: -2vh; height: 78vh">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Добавить продукт</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/category/add" method="post" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Uz</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title_uz" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Ru</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title_ru" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
        </form>
    </div>
@endsection
