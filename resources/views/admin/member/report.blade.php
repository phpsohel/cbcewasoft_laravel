@extends('admin.master')
@section('title', 'Member Report')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="mt-4 p-4" style="">
                    <h1 class="text-center mb-4"> <b>Select Area</b> </h1>
                    <div class="input-group rounded  mb-4">                           
                        <select class="form-control  cbc_type " >
                            <option value="0" class="form-control">All</option>
                            <option value="1">CBC-N</option>
                            <option value="2">CBC-S</option>
                            <option value="3">CBC-E</option>
                            <option value="4">CBC-W</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-12">
                <div class="card" id="bl_table_append">
                </div>
            </div>
        </div>
    </div>
@endsection
    <!-- jQuery -->
    <script src="{{ asset('admin/auth/js/jquery/jquery.min.js')}}"></script>
    <!-- Toaster -->
    <script src="{{ asset('admin/toaster/js/toastr.min.js')}}"></script>

    <script>
        $(document).on('click', '.cbc_type', function() {
            var id = $(".cbc_type option:selected").val();
            console.log(id);
            $.ajax({
                type: 'get'
                , url: "{{ route('member.search.report') }}"
                , dataType: 'HTML'
                , data: {
                    id:id
                }
                , 'global': false
                , asyn: true
                , success: function(data) {
                    $("#bl_table_append").html(data)
                    console.log(data)
                }
                , error: function(response) {
                    console.log(response);
                }
            });
        });
    </script>
</body>
</html>

