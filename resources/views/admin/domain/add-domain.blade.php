@extends('admin.master')
@section('title', 'Add Shipping')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection()
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card ">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Add Shipping</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.store.add-domain')}}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="card-body" style="padding: 0px">
                                            <div class="row">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6" data-select2-id="30">
                                                <div class="form-group" data-select2-id="29">
                                                    <label>Vessel Name</label>
                                                    <select name="cust_id" class="form-control" style="width: 100%;">
                                                        @foreach($customers as $key => $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->name ?? ''}}</option>
                                                        @endforeach
                                                    </select>

                                                    @if($errors->has('cust_id'))
                                                    <span class="text-danger">{{$errors->first('cust_id')}}</span>
                                                    @endif()

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Voyage<span style="color:red;"> *</span></label>
                                                    <input type="text" name="domain_name" class="form-control" id="exampleInputEmail1">
                                                    @if($errors->has('domain_name'))
                                                    <span class="text-danger">{{$errors->first('domain_name')}}</span>
                                                    @endif()
                                                </div>
                                            </div>
                                            <div class="col-md-6" data-select2-id="30">
                                                <div class="form-group" data-select2-id="29">
                                                    <label>Comidity</label>
                                                    <select name="cust_id" class="form-control" style="width: 100%;">
                                                        @foreach($customers as $key => $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->name ?? ''}}</option>
                                                        @endforeach
                                                    </select>

                                                    @if($errors->has('cust_id'))
                                                    <span class="text-danger">{{$errors->first('cust_id')}}</span>
                                                    @endif()

                                                </div>
                                            </div>
                                            <div class="col-md-6" data-select2-id="30">
                                                <div class="form-group" data-select2-id="29">
                                                    <label>BL Type</label>
                                                    <select name="cust_id" class="form-control" style="width: 100%;">
                                                        @foreach($customers as $key => $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->name ?? ''}}</option>
                                                        @endforeach
                                                    </select>

                                                    @if($errors->has('cust_id'))
                                                    <span class="text-danger">{{$errors->first('cust_id')}}</span>
                                                    @endif()

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">ETD </label>
                                                    <input type="text" name="domain_author_name" class="form-control" id="exampleInputEmail1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">ETA </label>
                                                    <input type="text" name="domain_yearly_price" class="form-control" id="exampleInputEmail1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Shipped On Board </label>
                                                    <input type="date" name="domain_start_date" class="form-control" id="exampleInputEmail1">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                {{-- <div class="form-group">
                                                    <label for="exampleInputEmail1">Domain Exp: Date </label>
                                                    <input type="date" name="domain_expiry_date" class="form-control" id="exampleInputEmail1">
                                                </div> --}}
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div class="container">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">Add Shipping</button>
                </div>
                <div class="col-sm-6">
                </div>
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
                                        <th>Container Info</th>
                                        <th>Vessel Name</th>
                                        <th>Customer Name</th>
                                        <th>Domain Name</th>
                                        <th>Authority Name</th>
                                        <th>Yearly Price</th>
                                        <th>Start Date</th>
                                        <th>Exp: Date</th>
                                        <th>Hosting Space</th>
                                        <th>Hosting Author</th>
                                        <th>Hosting Start Date</th>
                                        <th>Hosting Exp: Date</th>
                                        <th>Hosting Yearly Price</th>
                                        <th>SMS</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 0;
                                @endphp
                                <tbody>
                                    @foreach( $domains as $domain)
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $domain->customer->name ?? ''}}</td>
                                        <td>{{ $domain->domain_name ?? '' }}</td>
                                        <td>{{ $domain->domain_author_name ?? ''}}</td>
                                        <td>{{ $domain->domain_yearly_price ?? ''}}</td>
                                        <td>{{ $domain->domain_start_date ?? ''}}</td>
                                        <td>{{ $domain->domain_expiry_date ?? ''}}</td>
                                        <td>{{ $domain->hosting_space ?? ''}}</td>
                                        <td>{{ $domain->hosting_author_name ?? ''}}</td>
                                        <td>{{ $domain->hosting_start_date ?? ''}}</td>
                                        <td>{{ $domain->hosting_expiry_date ?? ''}}</td>
                                        <td>{{ $domain->hosting_yearly_price ?? ''}}</td>
                                        <td>
                                            <a href=""><i class="fa-solid fa-comment-sms"></i></a> |
                                            <a href=""><i class="fa-solid fa-envelope"></i></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.edit-domain',$domain->id)}}" class="text-success">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a> |
                                            <a id="weet" onclick="check();" href="{{ route('admin.delete-domain',$domain->id)}}" class="text-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a> |
                                            <a href="{{  route('admin.view-domain',$domain->id ) }}" class="text-danger">
                                                <i class="fa-solid fa-eye"></i>
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
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}""></script>
<script src=" {{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}""></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}""></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}""></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}""></script>
<script src=" {{asset('admin/plugins/jszip/jszip.min.js')}}""></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}""></script>
<script src=" {{asset('admin/plugins/pdfmake/vfs_fonts.js')}}""></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}""></script>
<script src=" {{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}""></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}""></script>
<script>
    $(function () {
      $(" #example1").DataTable({ "responsive" : true, "lengthChange" : false, "autoWidth" : false, "buttons" : ["copy", "csv" , "excel" , "pdf" , "print" , "colvis" ] }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)'); $('#example2').DataTable({ "paging" : true, "lengthChange" : false, "searching" : false, "ordering" : true, "info" : true, "autoWidth" : false, "responsive" : true, }); }); </script>
    @endsection
