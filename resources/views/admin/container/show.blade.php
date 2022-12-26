@extends('admin.master')
@section('title', 'show Customer')
<!-- Theme style -->
@section('content')
<style>
    html,
    body {
        font-family: sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    label {
        font-family: sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 0px !important;
    }

    table thead th {
        height: 28px;
        text-align: left;
        font-size: 16px;
        font-family: sans-serif;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        font-size: 14px;
    }

    .heading {
        font-size: 24px;
        margin-top: 12px;
        margin-bottom: 12px;
        font-family: sans-serif;
    }

    .small-heading {
        font-size: 18px;
        font-family: sans-serif;
    }

    .total-heading {
        font-size: 18px;
        font-weight: 700;
        font-family: sans-serif;
    }

    .order-details tbody tr td:nth-child(1) {
        width: 20%;
    }

    .order-details tbody tr td:nth-child(3) {
        width: 20%;
    }

    .text-start {
        text-align: left;
    }

    .text-end {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .company-data span {
        margin-bottom: 4px;
        display: inline-block;
        font-family: sans-serif;
        font-size: 14px;
        font-weight: 400;
    }

    .no-border {
        border: 1px solid #fff !important;
    }

    .bg-blue {
        background-color: #414ab1;
        color: #fff;
    }

    @media print {
        * {
            font-size: 12px;
            line-height: 20px;
        }

        td,
        th {
            padding: 5px 0;
        }

        .hidden-print {
            display: none !important;
        }

        @page {
            margin: 0;
        }

        body {
            margin: 0.5cm;
            margin-bottom: 1.6cm;
        }
    }

</style>
<section class="content card mt-4">

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th width="50%" colspan="2">
                        <h2 class="text-start"> Container Information</h2>
                    </th>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <a id="click_print" type="button" style="color: #fff;padding: 5px 10px;background: #2196f3;"><i class="fa-solid fa-print"></i> Print</a>
                        <a href="{{ route('generate-pdf.generate', $show->id) }}" target="_blank" type="submit" style="color: #fff;padding: 5px 10px;background: #ff7588;"><i class="fa-solid fa-file-pdf"></i> Pdf</a>
                    </th>
                </tr>
            </thead>
        </table>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card mt-4" id="table_print">
                    <table class="order-details table table-bordered table-sm table-striped text-nowrap card-body">

                        <div class="did">
                            {{-- <h3 class="text-center hidden-print">Customer Information</h3> --}}
                            <tbody>
                                {{-- <thead>
                            <tr class="bg-blue">
                                <th width="50%" colspan="2" class="text-center">Domain Information</th>
                                <th width="50%" colspan="2" class="text-center">Hosting Information</th>
                            </tr>
                        </thead> --}}
                                <tr>
                                    <td>BL Number:</td>
                                    <td><b>{{ $show->bl_number }}</b></td>
                                    <td>Container No:</td>
                                    <td><b>{{ $show->container_no }}</b></td>
                                </tr>
                                <tr>
                                    <td>C.Size:</td>
                                    <td><b>{{ $show->c_size }}</b></td>
                                    <td>Seal No:</td>
                                    <td><b>{{ $show->seal_no }}</b></td>
                                </tr>
                                <tr>
                                    <td>Vessel Name:</td>

                                    <td><b>{{ $show->vessel_name }}</b></td>

                                    <td>Voyage :</td>

                                    <td><b>{{ $show->voyage }}</b></td>

                                </tr>
                                <tr>
                                    <td>Place of Receipt:</td>

                                    <td><b>{{ $show->place_receipt }}</b></td>


                                    <td>Place of Loading :</td>

                                    <td><b>{{ $show->place_loading }}</b></td>

                                </tr>
                                <tr>
                                    <td>Port of Discharge:</td>


                                    <td><b>{{ $show->port_discharge }}</b></td>



                                    <td>Final Destination :</td>


                                    <td><b>{{ $show->final_destination }}</b></td>


                                </tr>
                                <tr>
                                    <td>Comidity:</td>

                                    <td><b>{{ $show->comidity }}</b></td>

                                    <td>ETD :</td>

                                    <td><b>{{ $show->etd }}</b></td>
                                </tr>
                                <tr>
                                    <td>ETA:</td>


                                    <td><b>{{ $show->eta }}</b></td>


                                    <td>Shipped on Board :</td>


                                    <td><b>{{ $show->shipped_board }}</b></td>

                                </tr>
                                <tr>
                                    <td>BL Type :</td>



                                    <td><b>{{ $show->bl_type }}</b></td>



                                    <td>Issue Date :</td>



                                    <td><b>{{ $show->issue_date }}</b></td>


                                </tr>
                                <tr>
                                    <td>Location :</td>




                                    <td><b>{{ $show->location }}</b></td>




                                    <td>Status :</td>




                                    <td><b>{{ $show->status }}</b></td>



                                </tr>
                            </tbody>
                        </div>
                    </table>
                </div>

            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('admin/dist/js/PrintJs.js')}}"></script>
    <script type="text/javascript">
        $('#click_print').click(function() {
            $('#table_print').printThis();
        })

    </script>
    @endsection
