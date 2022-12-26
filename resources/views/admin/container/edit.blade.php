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
    <h2 class="text-left">Edit Container</h2>
    <div class="card mt-4">
        <form action="{{route('admin.container.update', $edit->id)}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">BL Number<span style="color:red;"> *</span></label>
                            <input type="text" name="bl_number" value="{{ $edit->bl_number }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('bl_number'))
                            <span style="color:red;">{{ $errors->first('bl_number') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Container No<span style="color:red;"> *</span></label>
                            <input type="text" name="container_no" value="{{ $edit->container_no }}" class="form-control" id="exampleInputEmail1" placeholder="">
                            @if($errors->has('container_no'))
                            <span style="color:red;">{{ $errors->first('container_no') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">C.Size<span style="color:red;"> *</span></label>
                            <input type="text" name="c_size" value="{{ $edit->c_size }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('c_size'))
                            <span style="color:red;">{{ $errors->first('c_size') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Seal No<span style="color:red;"> *</span></label>
                            <input type="text" name="seal_no" value="{{ $edit->seal_no }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('seal_no'))
                            <span style="color:red;">{{ $errors->first('seal_no') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Vessel Name<span style="color:red;"> *</span></label>
                            <input type="text" name="vessel_name" value="{{ $edit->vessel_name }}" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('vessel_name'))
                            <span style="color:red;">{{ $errors->first('vessel_name') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Voyage<span style="color:red;"> *</span></label>
                            <input type="text" name="voyage" value="{{ $edit->voyage }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('voyage'))
                            <span style="color:red;">{{ $errors->first('voyage') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Place of Receipt<span style="color:red;"> *</span></label>
                            <input type="text" name="place_receipt" value="{{ $edit->place_receipt }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('place_receipt'))
                            <span style="color:red;">{{ $errors->first('place_receipt') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Place of Loading<span style="color:red;"> *</span></label>
                            <input type="text" name="place_loading" value="{{ $edit->place_loading }}" class="form-control" id="exampleInputPassword1">

                            @if($errors->has('place_loading'))
                            <span style="color:red;">{{ $errors->first('place_loading') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Port of Discharge<span style="color:red;"> *</span></label>
                            <input type="text" name="port_discharge" value="{{ $edit->port_discharge }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('port_discharge'))
                            <span style="color:red;">{{ $errors->first('port_discharge') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Final Destination<span style="color:red;"> *</span></label>
                            <input type="text" name="final_destination" value="{{ $edit->final_destination }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('final_destination'))
                            <span style="color:red;">{{ $errors->first('final_destination') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Comidity<span style="color:red;"> *</span></label>
                            <input type="text" name="comidity" value="{{ $edit->comidity }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('comidity'))
                            <span style="color:red;">{{ $errors->first('comidity') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">ETD<span style="color:red;"> *</span></label>
                            <input type="date" name="etd" value="{{ $edit->etd }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('etd'))
                            <span style="color:red;">{{ $errors->first('etd') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">ETA<span style="color:red;"> *</span></label>
                            <input type="date" name="eta" value="{{ $edit->eta }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('eta'))
                            <span style="color:red;">{{ $errors->first('eta') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Shipped Board<span style="color:red;"> *</span></label>
                            <input type="date" name="shipped_board" value="{{ $edit->shipped_board }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('shipped_board'))
                            <span style="color:red;">{{ $errors->first('shipped_board') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">BL Type<span style="color:red;"> *</span></label>
                            <input type="text" name="bl_type" value="{{ $edit->bl_type }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('bl_type'))
                            <span style="color:red;">{{ $errors->first('bl_type') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Issue Date<span style="color:red;"> *</span></label>
                            <input type="date" name="issue_date" value="{{ $edit->issue_date }}" class="form-control" id="exampleInputPassword1">


                            @if($errors->has('issue_date'))
                            <span style="color:red;">{{ $errors->first('issue_date') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Location<span style="color:red;"> *</span></label>
                            <input type="text" name="location" value="{{ $edit->location }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('location'))
                            <span style="color:red;">{{ $errors->first('location') }}</span>
                            @endif

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status<span style="color:red;"> *</span></label>
                            <input type="text" name="status" value="{{ $edit->status }}" class="form-control" id="exampleInputPassword1">
                            @if($errors->has('status'))
                            <span style="color:red;">{{ $errors->first('status') }}</span>
                            @endif

                        </div>
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
