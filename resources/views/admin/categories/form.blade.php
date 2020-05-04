<div class="form-group row {{ $errors->has('libelle') ? 'has-error' : ''}}">
    <label for="libelle" class="col-sm-2 col-form-label">{{ 'Libelle' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="libelle" type="text" id="libelle" value="{{ isset($category->libelle) ? $category->libelle : ''}}" >

    </div>
    {!! $errors->first('libelle', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</div>

