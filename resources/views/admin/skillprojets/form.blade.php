<div class="form-group row {{ $errors->has('categorie_id') ? 'has-error' : ''}}">
    <label for="categorie_id" class="col-sm-2 col-form-label">{{ 'Categorie Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="categorie_id" type="number" id="categorie_id" value="{{ isset($skillprojet->categorie_id) ? $skillprojet->categorie_id : ''}}" >

    </div>
    {!! $errors->first('categorie_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('projet_id') ? 'has-error' : ''}}">
    <label for="projet_id" class="col-sm-2 col-form-label">{{ 'Projet Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="projet_id" type="number" id="projet_id" value="{{ isset($skillprojet->projet_id) ? $skillprojet->projet_id : ''}}" >

    </div>
    {!! $errors->first('projet_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
    </div>
</div>

