@extends('layout.app')
@section('content')
    <h1>Категории</h1>
    <a href="/category/add" class="btn btn-success" style="margin-right: 20px">Добавить категорию</a>
    

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Title Uz</th>
            <th>Title Ru</th>
           
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title_uz }}</td>
                <td>{{ $category->title_ru }}</td>
                
               
                <td>
                    <a href="/category/edit/{{ $category->id }}" class="btn btn-primary">Редактировать</a>
                    <a href="/category/delete/{{ $category->id }}" class="btn btn-danger">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection