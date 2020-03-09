@extends('layouts.app')
{{-- @section('title', $title) --}}
@section('content')
<div class="container">

    <div class="col-12 row justify-content-between">
        <h1>PRODUCT</h1>
        {{$product->links()}}
    </div>
    
    <div class="">
    @include('product._carusel')    
    </div>

    <div class="row row-cols-1 row-cols-md-3">
        @foreach ($product as $item)
            @include('product._card')   
        @endforeach
    </div>
</div>
@endsection


@section('css')
    <style>
    
    </style>
@stop

@section('js')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.favorite-slider').slick();
    });
</script> --}}
    
@endsection
