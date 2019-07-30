
<div  class="form-group {{ $errors->has('program_id') ? 'has-error' : ''}}">
        <label for="program_id" class="control-label">{{ 'Program Name' }}</label>
       <select  class="form-control" name='program_id' id="program_id">
           @foreach($program as $obj)
           <option value="{{ isset($obj->id) ? $obj->id : ''}}">{{$obj->name}}</option>
           @endforeach
     </select>
     {!! $errors->first('program_id', '<p class="help-block">:message</p>') !!}
   </div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Name' }}</label>
    <input class="form-control" name="user_id" type="text" id="user_id" value="{{ isset($reservation->user_id) ? $reservation->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
