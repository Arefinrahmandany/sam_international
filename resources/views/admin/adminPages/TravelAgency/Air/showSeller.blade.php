@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('transection.index') }}" class="text-decoration-none">Air Travel</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Air Ticket Sales</a></li>
    </ol>
</nav>

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Detail</th>
                            <th>Debit</th>
                            <th>Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $seller as $data )
                        <tr>
                            <td>{{ $loop -> index +1 }}</td>
                            <td>{{ $data -> detail }}</td>
                            <td>{{ $data -> debit }}</td>
                            <td>{{ $data -> credit }}</td>
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
