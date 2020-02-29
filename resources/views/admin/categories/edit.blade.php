@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit category</h1>
@stop

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    {!! Form::model(
                $category, 
                ['route'=>['categories.update', 
                $category->id],
                'method'=>'put',
                'class'=>'col-4']) !!}
    {{-- {{Form::token()}} --}}
    @include('admin.categories._form')
    {!! Form::close() !!}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script> $('#lfm').filemanager('image'); </script>
    @stop
