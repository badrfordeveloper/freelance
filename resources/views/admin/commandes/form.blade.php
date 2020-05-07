<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-sm-2 col-form-label">{{ 'Description' }}</label>
	<div class="col-sm-10">
    	<textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($commande->description) ? $commande->description : old('description') }}</textarea>
    </div>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-sm-2 col-form-label">{{ 'Status' }}</label>
	<div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="status" name="status" style="width: 100%; height:36px;">
                    <option value="" {{ !isset($commande->status) ? 'selected' : '' }} >Selectionnez</option>
                    <option value="En cours" {{ @$commande->status == "En cours" ? 'selected' : '' }} >En cours</option>
                    <option value="Prendre" {{ @$commande->status == "Prendre" ? 'selected' : '' }} >Prendre</option>
                   
        </select>
    	<!-- <input class="form-control" name="status" type="text" id="status" value="{{ isset($commande->status) ? $commande->status : old('status') }}" > -->

    </div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group row{{ $errors->has('projet_id') ? 'has-error' : ''}}">
    <label class="col-sm-2 col-form-label">Projet</label>

    <div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="projet_id" name="projet_id" style="width: 100%; height:36px;">
                    <option value="" selected>Selectionnez</option>
                    @if(count($projets))
                        @foreach($projets as $obj)
                            <option value="{{ $obj->id }}"  @if(isset($commande->projet_id) && $commande->projet_id== $obj->id )selected @endif>{{ $obj->id }} - {{ $obj->titre }}</option>
                        @endforeach
                    @endif
        </select>
    </div>
</div>

<div class="form-group row{{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label class="col-sm-2 col-form-label">User</label>

    <div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="user_id" name="user_id" style="width: 100%; height:36px;">
                    <option value="" selected>Selectionnez</option>
                    @if(count($users))
                        @foreach($users as $obj)
                            <option value="{{ $obj->id }}"  @if(isset($commande->user_id) && $commande->user_id== $obj->id )selected @endif>{{ $obj->username }}</option>
                        @endforeach
                    @endif
        </select>
    </div>
</div>


<!-- <div class="form-group row {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-sm-2 col-form-label">{{ 'User Id' }}</label>
    <div class="col-sm-10">
        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($commande->user_id) ? $commande->user_id : ''}}" >

    </div>
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div> -->


<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</div>

