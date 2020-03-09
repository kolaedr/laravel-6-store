@extends('layouts.app')
{{-- @section('title', $title) --}}
{{-- {{(Request::is('category/'.$item->id)?'active':'')}} --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 ">
            <div class="list-group col-12 ">
                @foreach ($categories as $item)
                {{-- <li class="-item {{(Request::is('category/'.$item->slug)?'active':'')}}"><a href="/category/{{$item->slug}}">{{$item->name}}</a></li> --}}
                {{-- <li class="list-group-item d-flex justify-content-between align-items-center {{(Request::is('category/'.$item->slug)?'active':'')}}">
                    <a href="/category/{{$item->slug}}">{{$item->name}}</a>
                    <span class="badge badge-primary badge-pill">{{$item->product->count()}}</span>
                 </li> --}}

                    <a href="{{$item->slug}}" class="list-group-item list-group-item-action {{(Request::is('category/'.$item->slug)?'active':'')}}">
                        {{ucfirst(trans($item->name))}}
                        <span class="badge badge-warning">{{$item->product->count()}}</span>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="row col-9">
            @foreach ($products as $item)
                @include('product._card')   
            @endforeach
        </div>
    </div>
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

