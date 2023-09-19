@extends('backend.layouts.app')

@section('main-content')


<div class="container">
    <div class="mb-4">
        <div class="p-4">
            <div class="mb-4 pt-4 heading">
                <a href="{{ route('home.home') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="mb-4 pt-4 heading">
                <h3>Balance Sheet</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Sl</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Credit</th>
                                    <th scope="col">Debit</th>
                                    <th scope="col">Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_Transaction as $transaction)

                                <tr>
                                    <th scope="row">{{$loop -> index + 1  }}</th>
                                    <td>{{$transaction -> transaction_date  }}</td>
                                    <td>{{$transaction -> credit  }}</td>
                                    <td>{{$transaction -> debit  }}</td>
                                    <td>{{$transaction -> Balance  }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>







@endsection
