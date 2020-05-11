@extends('layouts.app')

@section('css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            @if($role == "admin")
                <h2>Users</h2>
            @elseif($role == "freelance")
                <h2>Freelances</h2>
            @else
                <h2>Employeurs</h2>
            @endif
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url(Config::get('constants.ADMIN_PATH')) }}">Tableau de Board</a>
                </li>

                <li class="breadcrumb-item">
                    @if($role == "admin")
                    <a href="{{ url(Config::get('constants.ADMIN_PATH').'users') }}">Users</a>
                    @elseif($role == "freelance")
                    <a href="{{ url(Config::get('constants.ADMIN_PATH').'freelances') }}">Freelances</a>
                    @else
                    <a href="{{ url(Config::get('constants.ADMIN_PATH').'employeurs') }}">Employeurs</a>
                    @endif
                </li>
                <li class="breadcrumb-item active">
                    <strong>Nouveau</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                         @if($role == "admin")
                            <h5>User</h5>
                        @elseif($role == "freelance")
                            <h5>Freelances</h5>
                        @else
                            <h5>Employeur</h5>
                        @endif
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                         @if($role == "admin")
                            <?php $action = url(Config::get('constants.ADMIN_PATH').'users'); ?>

                         @elseif($role == "freelance")
                             <?php $action = url(Config::get('constants.ADMIN_PATH').'freelances'); ?>
                         @else
                            <?php $action = url(Config::get('constants.ADMIN_PATH').'employeurs'); ?>
                         @endif
                        <form method="POST" id="formUser" action="{{ $action }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" autocomplete="off">
                            {{ csrf_field() }}

                            @if($role == "freelance")
                            
                                 @include ('admin.users.formfreelances', ['formMode' => 'create'])

                            @else

                            @include ('admin.users.form', ['formMode' => 'create'])

                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript">
    $('.custom-file-input').on('change', function() {
       let fileName = $(this).val().split('\\').pop();
       $(this).next('.custom-file-label').addClass("selected").html(fileName);
    }); 
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<script type="text/javascript">
            $( ".select2" ).select2({
            maximumInputLength: 20 // only allow terms up to 20 characters long
        });
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>



<script type="text/javascript">
     $("#formUser").validate({
        rules: {
            // compound rule
            nom: {
              required: true,
              minlength : 3,
            },
            prenom: {
              required: true,
              minlength : 3,
            },
            username: {
              required: true,
              minlength : 3,
            },
            email: {
              required: true,
              email :true,
              minlength : 3,
            },
            password: {
              required: true,
              minlength : 3,
            },
            tel: {
              required: true,
            },
            dateNaissance: {
              required: true,
              date:true
            },
            sexe: {
              required: true,
            },
            adresse: {
              required: true,
              minlength : 3,
            },
            @if($role == "freelance")
                  skill_id[]: {
                              required: true,
                            },
             @endif
        }
    });
    // add the rule here
    $.validator.addMethod("valueNotEquals", function(value, element, arg){
      return arg !== value;
    }, "La valeur ne doit pas être égale à la valeur par défaut");
    // Les Messages d'erreur
    jQuery.extend(jQuery.validator.messages, {
       required: "Ce champ est obligatoire !",
       remote: "Veuillez corriger ce champ.",
       email: "Veuillez saisir une adresse e-mail valide.",
       url: "Veuillez saisir une URL valide.",
       date: "Veuillez saisir une date valide.",
       dateISO: "Veuillez saisir une date valide (ISO).",
       number: "Veuillez saisir un numéro valide.",
       digits: "Veuillez saisir uniquement des chiffres.",
       creditcard: "Veuillez saisir un numéro de carte de crédit valide.",
       equalTo: "Veuillez saisir à nouveau la même valeur.",
       accept: "Veuillez saisir une valeur avec une extension valide.",
       maxlength: jQuery.validator.format("Veuillez ne pas saisir plus de {0} caractères."),
       minlength: jQuery.validator.format("Veuillez saisir au moins {0} caractères."),
       rangelength: jQuery.validator.format("Veuillez saisir une valeur comprise entre {0} et {1} caractères."),
       range: jQuery.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
       max: jQuery.validator.format("Veuillez saisir une valeur inférieure ou égale à {0}."),
       min: jQuery.validator.format("Veuillez saisir une valeur supérieure ou égale à {0}.")
    });
</script>

@endsection






