@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit product</h1>
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
                $product,
                ['route'=>['products.update',
                $product->id],
                'method'=>'put',
                'class'=>'col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6']) !!}
    {{-- {{Form::token()}} --}}
    @include('admin.products._form')
    <div class="row align-items-center">
        {!! Form::submit('Edit product', ['class'=>'btn btn-primary']) !!}
        <a href="/products" class="ml-3">back</a>
    </div>
    {!! Form::close() !!}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
$('#lfm').filemanager('image');
    if (document.querySelector('#describe-product')) {
    CKEDITOR.replace( 'describe-product' );
    };
    </script>
    @stop
