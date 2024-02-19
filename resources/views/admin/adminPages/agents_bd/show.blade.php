@extends('admin.layout.app')

@section('main-content')


<!--**********************************
    Content body start
***********************************-->
    <div class="row page-titles mb-3  mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('agentsBd.index') }}">Agents</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('agentsBd.index') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $agent -> name }}</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 mb-3">
            <div class=" card col-lg-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8"><b>Name :</b> {{ $agent -> name }}</div>
                        <div class="col-md-8"><b>Email :</b> {{ $agent -> email }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-8"><b>Phone Number :</b> {{ $agent -> cell }}</div>
                        <div class="col-md-8"><b>Address :</b> {{ $agent -> address }}</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8"><b>Balance :</b> {{ $agent -> name }}</div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <div class="data_table">
                            <table id="example" class="table table-striped table-hover table-bordered">
                                <h6 class="mb-4">{{ $agent -> name }} Statment </h6>
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Date</th>
                                        <th scope="col" class="text-center">Detail</th>
                                        <th scope="col" class="text-center">Debit</th>
                                        <th scope="col" class="text-center">Credit</th>
                                        <th scope="col" class="text-center">Due</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ( $agent_data as $data )
                                    <tr>
                                        <th scope="row">{{ $loop -> index+1 }}</th>
                                        <td>{{ $data -> created_at->format('d.m.Y') }}</td>
                                        <td>{{ $data -> details }}</td>
                                        <td class="text-end">
                                            @if ($data -> credit == null)
                                            @else
                                            {{ number_format($data -> credit, 2, '.', ',') }}
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            @if ($data -> debit == null)
                                            @else
                                            {{ number_format($data -> debit, 2, '.', ',') }}
                                            @endif
                                        </td>
                                        <td class="text-end">
                                            @if ($data -> due == null)
                                            @else
                                            {{ number_format($data -> due, 2, '.', ',') }}
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr class="text-end">
                                        <td colspan="3" class="text-end">Total Balance</td>
                                        <td colspan="3" class="text-start">
                                            @if ($totalAmount == null)
                                            @else
                                            {{ number_format($totalAmount, 2, '.', ',') }}
                                            @endif
                                        </td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!--**********************************
    Content body END
***********************************-->



@endsection
