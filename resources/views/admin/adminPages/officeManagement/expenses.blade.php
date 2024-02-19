@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Office Management</a></li>
        <li class="breadcrumb-item"><a href="#">Accounts</a></li>
        <li class="breadcrumb-item active" aria-current="page">Expenses</li>
    </ol>
</nav>

<main>
    <div class="container">
        <div class="p-2">
            <form action="{{ route('office.expenses') }}" method="post">
                @csrf
                <div class="row d-flex justify-content-btween mt-2 mb-2">
                    <div class="col-md-6 d-flex">
                        <div class="p-1">
                            <label class="form-lable" for="start_date">From Date</label>
                            <input type="date" name="start_date" value="{{ $startDate ?? '' }}" class="form-control" id="start_date">
                        </div>
                        <div class="p-1">
                            <label class="form-lable" for="end_date">To Date</label>
                            <input type="date" name="end_date" value="{{ $endDate ?? '' }}" class="form-control" id="end_date">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-1">
                            <label class="form-lable" for="search">Search</label>
                            <div style="display: flex; align-items: center;">
                                <input type="text" name="search" class="form-control" id="search">
                                <button type="submit" class="btn btn-sm"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="printDiv" class="card row">
            <div class="card body col-md-12">
                <div class="p-3 mt-2 mb-2 d-flex justify-content-between">
                    <div>
                        <h3></h3>
                    </div>
                    <div>
                        <h4>Office Expenses</h4>
                    </div>
                    <div>
                        <h4>Detail Information</h4>
                    </div>
                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Description</th>
                            <th>Debit</th>
                            <th>Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse( $expense as $data )
                        <tr>
                            <td>{{ $loop -> index + 1 }}</td>
                            <td>{{ $data-> created_at->format('d.m.Y') }}</td>
                            <td>{{ $data -> details }}</td>
                            <td>{{ $data -> debit }}</td>
                            <td>{{ $data -> credit }}</td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-2 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary" onclick="printDiv()"><i class="fa fa-printer"></i>Print</button>
        </div>
    </div>

</main>
@endsection
