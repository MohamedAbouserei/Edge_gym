<div class="form-group {{ $errors->has('news') ? 'has-error' : ''}}">
    <label for="news" class="control-label">{{ 'news' }}</label>
    <input class="form-control" name="news" type="text" id="news" value="{{ isset($news->news) ? $news->news : ''}}" >
    {!! $errors->first('news', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('duration') ? 'has-error' : ''}}">
    <label for="duration" class="control-label">{{ 'Duration' }}</label>
    <input class="form-control" name="duration" type="date" id="duration" value="{{ isset($news->duration) ? $news->duration : ''}}" >
    {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
