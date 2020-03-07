<div class="row">
    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        {!! Form::label('name', 'Product name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Product name']) !!}
    </div>
    <div class="form-group col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
        {!! Form::label('slug', 'Product slug:') !!}
        {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Slug for product']) !!}
    </div>
</div>

<div class="form-group col-6">
    {!! Form::label('price', 'Product price:') !!}
    {!! Form::number('price', null, ['class'=>'form-control ', 'placeholder'=>'Price product in USD']) !!}
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Parent ategory:') !!}
    {!! Form::select('category_id', $categories,
        $product->category,
        ['class'=>'form-control', 'multiple'=>'multiple', 'name'=>'category_id[]']) !!}
</div>
<div class="form-group">
    {!! Form::label('image', 'Product image:') !!}
    <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-light">
            <i class="fa fa-picture-o"></i> Choose image
          </a>
        </span>
        <input id="thumbnail" class="form-control" type="text" name="image"  value="{{$product->image != '[]' ? $product->image : ''}}">
      </div>
      <img id="holder" style="margin-top:15px;max-height:100px;">
</div>
@if ($product->img)
   <div class="form-group">
        <label for="">Image</label>

        <img src="{{$product->image}}" alt="" class="thumbnail admin-edit-image">
        <a href="#" class="remove-img"> Remove</a>
        <input type="hidden" name="removeImg">
        @error('img')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div> 
@endif
<div class="form-group">
    {!! Form::label('describe', 'Product describe:') !!}
    {!! Form::textarea('describe', null, ['class'=>'form-control', 'id'=>"describe-product", 'rows' => 4, 'cols' => 54, 'placeholder'=>'Describe product']) !!}
</div>
<div class="form-group">
    {!! Form::label('sku', 'Put artikul:') !!}
    {!! Form::text('sku', null, ['class'=>'form-control', 'placeholder'=>'SKU product (#1232234)']) !!}
</div>
<div class="form-group">
    {!! Form::label('favorite', 'Favorite product:') !!}
    {!! Form::checkbox('favorite', null, ['class'=>'form-control ml-2', 'placeholder'=>'SKU product (#1232234)', ]) !!}
</div>


