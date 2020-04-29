<div class="form-group row {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="col-sm-2 col-form-label">{{ 'Titre' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="titre" type="text" id="titre" value="{{ isset($projet->titre) ? $projet->titre : ''}}" >

    </div>
    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-sm-2 col-form-label">{{ 'Description' }}</label>
	<div class="col-sm-10">
    	<textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($projet->description) ? $projet->description : ''}}</textarea>
    </div>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="col-sm-2 col-form-label">{{ 'Image' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="image" type="text" id="image" value="{{ isset($projet->image) ? $projet->image : ''}}" >

    </div>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('prix') ? 'has-error' : ''}}">
    <label for="prix" class="col-sm-2 col-form-label">{{ 'Prix' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="prix" type="number" id="prix" value="{{ isset($projet->prix) ? $projet->prix : ''}}" >

    </div>
    {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('dateDebut') ? 'has-error' : ''}}">
    <label for="dateDebut" class="col-sm-2 col-form-label">{{ 'Datedebut' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="dateDebut" type="datetime-local" id="dateDebut" value="{{ isset($projet->dateDebut) ? $projet->dateDebut : ''}}" >
    </div>
    {!! $errors->first('dateDebut', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('dateFin') ? 'has-error' : ''}}">
    <label for="dateFin" class="col-sm-2 col-form-label">{{ 'Datefin' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="dateFin" type="datetime-local" id="dateFin" value="{{ isset($projet->dateFin) ? $projet->dateFin : ''}}" >
    </div>
    {!! $errors->first('dateFin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('etat') ? 'has-error' : ''}}">
    <label for="etat" class="col-sm-2 col-form-label">{{ 'Etat' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="etat" type="text" id="etat" value="{{ isset($projet->etat) ? $projet->etat : ''}}" >

    </div>
    {!! $errors->first('etat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-sm-2 col-form-label">{{ 'Status' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="status" type="text" id="status" value="{{ isset($projet->status) ? $projet->status : ''}}" >

    </div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="col-sm-2 col-form-label">{{ 'Type' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="type" type="text" id="type" value="{{ isset($projet->type) ? $projet->type : ''}}" >

    </div>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('categorie_id') ? 'has-error' : ''}}">
    <label for="categorie_id" class="col-sm-2 col-form-label">{{ 'Categorie Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="categorie_id" type="number" id="categorie_id" value="{{ isset($projet->categorie_id) ? $projet->categorie_id : ''}}" >

    </div>
    {!! $errors->first('categorie_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-sm-2 col-form-label">{{ 'User Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($projet->user_id) ? $projet->user_id : ''}}" >

    </div>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
    </div>
</div>

