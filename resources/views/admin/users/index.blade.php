 @extends('layouts.app')

 @section('css')

    <link href="{{ asset('assets/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    
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
                <li class="breadcrumb-item active">
                    @if($role == "admin")
                        <strong>Users</strong>
                    @elseif($role == "freelance")
                        <strong>Freelances</strong>
                    @else
                        <strong>Employeurs</strong>
                    @endif

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
                            <h5>Users</h5>
                         @elseif($role == "freelance")
                            <h5>Freelances</h5>
                        @else
                            <h5>Employeurs</h5>
                        @endif
                        <div class="ibox-tools">
                             @if($role == "admin")
                            <a class="" href="{{ url(Config::get('constants.ADMIN_PATH').'users'.'/create') }}">
                                <i class="fa fa-plus"></i>
                            </a>

                             @elseif($role == "freelance")
                            <a class="" href="{{ url(Config::get('constants.ADMIN_PATH').'freelances'.'/create') }}">
                                <i class="fa fa-plus"></i>
                            </a>

                            @else
                            <a class="" href="{{ url(Config::get('constants.ADMIN_PATH').'employeurs'.'/create') }}">
                                <i class="fa fa-plus"></i>
                            </a>
                            @endif

                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Tel</th>
                                        <th>Sexe</th>
                                        <th><i class="fa fa-wrench"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $item)
                                    <tr class="gradeX">
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('storage/'.$item->photo) }}" height="60px" alt=""></td>
                                        <td>{{ $item->nom }}</td>
                                        <td>{{ $item->prenom }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>{{ $item->tel }}</td>
                                        <td>{{ $item->sexe }}</td>

                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Actions</button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        @if($role == "admin")
                                                        <a class="dropdown-item" href="{{ url(Config::get('constants.ADMIN_PATH').'users/'. $item->id) }}" title="View Category"><i class="fa fa-eye" aria-hidden="true"></i> Voir</a>
                                                        @elseif($role == "freelance")
                                                        <a class="dropdown-item" href="{{ url(Config::get('constants.ADMIN_PATH').'freelances/'. $item->id) }}" title="View Category"><i class="fa fa-eye" aria-hidden="true"></i> Voir</a>
                                                        @else
                                                        <a class="dropdown-item" href="{{ url(Config::get('constants.ADMIN_PATH').'employeurs/'. $item->id) }}" title="View Category"><i class="fa fa-eye" aria-hidden="true"></i> Voir</a>
                                                        @endif
                                                    </li>

                                                    <li>
                                                        @if($role == "admin")
                                                        <a class="dropdown-item" href="{{ url(Config::get('constants.ADMIN_PATH').'users/' . $item->id . '/edit') }}" title="Edit Category"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>

                                                         @elseif($role == "freelance")
                                                        <a class="dropdown-item" href="{{ url(Config::get('constants.ADMIN_PATH').'freelances/' . $item->id . '/edit') }}" title="Edit Category"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                                                        @else
                                                        <a class="dropdown-item" href="{{ url(Config::get('constants.ADMIN_PATH').'employeurs/' . $item->id . '/edit') }}" title="Edit Category"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</a>
                                                        @endif
                                                    </li>

                                                    <li>
                                                        @if($role == "admin")
                                                        <?php $action = url(Config::get('constants.ADMIN_PATH').'users' . '/' . $item->id)  ?>
                                                          @elseif($role == "freelance")
                                                            <?php $action = url(Config::get('constants.ADMIN_PATH').'freelances' . '/' . $item->id)  ?>
                                                        @else
                                                        <?php $action = url(Config::get('constants.ADMIN_PATH').'employeurs' . '/' . $item->id)  ?>
                                                        @endif
                                                        <form method="POST" action="{{ $action }}" accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="dropdown-item" title="Delete user" onclick="return confirm('Voulez vous vraiment supprimer ?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>   
                                    @endforeach                
                                </tbody>
                            <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Tel</th>
                                        <th>Sexe</th>
                                        <th><i class="fa fa-wrench"></i></th>
                                    </tr>
                            </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <!-- DataTables -->
    <script src="{{ asset('assets/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {
                        extend: 'excel',
                        text: 'Save current page',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            // Setup - add a text input to each footer cell
             $('.dataTables-example tfoot th').not('.dataTables-example tfoot th:first').not('.dataTables-example tfoot th:last').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="Cherche '+title+'" />' );
            } );
         
            // DataTable
            var table = $('.dataTables-example').DataTable();
         
            // Apply the search
            table.columns().every( function () {
                var that = this;
         
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );

        });

    </script>
@endsection
