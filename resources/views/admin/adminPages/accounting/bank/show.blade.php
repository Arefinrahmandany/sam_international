@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

<div class="row page-titles mb-3  mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{-- route('transection.index') --}}"  class="link-underline-light link-dark">Account</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('bank.index') }}" class="link-underline-light link-dark">Bank Page</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Bank Statment</a></li>
        </ol>
    </div>
</div>

<main>
<!-- main Section Start -->
<div class="container">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table id="example" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Date</th>
                        <th class="text-center">Details</th>
                        <th class="text-center">Debit</th>
                        <th class="text-center">Credit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $bank_transection as $data )
                    <tr>
                        <td class="text-center">{{ $data->created_at->format('d.m.Y') }}</td>
                        <td>{{ $data -> details }}</td>
                        <td>
                            @if ($data->debit == null)
                            @else
                            {{ number_format($data->debit, 2, '.', ',') }}
                            @endif
                        </td>
                        <td>
                            @if ($data->credit == null)
                            @else
                            {{ number_format($data->credit, 2, '.', ',') }}
                            @endif
                        </td>
                    </tr>
                    @empty
                    @endforelse
                    <tr>
                        <td></td>
                        <td class="text-end"><b>Balance</b></td>
                        <td class="text-center"><b>
                            @if ($balance == null)
                            @else
                            {{ number_format($balance, 2, '.', ',') }}
                            @endif
                        </b></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- main Section End -->
</main>
@endsection
