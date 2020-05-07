<div class="form-group row {{ $errors->has('libelle') ? 'has-error' : ''}}">
    <label for="libelle" class="col-sm-2 col-form-label">{{ 'Libelle' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="libelle" type="text" id="libelle" value="{{ isset($skill->libelle) ? $skill->libelle : old('libelle')}}" >

    </div>
    {!! $errors->first('libelle', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group row{{ $errors->has('categorie_id') ? 'has-error' : ''}}">
    <label class="col-sm-2 col-form-label">Categorie</label>

    <div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="categorie_id" name="categorie_id" style="width: 100%; height:36px;">
                    <option selected>Selectionnez</option>
                    @if(count($categories))
                        @foreach($categories as $obj)
                            <option value="{{ $obj->id }}"  @if(isset($skill->categorie_id) && $skill->categorie_id== $obj->id )selected @endif>{{ $obj->libelle }}</option>
                        @endforeach
                    @endif
        </select>
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</div>

