<div class="form-group {{ $errors->has('SizeandSpecifications') ? 'has-error' : ''}}">
    <label for="SizeandSpecifications" class="control-label">{{ 'Sizeandspecifications' }}</label>
    <textarea class="form-control" rows="5" name="SizeandSpecifications" type="textarea" id="SizeandSpecifications" >{{ isset($product->SizeandSpecifications) ? $product->SizeandSpecifications : ''}}</textarea>
    {!! $errors->first('SizeandSpecifications', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Trademark') ? 'has-error' : ''}}">
    <label for="Trademark" class="control-label">{{ 'Trademark' }}</label>
    <input class="form-control" name="Trademark" type="text" id="Trademark" value="{{ isset($product->Trademark) ? $product->Trademark : ''}}" >
    {!! $errors->first('Trademark', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Packing') ? 'has-error' : ''}}">
    <label for="Packing" class="control-label">{{ 'Packing' }}</label>
    <input class="form-control" name="Packing" type="text" id="Packing" value="{{ isset($product->Packing) ? $product->Packing : ''}}" >
    {!! $errors->first('Packing', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Name') ? 'has-error' : ''}}">
    <label for="Name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="Name" type="text" id="Name" value="{{ isset($product->Name) ? $product->Name : ''}}" >
    {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
