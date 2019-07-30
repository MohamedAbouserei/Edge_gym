
<div class="form-group {{ $errors->has('offer') ? 'has-error' : ''}}">
    <label for="offer" class="control-label">{{ 'Offer' }}</label>
    <input class="form-control" name="offer" type="text" id="offer" value="{{ isset($offer->offer) ? $offer->offer : ''}}" >
    {!! $errors->first('offer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('discount') ? 'has-error' : ''}}">
    <label for="discount" class="control-label">{{ 'Discount' }}</label>
    <input class="form-control" name="discount" type="number" id="discount" value="{{ isset($offer->discount) ? $offer->discount : ''}}" >
    {!! $errors->first('discount', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
