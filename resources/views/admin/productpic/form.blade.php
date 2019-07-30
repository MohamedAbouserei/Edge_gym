
<div  class="form-group {{ $errors->has('product_id') ? 'has-error' : ''}}">
     <label for="product_id" class="control-label">{{ 'Product Id' }}</label>
    <select  class="form-control" name='product_id' id="product_id">
        @foreach($products as $obj)
        <option  value="{{ isset($obj->id) ? $obj->id : ''}}">{{$obj->Name}}</option>
        @endforeach
  </select>
  {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pic') ? 'has-error' : ''}}">
    <label for="pic" class="control-label">{{ 'Pic' }}</label>
    <input class="form-control" name="pic" type="file" id="pic" value="{{ isset($productpic->pic) ? $productpic->pic : ''}}" >
    {!! $errors->first('pic', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
