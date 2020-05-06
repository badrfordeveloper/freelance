<div class="form-group row {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="col-sm-2 col-form-label">{{ 'Nom' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="nom" type="text" id="nom" value="{{ isset($user->nom) ? $user->nom : ''}}" >

    </div>
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="col-sm-2 col-form-label">{{ 'Prenom' }}</label>
	<div class="col-sm-10">
        <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($user->prenom) ? $user->prenom : ''}}" >
    </div>
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('username') ? 'has-error' : ''}}">
    <label for="username" class="col-sm-2 col-form-label">{{ 'Username' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="username" type="text" id="username" value="{{ isset($user->username) ? $user->username : ''}}" >

    </div>
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-sm-2 col-form-label">{{ 'Email' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="email" type="text" id="email" value="{{ isset($user->email) ? $user->email : ''}}" >

    </div>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>


 @if($formMode == 'create')



<div class="form-group row {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="col-sm-2 col-form-label">{{ 'Password' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="password" type="password" id="password" value="{{ isset($user->password) ? $user->password : ''}}" >

    </div>
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>

@endif
<!-- <div class="form-group row {{ $errors->has('role') ? 'has-error' : ''}}">
    <label for="role" class="col-sm-2 col-form-label">{{ 'Role' }}</label>
    <div class="col-sm-10">
        <input class="form-control" name="role" type="text" id="role" value="{{ isset($user->role) ? $user->role : ''}}" >

    </div>
    {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
</div> -->
<div class="form-group row {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="col-sm-2 col-form-label">{{ 'Photo' }}</label>
	<div class="col-sm-10">
         <div class="custom-file">
            <input id="photo"name="photo" type="file" class="custom-file-input">
            <label for="photo" class="custom-file-label">Selectionez une image...</label>
        </div> 
    </div>
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('cover') ? 'has-error' : ''}}">

    <label for="cover" class="col-sm-2 col-form-label">{{ 'Couverture' }}</label>
	<div class="col-sm-10">
        <div class="custom-file">
            <input id="cover"name="cover" type="file" class="custom-file-input">
            <label for="cover" class="custom-file-label">Selectionez une image...</label>
        </div> 
    </div>
    {!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="col-sm-2 col-form-label">{{ 'Tel' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="tel" type="text" id="tel" value="{{ isset($user->tel) ? $user->tel : ''}}" >

    </div>
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('dateNaissance') ? 'has-error' : ''}}">
    <label for="dateNaissance" class="col-sm-2 col-form-label">{{ 'Datenaissance' }}</label>
	<div class="col-sm-10">
    	<input class="form-control" name="dateNaissance" type="datetime-local" id="dateNaissance" value="{{ isset($user->dateNaissance) ?  \Carbon\Carbon::parse($user->dateNaissance)->toDatetimelocalString() : ''}}" >
    </div>
    {!! $errors->first('dateNaissance', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('sexe') ? 'has-error' : ''}}">
    <label for="sexe" class="col-sm-2 col-form-label">{{ 'Sexe' }}</label>
	<div class="col-sm-10">
        <div class="i-checks">
            <?php 
                $checkedHomme = (!isset($user->sexe) || $user->sexe =='Homme') ? 'checked' : '';
                $checkedFemme = (isset($user->sexe) && $user->sexe =='Femme') ? 'checked' :'';
            ?>
            <label> <input type="radio" value="Homme" id="sexeH"  {{$checkedHomme}} name="sexe"> <i></i> Homme</label> <label> <input type="radio" value="Femme" id="sexeF" {{$checkedFemme}} name="sexe"> <i></i> Femme </label>
        </div>

    </div>
    {!! $errors->first('sexe', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row {{ $errors->has('adresse') ? 'has-error' : ''}}">
    <label for="adresse" class="col-sm-2 col-form-label">{{ 'Adresse' }}</label>
	<div class="col-sm-10">
    	<textarea class="form-control" rows="5" name="adresse" type="textarea" id="adresse" >{{ isset($user->adresse) ? $user->adresse : ''}}</textarea>
    </div>
    {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group row">
    <div class="col-sm-12 text-center">
        <button class="btn btn-primary btn-sm" type="submit">{{ $formMode === 'edit' ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</div>

