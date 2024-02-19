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
            <div class="card">
                <table id="example" class="table table-bordered table-responsive">
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
                        @forelse( $transaction as $data )
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
