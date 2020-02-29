@extends('adminlte::page')

{{-- @section('title', 'Dashboard') --}}

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')
{{$category->links()}}
<table class="table  table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SLUG</th>
            <th>IMG</th>
            <th>PARENT</th>
            <th>PRODUCT ACTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($category as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->slug}}</td>
            <td><img src="{{$item->img}}" class="images-prod-admin" /></td>
            <td>{{$item->parent ?$item->parent->name: ''}}</td>
            <td class="d-inline-flex">
                    <a href="{{route('categories.edit', $item->id)}}" class="btn btn-success"><i class="fas fa-edit nav-icon"></i></a>
                <form action="/admin/categories/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash-alt nav-icon"></i></button>
                </form>
            </td>
        </tr>

        @endforeach


    </tbody>
</table>

@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
