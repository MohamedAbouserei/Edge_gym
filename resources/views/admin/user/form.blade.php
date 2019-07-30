<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($user->name) ? $user->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" value="{{ isset($user->email) ? $user->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('landline') ? 'has-error' : ''}}">
    <label for="landline" class="control-label">{{ 'Landline' }}</label>
    <textarea class="form-control" rows="5" name="landline" type="textarea" id="landline" >{{ isset($user->landline) ? $user->landline : ''}}</textarea>
    {!! $errors->first('landline', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('phonenumber') ? 'has-error' : ''}}">
    <label for="phonenumber" class="control-label">{{ 'Phonenumber' }}</label>
    <textarea class="form-control" rows="5" name="phonenumber" type="textarea" id="phonenumber" >{{ isset($user->phonenumber) ? $user->phonenumber : ''}}</textarea>
    {!! $errors->first('phonenumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('DOB') ? 'has-error' : ''}}">
    <label for="DOB" class="control-label">{{ 'Dob' }}</label>
    <input class="form-control" name="DOB" type="date" id="DOB" value="{{ isset($user->DOB) ? $user->DOB : ''}}" >
    {!! $errors->first('DOB', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pic') ? 'has-error' : ''}}">
    <label for="pic" class="control-label">{{ 'Pic' }}</label>
    <input class="form-control" name="pic" type="file" id="pic" value="{{ isset($user->pic) ? $user->pic : ''}}" >
    {!! $errors->first('pic', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('salary') ? 'has-error' : ''}}">
    <label for="salary" class="control-label">{{ 'Salary' }}</label>
    <input class="form-control" name="salary" type="number" id="salary" value="{{ isset($user->salary) ? $user->salary : ''}}" >
    {!! $errors->first('salary', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('workhours') ? 'has-error' : ''}}">
    <label for="workhours" class="control-label">{{ 'Workhours' }}</label>
    <input class="form-control" name="workhours" type="number" id="workhours" value="{{ isset($user->workhours) ? $user->workhours : ''}}" >
    {!! $errors->first('workhours', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'Password' }}</label>
    <input class="form-control" name="password" type="password" id="password" >
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('socialnumber') ? 'has-error' : ''}}">
    <label for="socialnumber" class="control-label">{{ 'Socialnumber' }}</label>
    <input class="form-control" name="socialnumber" type="number" id="socialnumber" value="{{ isset($user->socialnumber) ? $user->socialnumber : ''}}" >
    {!! $errors->first('socialnumber', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <div class="radio">
    <label><input name="type" type="radio" value="1" {{ (isset($user) && 1 == $user->type) ? 'checked' : '' }}> Admin</label>
</div>
<div class="radio">
    <label><input name="type" type="radio" value="0" @if (isset($user)) {{ (0 == $user->type) ? 'checked' : '' }} @else {{ 'checked' }} @endif> CEO</label>
</div>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
