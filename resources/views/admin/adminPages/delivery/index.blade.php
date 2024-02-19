@extends('admin.layout.app')
@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Man Power</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Passport Delivery</a></li>
                    </ol>
                </div>
            </div>
<main>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 mb-3">
            <div class="col-md-12">

                <table id="example" class="table table-bordered table-hover">
                    @include('validation.validate-table')
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Passport Number</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $all_passports as $data )
                        <tr>
                            <td>{{ $loop -> index + 1  }}</td>
                            <td>{{ $data -> passport_number  }}</td>
                            <td>Wating for delivery</td>
                            <td>
                                @if ($data->bmet_status == 'pass')
                                <form method="POST" action="{{ route('passport.deliver', $data->id ) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-primary">Passsport Delivered</button>
                                </form>
                                @else
                                    <form method="POST" action="{{ route('passport.deliver', $data->id ) }}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary">Rejected Passport</button>
                                    </form>
                                @endif
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
