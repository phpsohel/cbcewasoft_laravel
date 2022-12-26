@extends('admin.master')
@section('title', 'Edit Container')

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

<div class="col-md-12">
    <h2 class="text-left">Edit Member</h2>
    <div class="card mt-4">
        <form action="{{route('member.update', $edit->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                            <input type="text" name="member_name" value="{{ $edit->member_name }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('member_name'))
                            <span style="color:red;">{{ $errors->first('member_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Father's Name<span style="color:red;"> *</span></label>

                            <input type="text" name="father_name" value="{{ $edit->father_name }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('father_name'))
                            <span style="color:red;">{{ $errors->first('father_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mother's Name<span style="color:red;"> *</span></label>

                            <input type="text" name="mother_name" value="{{ $edit->mother_name }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('mother_name'))
                            <span style="color:red;">{{ $errors->first('mother_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>

                            <input type="text" name="address" value="{{ $edit->address }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('address'))
                            <span style="color:red;">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Permanent Address<span style="color:red;"> *</span></label>

                            <input type="text" name="permanent_address" value="{{ $edit->permanent_address }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('permanent_address'))
                            <span style="color:red;">{{ $errors->first('permanent_address') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Date of Birth<span style="color:red;"> *</span></label>

                            <input type="date" name="birth" value="{{ $edit->birth }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('birth'))
                            <span style="color:red;">{{ $errors->first('birth') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Education<span style="color:red;"> *</span></label>

                            <input type="text" name="education" value="{{ $edit->education }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('education'))
                            <span style="color:red;">{{ $errors->first('education') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Company Name<span style="color:red;"> *</span></label>
                            <input type="text" name="company_name" value="{{ $edit->company_name }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('company_name'))
                            <span style="color:red;">{{ $errors->first('company_name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Designation<span style="color:red;"> *</span></label>
                            <input type="text" name="designation" value="{{ $edit->designation }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('designation'))
                            <span style="color:red;">{{ $errors->first('designation') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Company Address<span style="color:red;"> *</span></label>

                            <input type="text" name="company_address" value="{{ $edit->company_address }}" class="form-control" id="exampleInputPassword1">

                            @if($errors->has('company_address'))
                            <span style="color:red;">{{ $errors->first('company_address') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>

                            <input type="number" name="phone" value="{{ $edit->phone }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('phone'))
                            <span style="color:red;">{{ $errors->first('phone') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                            <input type="email" name="email" value="{{ $edit->email }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('email'))
                            <span style="color:red;">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Blood<span style="color:red;"> *</span></label>
                            <input type="text" name="blood" value="{{ $edit->blood }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('blood'))
                            <span style="color:red;">{{ $errors->first('blood') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">NID NO<span style="color:red;"> *</span></label>
                            <input type="text" name="nid" value="{{ $edit->nid }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('nid'))
                            <span style="color:red;">{{ $errors->first('nid') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Payment Status:</label>
                        <select class="form-control" name="payment_status">
                            <option value="1" {{ $edit->payment_status == 1 ? "Selected": '' }}>Paid</option>
                            <option value="0" {{ $edit->payment_status == 0 ? "Selected": '' }}>UnPaid</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputPassword1">Juridiction of Factory:</label>
                         <select class="form-control" name="cbc_type">
                             <option value="1" {{ $edit->cbc_type == 1 ?"Selected":'' }}>CBC-N</option>
                             <option value="2" {{ $edit->cbc_type == 2 ?"Selected":'' }}>CBC-S</option>
                             <option value="3" {{ $edit->cbc_type == 3 ?"Selected":'' }}>CBC-E</option>
                             <option value="4" {{ $edit->cbc_type == 4 ?"Selected":'' }}>CBC-W</option>
                         </select>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Photo<span style="color:red;"> *</span></label>
                            <input id="image" type="file" name="photo" class="form-control">
                            @if(!empty($edit->photo))
                            <img id="showImage" src="{{ asset('member_image/'.$edit->photo ) }}" width="100px" alt="{{ $edit->name }}">
                            @else
                            <img id="showImage" src="{{ asset('image/no_image.jpg') }}" width="100px" alt="{{ $edit->name }}">
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update </button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>



</div>
</section>
@endsection
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

</script>
