@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add category</h1>
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
    {!! Form::model($category, ['url'=>'admin/categories','class'=>'col-4']) !!}
    {{-- {{Form::token()}} --}}
    @include('admin.categories._form')
    <div class="row align-items-center">
        {!! Form::submit('Create category', ['class'=>'btn btn-primary']) !!}
        <a href="/admin/categories" class="ml-3">back</a>
    </div>
    {!! Form::close() !!}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script> $('#lfm').filemanager('image'); </script>
    @stop
