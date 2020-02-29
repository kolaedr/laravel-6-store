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
            <i class="fa fa-picture-o"></i> Choose
          </a>
        </span>
        <input id="thumbnail" class="form-control" type="text" name="img">
      </div>
      <img id="holder" style="margin-top:15px;max-height:100px;">
</div>
<div class="form-group">
    {!! Form::label('slug', 'Category slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Add category', ['class'=>'btn btn-primary']) !!}