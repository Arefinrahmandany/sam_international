@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Passports</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
    </ol>
</nav>
<main>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="p-2">
                <form action="{{ route('agents.transactions') }}" method="post">
                    @csrf
                    <div class="row d-flex justify-content-btween mt-2 mb-2 table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="col-2 m-1">
                                        <div class="p-1">
                                            <label class="form-lable" for="start_date">From Date</label>
                                            <input type="date" name="startDate" value="{{ $startDate ?? '' }}" class="form-control" id="start_date">
                                        </div>
                                    </td>
                                    <td class="col-2 m-1">
                                        <div class="p-1">
                                            <label class="form-lable" for="end_date">To Date</label>
                                            <input type="date" name="endDate" value="{{ $endDate ?? '' }}" class="form-control" id="end_date">
                                        </div>
                                    </td>

                                    <td class="col-3 m-1">

                                    </td>
                                    <td class="col-3 m-1">
                                        <label class="form-lable" for="agents">Agent</label>
                                        <select class="form-select" name="agents" id="agents">
                                            <option value="">-- Select --</option>
                                            @forelse( $agents as $data )
                                            <option value="{{ $data->name }}">{{ $data->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="text-end">
                                        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i> Search</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>

                <div class="m-2 p-2">
                    <button type="submit" class="btn btn-primary" onclick="printDiv()"><i class="fa fa-printer"></i>Print</button>
                </div>
            </div>
            <div id="printDiv" class="card m-2 p-2">
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Vch. No.</th>
                            <th class="text-center">Detail</th>
                            <th class="text-center">Debit</th>
                            <th class="text-center">Credit</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse( $agentTransaction as $data )
                        <tr>
                            <td class="text-center">{{ $loop->index+1 }}</td>
                            <td  class="text-center">{{ $data->created_at->format('d.m.Y') }}</td>
                            <td  class="text-center">{{ $data->voucherNo }}</td>
                            <td>{{ $data->detail }}</td>
                            <td class="text-end">
                                {{ $data->debit ? number_format($data->debit, 2, '.', ',') : '' }}
                            </td>
                            <td class="text-end">
                                {{ $data->credit ? number_format($data->credit, 2, '.', ',') : '' }}
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <div class="m-1">
                                        <form action="{{ route('agentsTransaction.edit',$data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-sm btn-outline-info"><i class="fa fa-edit"></i></button>
                                        </form>
                                    </div>
                                    <div class="m-1">
                                        <form action="{{ route('agentsTransaction.trash',$data->id) }}" method="POST" onsubmit='return confirm("Are you sure you want to delete?");' />
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection