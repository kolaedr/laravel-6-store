@extends('layouts.app')
{{-- @section('title', $title) --}}
@section('content')
<div class="container">

    <div class="col-12 row justify-content-between">
        {{-- <h1>PRODUCT {{$product->name}}</h1> --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">All product</a></li>
                @foreach ($product->category as $item)
                {{-- {{dd($item)}} --}}
                <li class="breadcrumb-item"><a href="/category/{{$item->slug}}">{{$item->name}}</a></li>
                    
                @endforeach
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>

    <div class="row ">
        <div class="col-4">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
        </div>
        <form action="/products/{{$product->id}}/addcart" class="col-8">
            <div class="col-12 row justify-content-between">
                <h3 class="card-title">{{$product->name}} </h3><span class="font-weight-lighter ">sku: {{$product->sku}}</span>
            </div>
            
            <h5 class="card-subtitle mb-2 text-muted">Price: {{$product->price}} USD</h5>
            <p class="card-text">{!! $product->describe !!}</p>
            <div class="row justify-content-around">
                <a href="/" class="btn btn-outline-secondary  pl-4 pr-4">Find other</a>
                @csrf
                <button class="btn btn-primary  pl-5 pr-5 font-weight-bold">Buy now</button>
                {{-- <a href="/product/{{$product->id}}/add" class="btn btn-primary  pl-5 pr-5 font-weight-bold">Buy now</a> --}}
            </div>
        </form>
            
</div>
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script>
        // console.log('hi');
    </script>
@stop

