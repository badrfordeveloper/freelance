<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-sm-2 col-form-label">{{ 'Description' }}</label>
	<div class="col-sm-10">
    	<textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($profile->description) ? $profile->description : ''}}</textarea>
    </div>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-sm-2 col-form-label">{{ 'Status' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="status" type="text" id="status" value="{{ isset($profile->status) ? $profile->status : ''}}" >

    </div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('langues') ? 'has-error' : ''}}">
    <label for="langues" class="col-sm-2 col-form-label">{{ 'Langues' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="langues" type="text" id="langues" value="{{ isset($profile->langues) ? $profile->langues : ''}}" >

    </div>
    {!! $errors->first('langues', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('experience') ? 'has-error' : ''}}">
    <label for="experience" class="col-sm-2 col-form-label">{{ 'Experience' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="experience" type="text" id="experience" value="{{ isset($profile->experience) ? $profile->experience : ''}}" >

    </div>
    {!! $errors->first('experience', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-sm-2 col-form-label">{{ 'User Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($profile->user_id) ? $profile->user_id : ''}}" >

    </div>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</div>

