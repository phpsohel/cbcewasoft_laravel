@extends('admin.master')
@section('title', 'All User')

@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="row">
                        <div class="col-md-12">
                            <div class=""> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center">Add Container</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-danger">The field labels marked with * are required input fields.</p>
                                <form action="{{ route('user.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                            </div>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        @if($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                            </div>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        @if($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Role <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <select class="form-control" name="role_id">
                                                @foreach($roles as $key => $role)
                                                <option value="{{ $role->id  }}">{{ $role->name ?? '' }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if($errors->has('role_id'))
                                        <span class="text-danger">{{ $errors->first('role_id')}}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer justify-content-between">
                                <div type="" class=""></div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>

            </div>

            <!-- /.modal-dialog -->
        </div>
    </div class="container">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fa-regular fa-plus"></i> Add Container</button>
                    <br>
                    <br>
                    <h1>All Container </h1>
                </div>
                <div class="col-sm-6" style=""></div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>BL Number</th>
                                        <th>Container No</th>
                                        <th>C.Size</th>
                                        <th>Seal No </th>
                                        <th>Vessel Name</th>
                                        <th>Voyage</th>
                                        <th>Place of Receipt</th>
                                        <th>Place of Loading</th>
                                        <th>Port of Discharge</th>
                                        <th>Final Destination</th>
                                        <th>Comidity</th>
                                        <th>ETD</th>
                                        <th>ETA</th>
                                        <th>BL Type</th>
                                        <th>Shipped Board</th>
                                        <th>Issue Date </th>
                                        <th>Location </th>
                                        <th>Status </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 0;
                                // use App\Models\Container;
                                // $containers = Container::all();
                                @endphp
                                <tbody>
                                    @foreach( $containers as $container)
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $container->bl_number}}</td>
                                        <td>{{ $container->container_no}}</td>
                                        <td>{{ $container->c_size}}</td>
                                        <td>{{ $container->seal_no}}</td>
                                        <td>{{ $container->vessel_name}}</td>
                                        <td>{{ $container->voyage}}</td>
                                        <td>{{ $container->place_receipt}}</td>
                                        <td>{{ $container->place_loading}}</td>
                                        <td>{{ $container->port_discharge}}</td>
                                        <td>{{ $container->final_destination}}</td>
                                        <td>{{ $container->comidity}}</td>
                                        <td>{{ $container->etd}}</td>
                                        <td>{{ $container->eta}}</td>
                                        <td>{{ $container->shipped_board}}</td>
                                        <td>{{ $container->bl_type}}</td>
                                        <td>{{ $container->issue_date}}</td>
                                        <td>{{ $container->location}}</td>
                                        <td>{{ $container->status}}</td>
                                        <td>
                                            <a href="{{ route('admin.container.edit', $container->id) }}" class="text-success">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('admin.container.show', $container->id) }}" class="text-danger">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>

                                            <a id="delete" href="{{ route('admin.container.destroy', $container->id) }}" class="text-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>


                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>


    </div>
</section>
@endsection
@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src=" {{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src=" {{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
    $(document).on('click', '#delete', function(e) {
        e.preventDefault();
        var link = $(this).attr('href');
        swal({
                title: 'Are you sure want to delete?'
                , text: 'Once You delete,This will be permently Delete'
                , icon: 'warning'
                , buttons: true
                , dangerMode: true
            })
            .then((willdelete) => {
                if (willdelete) {
                    window.location.href = link;
                } else {
                    swal('Saafe data')
                }
            });
    });

    $(function() {
        $(" #example1").DataTable({
            "responsive": true
            , "lengthChange": false
            , "autoWidth": false
            , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true
            , "lengthChange": false
            , "searching": false
            , "ordering": true
            , "info": true
            , "autoWidth": false
            , "responsive": true
        , });
    });

</script>
@endsection
