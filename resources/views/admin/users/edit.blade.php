@extends('layouts.app')

@section('css')

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

       <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            @if($role == "admin")
                <h2>Users</h2>
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
                    @else
                    <a href="{{ url(Config::get('constants.ADMIN_PATH').'employeurs') }}">Employeurs</a>
                    @endif
                </li>
                <li class="breadcrumb-item active">
                    <strong>Editer</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

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
                            <?php $action = url(Config::get('constants.ADMIN_PATH').'users/' . $user->id); ?>
                        @elseif($role == "freelance")
                            <?php $action = url(Config::get('constants.ADMIN_PATH').'freelances/' . $user->id); ?>
                         @else
                            <?php $action = url(Config::get('constants.ADMIN_PATH').'employeurs/' . $user->id); ?>
                        @endif
                        <form method="POST" action="{{ $action }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" autocomplete="off">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                           


                            @if($role == "freelance")
                            
                                 @include ('admin.users.formfreelances', ['formMode' => 'edit'])

                            @else

                             @include ('admin.users.form', ['formMode' => 'edit'])

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
@endsection