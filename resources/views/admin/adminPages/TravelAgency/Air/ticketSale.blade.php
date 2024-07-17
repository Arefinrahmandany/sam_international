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
        <div class="row d-flex justify-content-center card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Purchase From</th>
                                <th>Details</th>
                                <th>Debit</th>
                                <th>Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $sales as $data )
                            <tr>
                                <th>{{ $loop->index+1 }}</th>
                                <td><a href="{{ route('ticket.sellerShow',$data->id) }}" class="text-decoration-none"> {{ optional($data->sellers)->name  }}</a></td>
                                <td>{{ $data->detail }}</td>
                                <td>{{ $data->credit }}</td>
                                <td>{{ $data->debit }}</td>
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
