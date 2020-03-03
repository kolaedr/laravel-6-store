@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
{{$product->links()}}
<table class="table  table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>DESCRIBE</th>
            <th>SLUG</th>
            <th>IMG</th>
            <th>PRODUCT ACTION</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($product as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}} USD</td>
            <td>{!! Str::words($item->describe, 13, ' ...') !!}</td>
            <td>{{$item->slug}}</td>
            <td><img src="/{{$item->image}}" class="images-prod-admin" /></td>
            <td class="d-inline-flex">
                <a href="{{route('products.edit', $item->id)}}" class="btn btn-success"><i class="fas fa-edit nav-icon"></i></a>
                {{-- <a href="{{route('products.destroy', $item->id)}}" class="btn btn-danger"><i class="fas fa-edit nav-icon"></i></a> --}}
                <form action="/admin/products/{{$item->id}}" method="POST">
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

@stop
