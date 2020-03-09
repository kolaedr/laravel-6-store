<div class="col mb-4">
    <div class="card  h-100">
        <img src="{{$item->image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Price: {{$item->price}} USD</h6>
            <p class="card-text">{!! Str::before($item->describe, '.') !!}</p>
            </div>
            <div class="card-footer bg-light">
            <div class="row justify-content-around">
                <a href="/product/{{$item->slug}}" class="btn btn-outline-dark  pl-4 pr-4">Show</a>
                <a href="/product/{{$item->id}}/add" class="btn btn-primary   "><i class="fas fa-shopping-cart fa-sm mr-2"></i>Add to cart</a>
            </div>
        </div>
    </div>
</div>