<div class="form-group row {{ $errors->has('libelle') ? 'has-error' : ''}}">
    <label for="libelle" class="col-sm-2 col-form-label">{{ 'Libelle' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="libelle" type="text" id="libelle" value="{{ isset($category->libelle) ? $category->libelle : old('libelle') }}" >
    	
                   @if ($errors->any())
				        <ul class="alert alert-danger">
				            @foreach ($errors->get('libelle') as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    @endif
    </div>
    
</div>


<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</div>

