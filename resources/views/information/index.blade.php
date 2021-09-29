@extends('layout.app')
@section('content')
    <h1>Информация</h1>
    <a href="/information/add" class="btn btn-success" style="margin-right: 20px">Добавить категорию</a>
    

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Title Uz</th>
            <th>Title Ru</th>
            <th>Image_1</th>
            <th>Image_2</th>
            <th>Image_3</th>
            <th>Summernote_uz</th>
            <th>Summernote_ru</th>
           
        </tr>
        @foreach ($info as $inf)
            <tr>
                <td>{{ $inf->id }}</td>
                <td>{{ $inf->title_uz }}</td>
                <td>{{ $inf->title_ru }}</td>
                <td><img src="{{ $inf->image_1 }}" alt="" style="height: 120px; width: 150px;"></td>
                <td><img src="{{ $inf->image_2 }}" alt="" style="height: 120px; width: 150px;"></td>
                <td><img src="{{ $inf->image_3 }}" alt="" style="height: 120px; width: 150px;"></td>
                {{-- <td>{{substr($inf->summernote_uz, 0, 250)."..."}}</td> --}}
                <td>{!! $inf->summernote_uz!!}</td>
                <td>{!! $inf->summernote_ru!!}</td>
                
               
                <td>
                    <a href="/information/edit/{{ $inf->id }}" class="btn btn-success">Редактировать</a>
                    <a href="/information/show/{{ $inf->id }}" class="btn btn-primary">show</a>
                    <a href="/information/delete/{{ $inf->id }}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection