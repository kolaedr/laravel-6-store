@extends('layouts.app')
@section('title', $title)
@section('content')
<div class="container">

    <div class="col-12 row justify-content-beetwen">
        <h1>PRODUCT</h1>
        {{$product->links()}}
    </div>
    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($product as $item)
        <div class="col mb-4">
            <div class="card  h-100">
              <img src="{{$item->image}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Price: {{$item->price}} USD</h6>
                <p class="card-text">{{Str::words($item->describe, 10, ' >>>')}}</p>

                <div class="row justify-content-around">
                <form action="/product/{{$item->id}}/buy" method="GET">
                    <button class="btn btn-secondary pl-5 pr-5" ><i class="fas fa-edit nav-icon"></i>Show</button>
                </form>
                <form action="/product/{{$item->id}}" method="GET">
                    <button class="btn btn-primary pl-5 pr-5" ><i class="fas fa-edit nav-icon"></i>Buy</button>
                </form>
                 </div>
              </div>

            </div>
          </div>

            {{-- <div class="col-md-3 m-3" key={i} >
                <img src={{$item->image}} class="images-prod" />
                <h3>{{$item->name}}</h3>
                <span>{{$item->price}}</span>
                <p>{{Str::words($item->describe, 10, ' >>>')}}</p>
                <div class="row justify-content-around">
                    <form action="/product/{{$item->id}}/buy" method="GET">
                        <button class="btn btn-secondary pl-5 pr-5" ><i class="fas fa-edit nav-icon"></i>Show</button>
                    </form>
                    <form action="/product/{{$item->id}}" method="GET">
                        <button class="btn btn-success pl-5 pr-5" ><i class="fas fa-edit nav-icon"></i>Buy</button>
                    </form>
                </div>

            </div> --}}
        @endforeach
    </div>
</div>
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

