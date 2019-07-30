

<div class="form-group {{ $errors->has('emails') ? 'has-error' : ''}}">
    <label for="emails" class="control-label">{{ 'Emails' }}</label>
    <input class="form-control" name="emails" type="email" id="emails" value="{{ isset($aboutus->emails) ? $aboutus->emails : ''}}" >
    {!! $errors->first('emails', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phonenumbers') ? 'has-error' : ''}}">
    <label for="phonenumbers" class="control-label">{{ 'Phonenumbers' }}</label>
    <textarea class="form-control" rows="5" name="phonenumbers" type="textarea" id="phonenumbers" >{{ isset($aboutus->phonenumbers) ? $aboutus->phonenumbers : ''}}</textarea>
    {!! $errors->first('phonenumbers', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('adresses') ? 'has-error' : ''}}">
    <label for="adresses" class="control-label">{{ 'Adresses' }}</label>
    <textarea class="form-control" rows="5" name="adresses" type="textarea" id="adresses" >{{ isset($aboutus->adresses) ? $aboutus->adresses : ''}}</textarea>
    {!! $errors->first('adresses', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
