<div class="modal fade" id="edit_member_{{$member->id}}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <p class="text-danger">The field labels marked with * are required input fields.</p>
                  <form action="{{route('member.update', $member->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">
                          <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">Photo<span style="color:red;"> *</span></label>
                                  <input id="image" type="file" name="photo" value="{{ asset('member_image/'. $member->photo ?? '')}}" class="form-control">
                                  <img src="{{ asset('member_image/'.$member->photo ??'') }}" alt="" width="80px;">

                              </div>
                          </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                      <input type="text" name="member_name" value="{{ $member->member_name }}" required class="form-control" id="exampleInputEmail1">
                                      @if($errors->has('member_name'))
                                      <span style="color:red;">{{ $errors->first('member_name') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Father's Name<span style="color:red;"> *</span></label>

                                      <input type="text" name="father_name" value="{{ $member->father_name }}" required class="form-control" id="exampleInputEmail1">

                                      @if($errors->has('father_name'))
                                      <span style="color:red;">{{ $errors->first('father_name') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Mother's Name<span style="color:red;"> *</span></label>
                                      <input type="text" name="mother_name" value="{{ $member->mother_name }}" required class="form-control" id="exampleInputEmail1">

                                      @if($errors->has('mother_name'))
                                      <span style="color:red;">{{ $errors->first('mother_name') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>

                                      <input type="text" name="address" value="{{ $member->address }}" required class="form-control" id="exampleInputEmail1">

                                      @if($errors->has('address'))
                                      <span style="color:red;">{{ $errors->first('address') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Permanent Address<span style="color:red;"> *</span></label>

                                      <input type="text" name="permanent_address" value="{{ $member->permanent_address }}" required class="form-control" id="exampleInputEmail1">

                                      @if($errors->has('permanent_address'))
                                        <span style="color:red;">{{ $errors->first('permanent_address') }}</span>
                                      @endif

                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="">Date of Birth<span style="color:red;"> *</span></label>
                                      <input type="date" name="birth" value="{{ $member->birth }}" required class="form-control" id="">
                                      @if($errors->has('birth'))
                                      <span style="color:red;">{{ $errors->first('birth') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Education<span style="color:red;"> *</span></label>
                                      <input type="text" name="education" value="{{ $member->education }}" required class="form-control" id="">

                                      @if($errors->has('education'))
                                      <span style="color:red;">{{ $errors->first('education') }}</span>
                                      @endif

                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Company Name<span style="color:red;"> *</span></label>
                                      <input type="text" name="company_name" value="{{ $member->company_name }}" required  class="form-control" id="">

                                      @if($errors->has('company_name'))
                                      <span style="color:red;">{{ $errors->first('company_name') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Designation<span style="color:red;"> *</span></label>
                                      <input type="text" name="designation" value="{{ $member->designation }}" required class="form-control" id="">

                                      @if($errors->has('designation'))
                                      <span style="color:red;">{{ $errors->first('designation') }}</span>
                                      @endif

                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Company Address<span style="color:red;"> *</span></label>
                                      <input type="text" name="company_address" value="{{ $member->company_address }}" required class="form-control" id="">

                                      @if($errors->has('company_address'))
                                      <span style="color:red;">{{ $errors->first('company_address') }}</span>
                                      @endif

                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Phone<span style="color:red;"> *</span></label>
                                      <input type="text" name="phone" value="{{ $member->phone ?? ''}}" required class="form-control" id="">
                                      @if($errors->has('phone'))
                                      <span style="color:red;">{{ $errors->first('phone') }}</span>
                                      @endif

                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Email<span style="color:red;"> *</span></label>
                                      <input type="email" name="email" value="{{ $member->email }}" required class="form-control" id="">

                                      @if($errors->has('email'))
                                      <span style="color:red;">{{ $errors->first('email') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Blood<span style="color:red;"> *</span></label>
                                      <input type="text" name="blood" value="{{ $member->blood }}" required class="form-control" id="">

                                      @if($errors->has('blood'))
                                      <span style="color:red;">{{ $errors->first('blood') }}</span>
                                      @endif

                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">NID NO<span style="color:red;"> *</span></label>
                                      <input type="text" name="nid" value="{{ $member->nid }}" required class="form-control" id="">

                                      @if($errors->has('nid'))
                                      <span style="color:red;">{{ $errors->first('nid') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <label for="">Payment Status:</label>
                                  <select class="form-control" name="payment_status">
                                      <option value="1" {{ $member->payment_status == 1 ? "Selected": '' }}>Paid</option>
                                      <option value="2" {{ $member->payment_status == 2 ? "Selected": '' }}>UnPaid</option>
                                  </select>
                              </div>
                              <div class="col-md-6">
                                  <label for="">Juridiction of Factory:</label>
                                  <select class="form-control" name="cbc_type">
                                      <option value="1" {{ $member->cbc_type == 1 ?"Selected":'' }}>CBC-N</option>
                                      <option value="2" {{ $member->cbc_type == 2 ?"Selected":'' }}>CBC-S</option>
                                      <option value="3" {{ $member->cbc_type == 3 ?"Selected":'' }}>CBC-E</option>
                                      <option value="4" {{ $member->cbc_type == 4 ?"Selected":'' }}>CBC-W</option>
                                  </select>
                              </div>
                              
                              <div class="col-md-6">
                                <label for="">Application Status:</label>
                                <select class="form-control" name="application_status">
                                    <option value="1" {{ $member->application_status == 1 ?"Selected":'' }}>Approve</option>
                                    <option value="2" {{ $member->application_status == 2 ?"Selected":'' }}>Pending</option>
                                    <option value="3" {{ $member->application_status == 3 ?"Selected":'' }}>Rejected</option>
                                </select>
                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-success">Update </button>
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
