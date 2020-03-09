<div class="slider">
    
        @foreach ($productLike as $key=>$item)
            <div class="item {{$key==0?'activee': ''}}">
            <img src="{{$item->image}}" class="d-block w-100 " alt="...">
            <div class="slideText">
                <h3>{{ucfirst(trans($item->name))}}</h3>
                <h5 class="card-subtitle mb-2 ">Price: {{$item->price}} USD</h5>
                {{-- <p>{!! Str::before($item->describe, '.') !!}</p> --}}
            </div>
            </div>
        @endforeach
    

    <a class="prev" onclick="minusSlide()">&#10094;</a>
    <a class="next" onclick="plusSlide()">&#10095;</a>
</div>

{{-- <div class="slider-dots">
    <span class="slider-dots_item" onclick="currentSlide(1)"></span> 
    <span class="slider-dots_item" onclick="currentSlide(2)"></span> 
    <span class="slider-dots_item" onclick="currentSlide(3)"></span> 
</div> --}}