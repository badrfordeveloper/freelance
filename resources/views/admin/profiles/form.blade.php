<div class="form-group row {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-sm-2 col-form-label">{{ 'Description' }}</label>
	<div class="col-sm-10">
    	<textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($profile->description) ? $profile->description : old('description')}}</textarea>
    </div>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-sm-2 col-form-label">{{ 'Status' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="status" type="text" id="status" value="{{ isset($profile->status) ? $profile->status : old('status')}}" >

    </div>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('langues') ? 'has-error' : ''}}">
    <label for="langues" class="col-sm-2 col-form-label">{{ 'Langues' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="langues" type="text" id="langues" value="{{ isset($profile->langues) ? $profile->langues : old('langues')}}" >

    </div>
    {!! $errors->first('langues', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('experience') ? 'has-error' : ''}}">
    <label for="experience" class="col-sm-2 col-form-label">{{ 'Experience' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="experience" type="text" id="experience" value="{{ isset($profile->experience) ? $profile->experience : old('experience')}}" >

    </div>
    {!! $errors->first('experience', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group row{{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label class="col-sm-2 col-form-label">User</label>

    <div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="user_id" name="user_id" style="width: 100%; height:36px;">
                    <option selected>Selectionnez</option>
                    @if(count($users))
                        @foreach($users as $obj)
                            <option value="{{ $obj->id }}"  @if(isset($profile->user_id) && $profile->user_id== $obj->id )selected @endif>{{ $obj->username }}</option>
                        @endforeach
                    @endif
        </select>
    </div>
</div>

<div class="form-group row{{ $errors->has('skill_id') ? 'has-error' : ''}}">
    <label class="col-sm-2 col-form-label">Skills</label>

    <div class="col-sm-10">
        <select  class="select2 form-control custom-select" id="skill_id" name="skill_id[]" multiple="multiple" style="width: 100%; height:36px;">
            
                    @if(count($skills))
                        @foreach($skills as $obj)
                            <option value="{{ $obj->id }}"  

                                @if(@count($profile->skills))

                                    @foreach($profile->skills as $obj2)

                                        @if( $obj2->id== $obj->id )

                                            selected

                                        @endif

                                    @endforeach
                                @endif

                                  >{{ $obj->libelle }}

                            </option>
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

