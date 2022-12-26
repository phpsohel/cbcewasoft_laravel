@extends('admin.master')
@section('title', 'Add Member')

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
                            <div class=""> </div>
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
                                <h4 class="modal-title text-center">Add Member</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-danger">The field labels marked with * are required input fields.</p>

                                <form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                                    <input type="text" name="member_name" class="form-control" id="exampleInputEmail1">
                                                    @if($errors->has('member_name'))

                                                    <span style="color:red;">{{ $errors->first('member_name') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Father's Name<span style="color:red;"> *</span></label>

                                                    <input type="text" name="father_name" value="{{ old('father_name') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                                    @if($errors->has('father_name'))
                                                    <span style="color:red;">{{ $errors->first('father_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mother's Name<span style="color:red;"> *</span></label>
                                                    <input type="text" name="mother_name" value="{{ old('mother_name') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                                    @if($errors->has('mother_name'))
                                                    <span style="color:red;">{{ $errors->first('mother_name') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>
                                                    <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                                    @if($errors->has('address'))
                                                    <span style="color:red;">{{ $errors->first('address') }}</span>
                                                    @endif


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Permanent Address<span style="color:red;"> *</span></label>
                                                    <input type="text" name="permanent_address" value="{{ old('permanent_address') }}" class="form-control" id="exampleInputEmail1">
                                                    @if($errors->has('permanent_address'))
                                                    <span style="color:red;">{{ $errors->first('permanent_address') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Date of Birth<span style="color:red;"> *</span></label>
                                                    <input type="date" name="birth" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('birth'))
                                                    <span style="color:red;">{{ $errors->first('birth') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Education Qualification<span style="color:red;"> *</span></label>
                                                    <input type="text" name="education" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('education'))
                                                    <span style="color:red;">{{ $errors->first('education') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Company Name<span style="color:red;"> *</span></label>

                                                    <input type="text" name="company_name" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('company_name'))
                                                    <span style="color:red;">{{ $errors->first('company_name') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Designation<span style="color:red;"> *</span></label>

                                                    <input type="text" name="designation" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('designation'))
                                                    <span style="color:red;">{{ $errors->first('designation') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Company Address<span style="color:red;"> *</span></label>
                                                    <input type="text" name="company_address" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('company_address'))
                                                    <span style="color:red;">{{ $errors->first('company_address') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>
                                                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('phone'))
                                                    <span style="color:red;">{{ $errors->first('phone') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('email'))
                                                    <span style="color:red;">{{ $errors->first('email') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Blood<span style="color:red;"> *</span></label>
                                                    <input type="text" name="blood" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('blood'))
                                                    <span style="color:red;">{{ $errors->first('blood') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">NID NO<span style="color:red;"> *</span></label>

                                                    <input type="number" name="nid" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('nid'))
                                                    <span style="color:red;">{{ $errors->first('nid') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1">Payment Status:</label>
                                                <select class="form-control" name="payment_status">
                                                        <option value="1">Paid</option>
                                                        <option value="0">UnPaid</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                    <label for="exampleInputPassword1">Juridiction of Factory:</label>
                                                    <select class="form-control" name="cbc_type">
                                                        <option value="1">CBC-N</option>
                                                        <option value="2">CBC-S</option>
                                                        <option value="3">CBC-E</option>
                                                        <option value="4">CBC-W</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Upload Your Photo<span style="color:red;"> *</span></label>
                                                    <input id="image" type="file" name="photo" class="form-control" id="exampleInputPassword1">

                                                    <img id="showImage" src="{{ asset('image/no_image.jpg') }}" alt="" width="100px;">
                                                    @if($errors->has('photo'))
                                                    <span style="color:red;">{{ $errors->first('photo') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="card-footer">
                                                <label for=""></label>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg"><i class="fa-regular fa-plus"></i> Add Member</button>
                    <br>
                    <br>
                    <h1>All Member </h1>
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
                                        <th>Father's Name </th>

                                        <th>Mother's Name</th>

                                        <th>Address</th>

                                        <th>Permanent Address</th>

                                        <th>Date of Birth</th>
                                        <th>Education</th>

                                        <th>Company Name</th>

                                        <th>Designation</th>

                                        <th>Company Address</th>

                                        <th>Phone</th>

                                        <th>Email</th>

                                        <th>Blood</th>

                                        <th>NID</th>
                                        <th>Juridiction of Factory</th>
                                        <th>Photo </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 0;
                                @endphp
                                <tbody>
                                    @foreach( $members as $member)

                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $member->member_name ?? ''}}</td>
                                        <td>{{ $member->father_name ?? ''}}</td>
                                        <td>{{ $member->mother_name ?? ''}}</td>
                                        <td>{{ $member->address ?? ''}}</td>
                                        <td>{{ $member->permanent_address ?? ''}}</td>
                                        <td>{{ $member->birth ?? ''}}</td>
                                        <td>{{ $member->education ?? ''}}</td>
                                        <td>{{ $member->company_name ?? ''}}</td>
                                        <td>{{ $member->designation ?? ''}}</td>
                                        <td>{{ $member->company_address ?? ''}}</td>
                                        <td>{{ $member->phone ?? ''}}</td>
                                        <td>{{ $member->email ?? ''}}</td>
                                        <td>{{ $member->blood ?? ''}}</td>
                                        <td>{{ $member->nid ?? ''}}</td>
                                        <td>
                                            @if($member->cbc_type  == '1')
                                                <a href="" class="text-success"> Paid </a>
                                                @else
                                                <a href="" class="text-danger"> UnPaid </a>

                                            @endif
                                        </td>
                                        <td>
                                            <img src="{{ asset('member_image/'.$member->photo ??'') }}" alt="" width="100px;">

                                        </td>
                                        <td>
                                            <a href="{{ route('member.edit', $member->id) }}" class="text-success">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="{{ route('member.show', $member->id) }}" class="text-danger">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a id="delete" href="{{ route('member.delete', $member->id) }}" class="text-danger">
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
    //Image click
    $(document).ready(() => {
        $('#image').change(function() {
            const file = this.files[0];
            console.log(file);
            if (file) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    console.log(event.target.result);
                    $('#showImage').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });

    //Delete Alert Message
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
