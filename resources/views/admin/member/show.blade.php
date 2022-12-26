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
                        <h2 class="text-start"> Member Information</h2>
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
                    <table class="table-responsive">
                        <a href="" class="text-center">
                            <img src="{{ asset('public/member_image/'. $show->photo ?? '') }}" alt="{{ $show->member_name ?? '' }}" width="150px;">
                        </a>
                        <div class="did">
                            <tbody>
                                <tr>
                                    <td>Name :</td>
                                    <td><b>{{ $show->member_name ?? ''}}</b></td>

                                    <td>Father's Name:</td>

                                    <td><b>{{ $show->father_name ?? ''}}</b></td>

                                </tr>
                                <tr>
                                    <td>Mother's Name :</td>

                                    <td><b>{{ $show->mother_name ?? ''}}</b></td>

                                    <td>Address :</td>

                                    <td><b>{{ $show->address  ?? ''}}</b></td>

                                </tr>
                                <tr>
                                    <td>Permanent Address :</td>


                                    <td><b>{{ $show->permanent_address ?? '' }}</b></td>



                                    <td>Date of Birth :</td>


                                    <td><b>{{ $show->birth ?? ''}}</b></td>

                                </tr>
                                <tr>
                                    <td>Education Qualification :</td>

                                    <td><b>{{ $show->education ?? ''}}</b></td>

                                    <td>Company Name :</td>
                                    <td><b>{{ $show->company_name ?? ''}}</b></td>

                                </tr>
                                <tr>
                                    <td>Designation :</td>
                                    <td><b>{{ $show->designation  ?? ''}}</b></td>
                                    <td>Company Address :</td>
                                    <td><b>{{ $show->company_address ?? ''}}</b></td>

                                </tr>
                                <tr>
                                    <td>Phone :</td>
                                    <td><b>{{ $show->phone ?? ''}}</b></td>
                                    <td>Email :</td>
                                    <td><b>{{ $show->email ?? ''}}</b></td>

                                </tr>
                                <tr>
                                    <td>Blood :</td>
                                    <td><b>{{ $show->blood ?? ''}}</b></td>
                                    <td>NID NO :</td>
                                    <td><b>{{ $show->nid ?? ''}}</b></td>

                                </tr>
                                <tr>
                                    <td>Juridiction of Factory :</td>
                                    <td><b>
                                        @if($show->cbc_type == '1')
                                                <p class="text-success"> CBC -N</p>
                                        @elseif($show->cbc_type == '2')

                                                <p class="text-primary"> CBC -S</p>
                                        @elseif($show->cbc_type == '3')

                                                <p class="text-info"> CBC -E</p>
                                         @elseif($show->cbc_type == '4')
                                                <p class="text-warning"> CBC -W</p>
                                        @endif
                                        </b>
                                    </td>

                                    <td>Payment Status :</td>

                                    <td>
                                        <b>@if($show->payment_status == '1')
                                            <p class="text-success"> Paid</p>

                                            @else
                                                <p class="text-danger">Unpaid</p>
                                            @endif
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Application Status :</td>
                                    <td><b>{{ $show->application_status ?? ''}}</b></td>
                                    <td></td>
                                    <td><b></b></td>
                                </tr>
                                <tr>
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
