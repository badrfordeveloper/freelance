<div class="form-group row {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="col-sm-2 col-form-label">{{ 'Titre' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="titre" type="text" id="titre" value="{{ isset($projet->titre) ? $projet->titre : old('titre')}}" >
         {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}

    </div>
   
</div>
<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-sm-2 col-form-label">{{ 'Description' }}</label>
	<div class="col-sm-10">
    	<textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($projet->description) ? $projet->description : old('description')}}</textarea>
         {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
   
</div>



<div class="form-group row {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="col-sm-2 col-form-label">{{ 'Image' }}</label>
    <div class="col-sm-10">
         <div class="custom-file">
            <input id="image" name="image" type="file" class="custom-file-input">
            <label for="image" class="custom-file-label">Selectionez une image...</label>
        </div> 
           {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
 
</div>






<div class="form-group row {{ $errors->has('prix') ? 'has-error' : ''}}">
    <label for="prix" class="col-sm-2 col-form-label">{{ 'Prix' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="prix" type="number" id="prix" value="{{ isset($projet->prix) ? $projet->prix : old('prix')}}" >
         {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}

    </div>
   
</div>
<div class="form-group row {{ $errors->has('dateDebut') ? 'has-error' : ''}}">
    <label for="dateDebut" class="col-sm-2 col-form-label">{{ 'Datedebut' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="dateDebut" type="datetime-local" id="dateDebut" value="{{ isset($projet->dateDebut) ?  \Carbon\Carbon::parse( $projet->dateDebut )->toDatetimelocalString(): old('dateDebut')}}" >
         {!! $errors->first('dateDebut', '<p class="help-block">:message</p>') !!}
    </div>
   
</div>
<div class="form-group row {{ $errors->has('dateFin') ? 'has-error' : ''}}">
    <label for="dateFin" class="col-sm-2 col-form-label">{{ 'Datefin' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="dateFin" type="datetime-local" id="dateFin" value="{{ isset($projet->dateFin) ? \Carbon\Carbon::parse( $projet->dateFin )->toDatetimelocalString() : old('dateFin')}}" >
          {!! $errors->first('dateFin', '<p class="help-block">:message</p>') !!}
    </div>
  
</div>
<div class="form-group row {{ $errors->has('etat') ? 'has-error' : ''}}">
    <label for="etat" class="col-sm-2 col-form-label">{{ 'Etat' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="etat" type="text" id="etat" value="{{ isset($projet->etat) ? $projet->etat : old('etat')}}" >
         {!! $errors->first('etat', '<p class="help-block">:message</p>') !!}

    </div>
   
</div>
<div class="form-group row {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-sm-2 col-form-label">{{ 'Status' }}</label>
	<div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="status" name="status" style="width: 100%; height:36px;">
                    <option value="" {{ !isset($projet->status) ? 'selected' : '' }} >Selectionnez</option>
                    <option value="En cours" {{ @$projet->status == "En cours" ? 'selected' : '' }} >En cours</option>
                    <option value="Valider" {{ @$projet->status == "Valider" ? 'selected' : '' }} >Valider</option>
                    <option value="Refuser" {{ @$projet->status == "Refuser" ? 'selected' : '' }} >Refuser</option>
                   
        </select>

         {!! $errors->first('status', '<p class="help-block">:message</p>') !!}

    </div>
</div>
<div class="form-group row {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="col-sm-2 col-form-label">{{ 'Type' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="type" type="text" id="type" value="{{ isset($projet->type) ? $projet->type : old('type')}}" >
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
  
</div>
<div class="form-group row {{ $errors->has('categorie_id') ? 'has-error' : ''}}">
    <label class="col-sm-2 col-form-label">Categorie</label>

    <div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="categorie_id" name="categorie_id" style="width: 100%; height:36px;">
                    <option value="" selected>Selectionnez</option>
                    @if(count($categories))
                        @foreach($categories as $obj)
                            <option value="{{ $obj->id }}"  @if(isset($projet->categorie_id) && $projet->categorie_id== $obj->id )selected @endif>{{ $obj->libelle }}</option>
                        @endforeach
                    @endif
        </select>

        {!! $errors->first('categorie_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group row {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label class="col-sm-2 col-form-label">User</label>

    <div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="user_id" name="user_id" style="width: 100%; height:36px;">
                    <option value="" selected>Selectionnez</option>
                    @if(count($users))
                        @foreach($users as $obj)
                            <option value="{{ $obj->id }}"  @if(isset($projet->user_id) && $projet->user_id== $obj->id )selected @endif>{{ $obj->username }}</option>
                        @endforeach
                    @endif
        </select>
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group row {{ $errors->has('skill_id') ? 'has-error' : ''}}">
    <label class="col-sm-2 col-form-label">Skills</label>

    <div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="skill_id" name="skill_id[]" multiple="multiple" style="width: 100%; height:36px;">
            
                    @if(count($skills))
                        @foreach($skills as $obj)
                            <option value="{{ $obj->id }}"  

                                @if(@count($projet->skills))

                                    @foreach($projet->skills as $obj2)

                                        @if( $obj2->id== $obj->id )

                                            selected

                                        @endif

                                    @endforeach
                                @endif  >{{ $obj->libelle }}


                            </option>
                        @endforeach
                    @endif
        </select>
         {!! $errors->first('skill_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</div>

