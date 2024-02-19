@extends('admin.layout.app')
@section('main-content')

<div class="container">
    <h4>Transaction</h4>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Voucher number</th>
                <th>Detail</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tbody>
                @forelse( $transaction as $data )
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $data-> voucherNo }}</td>
                    <td>{{ $data-> details }}</td>
                    <td>{{ $data-> debit }}</td>
                    <td>{{ $data-> credit }}</td>
                    <td>
                        <a class="btn btn-sm btn-info"  href="{{ route('agentsBd.show',$data->id) }}"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-sm btn-warning"  href="{{route('agentsBd.edit',$data -> id)}}"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger"  href="{{route('agentsBd.tresh.update',$data -> id)}}"><i class="fa fa-trash"></i></a>
                        {{--
                            <form method="post" action="{{ route('admin-user.destroy',$per -> id) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-sm btn-danger delete-btn" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        --}}
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </tbody>
    </table>
</div>

    @endsection
