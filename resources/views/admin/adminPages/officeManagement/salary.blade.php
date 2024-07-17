@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
        <li class="breadcrumb-item"><a href="#">Staff</a></li>
        <li class="breadcrumb-item active" aria-current="page">Salary Statement</li>
    </ol>
</nav>
<main>
    <div class="container">
        <div class="row">
            <div class="p-2">
                <form action="{{ route('staff.salaryStatement') }}" method="post">
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
                                    <td class="col-2 m-1">

                                    </td>
                                    <td class="col-3 m-1">

                                    </td>
                                    <td class="col-3 m-1">
                                        <label class="form-lable" for="staff">Staff</label>
                                        <select class="form-select" name="staff" id="staff">
                                            <option value="">-- Select --</option>
                                            @forelse( $allStaff as $data )
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
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card">
                <div id="printDiv" class="card-body table-responsive">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-3">Duration From {{ $startDate }} to {{ $endDate  }}</div>
                        <div class="col-md-3">{{ $searchStaff }} Salary Statement</div>
                        <div class="col-md-3"></div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Vch.No.</th>
                                <th class="text-center">Details</th>
                                <th class="text-center">Debit</th>
                                <th class="text-center">Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $allTransaction as $data )
                            <tr>
                                <td class="text-center">{{ $loop ->index+1 }}</td>
                                <td class="text-center">{{ $data ->voucherNo }}</td>
                                <td>{{ $data ->details }}</td>
                                <td class="text-end">{{ $data ->debit }}</td>
                                <td class="text-end">{{ $data ->credit }}</td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
