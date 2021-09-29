@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-9" style="margin-left: 15vw; margin-top: -2vh;">
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($info as $inf)
            
        
        <form action="/information/edit/{{$inf->id}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Uz</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title_uz" required value="{{$inf->title_uz}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title Ru</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title_ru" required value="{{$inf->title_ru}}">
                </div>
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Image_1</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image_1" value="{{$inf->image_1}} required >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image_2</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image_2" value="{{$inf->image_2}} required >
                </div>
            
                <div class="form-group">
                    <label for="exampleInputEmail1">Image_3</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" name="image_3" value="{{$inf->image_3}} required >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Summernote_UZ</label>
                    <textarea class="sum" id="summernote2" name="summernote_uz" >
                       {{ $inf->summernote_uz }}
                    </textarea>
                </div>
           
                <div class="form-group">
                    <label for="exampleInputEmail1">Summernote_RU</label>
                    <textarea class="sum" id="summernote1" name="summernote_ru">
                        {{ $inf->summernote_ru }}
                    </textarea>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
               
            </div>
        </form>
    </div>
    <script>
        $('#summernote1').summernote({
            height: 300
        });
        $('#summernote2').summernote({
            height: 300
        });
        $(document).ready(function() {
            $('.sum').summernote({
                height: 300
            });
        });
    </script>
@endsection
    
