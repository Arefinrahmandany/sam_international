@extends('admin.layout.app')
@section('main-content')

<div class="row page-titles mb-3  mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Man Power</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">BMET</a></li>
        </ol>
    </div>
</div>
<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @if($form_type == 'create')
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Licence Number</h4>
                        </div>
                        <div class="basic-form">
                            <form method="post" action="{{ route('bmet.store') }}">
                                @csrf
                                @include('validation.validate')
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="rl_name">RL Number</label>
                                        <input type="text" value="" name="rl_name" class="form-control" id="rl_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="rl_fee">RL Fees</label>
                                        <input type="text" value="" name="rl_name" class="form-control" id="rl_fee">
                                    </div>
                                </div>
                                <div class="mt-2 text-end">
                                    <button type="submit" name="submit" class="btn btn-primary m-3">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif

                @if($form_type == 'edit')

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Edit Admin</h4>
                            <a href="{{ route('agentsBd.index') }}">Back</a>
                        </div>

                        <div class="basic-form">

                            <form method="post" action="{{ route('bmet.update', $edit -> id) }}">
                                @csrf
                                @method('PUT')
                                @include('validation.validate')

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="rl_name">NAME</label>
                                        <input type="text" value="{{ $edit -> rl_name }}" name="rl_name" class="form-control" id="rl_name">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="rl_fee">Rl Fees</label>
                                        <input type="text" value="{{ $edit -> rl_fee }}" name="rl_fee" class="form-control" id="rl_fee">
                                    </div>

                                </div>
                                <div class="text-end mt-2">
                                    <button type="submit" name="submit" class="btn btn-warning m-3">Update</button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>

                @endif


            </div>
        </div>
        <div class="row mt-3 pt-3">
            <div class="col-md-12">
                <div><h5>BMET RL Licence List</h5></div>
                <table id="example" class="table table-bordered table-hover">
                    @include('validation.validate-table')
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">RLA Licence</th>
                            <th class="text-center">RL Fees</th>
                            {{--
                            <th class="text-center">Passport on BMET</th>
                            --}}
                            <th class="text-center">Balance</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rl_data as $index => $data)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td><a href="{{ route('bmet.show', $data->id) }}" class="text-decoration-none">{{ $data->rl_name }}</a></td>
                                <td>&#2547; {{ $data->rl_fee }}</td>
                                {{--
                                <td class="col-sm-2 text-center">
                                    {{-- $licenseCountsArray[$data->rl_name] ?? 0 }}
                                </td>
                                --}}
                                <td class="text-end">{{$balance[$data->rl_name] ?? 0}}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <div class="p-1">
                                            <a href="{{ route('bmet.edit',$data->id) }}" class="btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i></a>
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
