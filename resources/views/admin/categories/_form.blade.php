<div class="form-group">
    {!! Form::label('name', 'Category name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('parent_id', 'Parent ategory:') !!}
    {!! Form::select('parent_id', $categories, 
        null, 
        ['class'=>'form-control', 'placeholder'=>'Select category']) !!}
</div>

<div class="form-group">
    <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-light">
            <i class="fa fa-picture-o"></i> Choose image
          </a>
        </span>
        <input id="thumbnail" class="form-control" type="text" name="img" value="{{$category->img}}">
      </div>
      <img id="holder" style="margin-top:15px;max-height:100px;">
</div>
@if ($category->img)
   <div class="form-group">
        <label for="">Image</label>

        <img src="{{$category->img}}" alt="" class="thumbnail admin-edit-image">
        <a href="#" class="remove-img"> Remove</a>
        <input type="hidden" name="removeImg">
        @error('img')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div> 
@endif


<div class="form-group">
    {!! Form::label('slug', 'Category slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>

