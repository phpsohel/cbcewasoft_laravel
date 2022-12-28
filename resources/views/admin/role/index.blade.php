@extends('admin.master')
@section('title', 'Role Index')
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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-role"><i class="fa-regular fa-plus"></i> Add Role</button>
                    <br>
                    <br>
                    <h1>All Role </h1>
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
                                        <th>Name</th>
                                        <th>Description</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 0;
                                @endphp
                                <tbody>
                                    @foreach( $roles as $role)

                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $role->name ?? ''}}</td>
                                        <td>{{ $role->description ?? ''}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#edit-role{{ $role->id }}" style="color: #7c5cc4"><i class="fa-solid fa-pen-to-square"></i> Edit</button>

                                                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target=""><a href="{{ route('role.permission', $role->id) }}" style="color: #7c5cc4"><i class="fa-brands fa-openid"></i> Change Permission</a></button>

                                                    <a href="{{ route('role.destroy',$role->id) }}" id="delete" class="btn btn-primary dropdown-item" style="color: #7c5cc4"><i class="fa-solid fa-trash"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('admin.role.edit_modal')
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
     <div class="row">
         <!-- left column -->
         <div class="col-md-12">
             <div class="card card-primary">
                 <div class="row">
                     <div class="col-md-12">
                         <div class=""> </div>
                     </div>
                 </div>
             </div>
         </div>
{{-- Add Modal --}}
{{-- ============================ --}}
         <div class="col-md-12">
             <div class="modal fade" id="add-role">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h4 class="modal-title text-center">Add Role</h4>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <p class="text-danger">The field labels marked with * are required input fields.</p>
                             <form action="{{route('role.store')}}" method="POST">
                                 @csrf
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                                 <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                                                 @if($errors->has('name'))
                                                 <span style="color:red;">{{ $errors->first('name') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Description</label>
                                                 <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
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
                 </div>
             </div>
         </div>

{{-- Edit Modal --}}
{{-- =========================================== --}}

     </div>
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
