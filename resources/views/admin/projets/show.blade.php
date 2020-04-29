@extends('layouts.app')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Projets</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url(Config::get('constants.ADMIN_PATH')) }}">Tableau de Board</a>
                </li>
                 <li class="breadcrumb-item">
                    <a href="{{ url(Config::get('constants.ADMIN_PATH').'projets') }}">Projets</a>
                </li>
                  <li class="breadcrumb-item active">
                    <strong>Voir</strong>
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
                        <h5>Projet</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content  text-center">

                       

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $projet->id }}</td>
                                    </tr>
                                    <tr><th> Titre </th><td> {{ $projet->titre }} </td></tr><tr><th> Description </th><td> {{ $projet->description }} </td></tr><tr><th> Image </th><td> {{ $projet->image }} </td></tr><tr><th> Prix </th><td> {{ $projet->prix }} </td></tr><tr><th> DateDebut </th><td> {{ $projet->dateDebut }} </td></tr><tr><th> DateFin </th><td> {{ $projet->dateFin }} </td></tr><tr><th> Etat </th><td> {{ $projet->etat }} </td></tr><tr><th> Status </th><td> {{ $projet->status }} </td></tr><tr><th> Type </th><td> {{ $projet->type }} </td></tr><tr><th> Categorie Id </th><td> {{ $projet->categorie_id }} </td></tr><tr><th> User Id </th><td> {{ $projet->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                         <a href="{{ url('/admin/projets/' . $projet->id . '/edit') }}" title="Edit Projet"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</button></a>


                        <div class="table-responsive" style="display:inline">

                        <form method="POST" action="{{ url('admin/projets' . '/' . $projet->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Projet" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
