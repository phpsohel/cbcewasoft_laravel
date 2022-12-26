@extends('admin.master')
@section('title', 'All Expire List')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}"">
  <link rel=" stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}"">
  <link rel=" stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}"">
@endsection()
  <!-- Theme style -->
@section('content')
<section class=" content">
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="row">
                </div>
            </div>
            <!-- /.col -->
        </div>
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content"></div>
            </div>
        </div>
    </div>
</div class="container">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Expire Domain & Hosting </h1>
            </div>
            {{-- <div class="col-sm-6" style="text-align:right;">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">Add Domain</button>
            </div> --}}
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="container">
            <form action="{{ route('admin.all-expire.search') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group col-md-3 ">
                        <label for="">From Date</label>
                        <input id="From" name="from_date" type="date" value="{{  $from ?? '' }}" class="form-control">

                    </div>
                    <div class="form-group col-md-3 ">
                        <label for="">To Date</label>
                        <input id="Last" name="to_date" type="date" value="{{ $to ?? '' }}" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="">Customer Name</label>
                        <select name="cust_name" class="selectpicker form-control customer_id" data-live-search="true" id="" data-live-search-style="begins" title="Select Member Name">
                            <option value="" class="">All Customer</option>
                            @foreach ($customers as $customer)
                            <option value="{{$customer->id  }}" {{ $customer->id == $cust_name ? "Selected":'' }}>{{ $customer->name ?? ''}}</option>


                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for=""></label>
                        <button type="submit" class="form-control btn btn-primary mt-2">Search</button>
                    </div>
                </div>

            </form>

        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Customer Name</th>
                                    <th>Domain Name</th>
                                    <th> Author Name</th>
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
                                    <td>{{ $domain->customer->name ?? '' }}</td>
                                    <td>{{ $domain->domain_name ?? ''}}</td>
                                    <td>{{ $domain->domain_author_name ?? ''}}</td>
                                    <td>{{ $domain->domain_yearly_price}}</td>
                                    <td>{{ $domain->domain_start_date}}</td>
                                    <td>{{ $domain->domain_expiry_date}}</td>
                                    <td>{{ $domain->hosting_space}}</td>
                                    <td>{{ $domain->hosting_author_name}}</td>
                                    <td>{{ $domain->hosting_start_date}}</td>
                                    <td>{{ $domain->hosting_expiry_date}}</td>
                                    <td>{{ $domain->hosting_yearly_price}}</td>
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
