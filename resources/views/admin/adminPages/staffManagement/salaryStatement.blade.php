@extends('admin.layout.app')

@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('transection.index') }}" class="text-decoration-none">Accounts</a></li>
        <li class="breadcrumb-item"><a href="{{ route('staff.index') }}" class="text-decoration-none">Staff</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $staff->name }}</li>
    </ol>
</nav>

<main>
    <div class="container">
        <div id="printDiv" class="card row">
            <div class="card body col-md-12">
                <div class="p-3 mt-2 mb-2 d-flex justify-content-between">
                    <div>
                        <h3>{{ $staff->name }}</h3>
                    </div>
                    <div>
                        <h4>Salary Statment</h4>
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
                        @forelse( $statement as $data )
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
