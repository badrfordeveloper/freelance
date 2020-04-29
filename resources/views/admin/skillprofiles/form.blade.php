<div class="form-group row {{ $errors->has('categorie_id') ? 'has-error' : ''}}">
    <label for="categorie_id" class="col-sm-2 col-form-label">{{ 'Categorie Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="categorie_id" type="number" id="categorie_id" value="{{ isset($skillprofile->categorie_id) ? $skillprofile->categorie_id : ''}}" >

    </div>
    {!! $errors->first('categorie_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('profile_id') ? 'has-error' : ''}}">
    <label for="profile_id" class="col-sm-2 col-form-label">{{ 'Profile Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="profile_id" type="number" id="profile_id" value="{{ isset($skillprofile->profile_id) ? $skillprofile->profile_id : ''}}" >

    </div>
    {!! $errors->first('profile_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
    </div>
</div>

