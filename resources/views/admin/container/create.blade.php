@extends('admin.master')
@section('title', 'All Container')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection()
<!-- Theme style -->
@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
<style>
    .dt-buttons.btn-group.flex-wrap button {
        margin: 5px;
        background: #209dc3;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="row">
                        <div class="col-md-12">
                            <div class=""> </div><!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.col -->
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

                                <form action="{{route('admin.container.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">BL Number<span style="color:red;"> *</span></label>
                                                    <input type="text" name="bl_number" class="form-control" id="exampleInputEmail1">
                                                    @if($errors->has('bl_number'))
                                                    <span style="color:red;">{{ $errors->first('bl_number') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Container No<span style="color:red;"> *</span></label>
                                                    <input type="text" name="container_no" value="{{ old('container_info') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                                    @if($errors->has('container_no'))
                                                    <span style="color:red;">{{ $errors->first('container_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">C.Size<span style="color:red;"> *</span></label>
                                                    <input type="text" name="c_size" value="{{ old('c_size') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                                    @if($errors->has('c_size'))
                                                    <span style="color:red;">{{ $errors->first('c_size') }}</span>
                                                    @endif


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Seal No<span style="color:red;"> *</span></label>
                                                    <input type="text" name="seal_no" value="{{ old('seal_no') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                                    @if($errors->has('seal_no'))
                                                    <span style="color:red;">{{ $errors->first('seal_no') }}</span>
                                                    @endif


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Vessel Name<span style="color:red;"> *</span></label>
                                                    <input type="text" name="vessel_name" value="{{ old('vessel_name') }}" class="form-control" id="exampleInputEmail1">
                                                    @if($errors->has('vessel_name'))
                                                    <span style="color:red;">{{ $errors->first('vessel_name') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Voyage<span style="color:red;"> *</span></label>
                                                    <input type="text" name="voyage" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('voyage'))
                                                    <span style="color:red;">{{ $errors->first('voyage') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Place Receipt<span style="color:red;"> *</span></label>
                                                    <input type="text" name="place_receipt" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('place_receipt'))
                                                    <span style="color:red;">{{ $errors->first('place_receipt') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Place Loading<span style="color:red;"> *</span></label>
                                                    <input type="text" name="place_loading" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('place_loading'))
                                                    <span style="color:red;">{{ $errors->first('place_loading') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Port Discharge<span style="color:red;"> *</span></label>
                                                    <input type="text" name="port_discharge" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('port_discharge'))
                                                    <span style="color:red;">{{ $errors->first('port_discharge') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Final Destination<span style="color:red;"> *</span></label>
                                                    <input type="text" name="final_destination" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('final_destination'))
                                                    <span style="color:red;">{{ $errors->first('final_destination') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Comidity<span style="color:red;"> *</span></label>
                                                    <input type="text" name="comidity" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('comidity'))
                                                    <span style="color:red;">{{ $errors->first('comidity') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">ETD<span style="color:red;"> *</span></label>
                                                    <input type="date" name="etd" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('etd'))
                                                    <span style="color:red;">{{ $errors->first('etd') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">ETA<span style="color:red;"> *</span></label>
                                                    <input type="date" name="eta" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('eta'))
                                                    <span style="color:red;">{{ $errors->first('eta') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Shipped Board<span style="color:red;"> *</span></label>
                                                    <input type="date" name="shipped_board" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('shipped_board'))
                                                    <span style="color:red;">{{ $errors->first('shipped_board') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">BL Type<span style="color:red;"> *</span></label>
                                                    <input type="text" name="bl_type" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('bl_type'))
                                                    <span style="color:red;">{{ $errors->first('bl_type') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Issue Date<span style="color:red;"> *</span></label>
                                                    <input type="date" name="issue_date" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('issue_date'))
                                                    <span style="color:red;">{{ $errors->first('issue_date') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Location<span style="color:red;"> *</span></label>
                                                    <input type="text" name="location" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('location'))
                                                    <span style="color:red;">{{ $errors->first('location') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Status<span style="color:red;"> *</span></label>
                                                    <input type="text" name="status" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('status'))
                                                    <span style="color:red;">{{ $errors->first('status') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
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
