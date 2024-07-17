@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Soudia Employment</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Home</a></li>
                    </ol>
                </div>
            </div>

            <div class="container">
                <a class="btn btn-primary" href="{{ route('saudiEmp.sponser',Auth::guard('admin')->user()->id) }}"><i class="fa fa-print"></i> Print Sponsers</a>
            </div>
<div class="container-fluid pt-4 px-4">


    <div class="row g-4 mb-3">

        <div class="container">
            <div class="row">
                @include('validation.validate')
                <div class="col-12 table-responsive">
                    <div class="data_table">
                        <table id="example" class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Passport Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Applying Country</th>
                                <th scope="col">Agent</th>
                                <th scope="col" class="text-center">Form Print</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $passports_data as $po_data)
                            <tr>
                                <th scope="row">{{ $loop -> index + 1}}</th>
                                <td>{{ $po_data -> passport }}</td>
                                <td>{{ $po_data -> name }}</td>
                                <td>{{ $po_data -> applying_country }}</td>
                                <td>{{ optional($po_data->agents)->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('saudiEmp.linkUp',$po_data->id) }}" class="btn btn-sm btn-primary">Embassi Link</i></a>
                                    <a href="{{ route('saudiEmp.sponserStore',$po_data->id) }}" class="btn btn-sm btn-info">Add to Sponser</a>
                                    <a href="{{ route('saudiEmp.ksaVisa',$po_data->id) }}" class="btn btn-sm btn-warning">Application form</a>
                                    <a href="{{ route('saudiEmp.employmentContract',$po_data->id) }}" class="btn btn-sm btn-warning">Contract</a>
                                    <a href="{{ route('saudiEmp.ksavisaapp',$po_data->id) }}" class="btn btn-sm btn-warning">Ksa Visa App</a>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>


    </div>
</div>




<!--**********************************
        Content body end
***********************************-->



@endsection
