<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-sm-2 col-form-label">{{ 'Description' }}</label>
	<div class="col-sm-10">
    	<textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($commande->description) ? $commande->description : ''}}</textarea>
    </div>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-sm-2 col-form-label">{{ 'Status' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="status" type="text" id="status" value="{{ isset($commande->status) ? $commande->status : ''}}" >

    </div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('projet_id') ? 'has-error' : ''}}">
    <label for="projet_id" class="col-sm-2 col-form-label">{{ 'Projet Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="projet_id" type="number" id="projet_id" value="{{ isset($commande->projet_id) ? $commande->projet_id : ''}}" >

    </div>
    {!! $errors->first('projet_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-sm-2 col-form-label">{{ 'User Id' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($commande->user_id) ? $commande->user_id : ''}}" >

    </div>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
    </div>
</div>

