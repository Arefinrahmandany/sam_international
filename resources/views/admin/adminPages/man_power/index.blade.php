@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->

            <div class="row page-titles mb-3  mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)" class="link-underline-light link-dark">Man Power</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)" class="link-underline-light link-dark">Man Power Status</a></li>
                    </ol>
                </div>
            </div>

<div class="container pt-4 px-4">
    <div class="row g-4 mb-3">
        <div class="col-md-12">
            <table class="table table-bordered table-responsive" id="example">
                <thead>
                <tr>
                    <th class="text-center">Sl</th>
                    <th class="text-center">Passport Number</th>
                    <th class="text-center">RL No.</th>
                    <th class="text-center">Submit Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($passports as $data)
                    <tr>
                        <form method="POST" action="{{ route('manpower.update',$data->id) }}">
                            @csrf
                            @method('PUT')

                            <td class="col-md-1 text-center"><b>{{ $loop->index + 1 }}</b></td>

                            <td class="col-md-1"><a href="{{ route('passports.show',$data->id) }}" class="link-underline-light link-dark">{{ $data->passport_number }}</a></td>

                            <td  class="col-md-1">
                                <select class="form-select" name="rla_num" id="rla_num">
                                    <option value="{{ $data->rla_num }}">{{ $data->rla_num }}</option>
                                    @forelse( $rlLicence as $rlData )
                                    <option value="{{ $rlData->rl_name }}">{{ $rlData->rl_name }}</option>
                                    @empty
                                    @endforelse
                                    <option value=""></option>
                                </select>
                            </td>

                            <td class="col-md-1">
                                <input type="date" name="manpower_submit_date" value="{{ $data->manpower_submit_date }}" class="form-control text-center">
                                <input type="submit" style="display: none;">
                            </td>
                        </form>

                            <td class="col-md-2">
                                @if ( empty($data->manpower_submit_date) )
                                    <span class="btn badge bg-info">Nil</span>
                                @elseif (!empty($data->manpower_submit_date) && empty($data->bmet_status))
                                        <span class="btn badge bg-primary">Waiting</span>
                                    <div class="d-flex">
                                        <div class="p-1">
                                            <form method="post" action="{{ route('manpower.status', ['id' => $data->passport_number]) }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="bmet_status" value="pass">
                                                <button type="submit" class="btn btn-sm btn-outline-success"><i class="fa fa-check"></i></button>
                                            </form>
                                        </div>
                                        <div class="p-1">
                                            <form method="post" action="{{ route('manpower.statusReject', $data->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="bmet_status" value="reject">
                                                <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-times"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                @elseif ($data->bmet_status == 'pass')
                                        <span class="btn badge bg-primary">Pass Clearance</span>

                                @elseif ($data->bmet_status == 'reject')
                                        <span class="btn badge bg-primary">Clearnce Fail</span>
                                        <form method="post" action="{{ route('manpower.status', $data->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="bmet_status" value="">
                                            <button type="submit" class="btn btn-secendory"><i class="fa fa-check"></i>Submit Again</button>
                                        </form>
                                    @endif

                            </td>

                            <td class="col-md-3">
                                @if (empty($data->manpower_submit_date) && empty($data->bmet_status))
                                    NIL
                                @elseif (!empty($data->manpower_submit_date) && empty($data->bmet_status))
                                    <span class="btn btn-warning">Men Power On process</span>
                                @elseif (!empty($data->manpower_submit_date) && $data->bmet_status == 'pass')
                                    <span class="btn btn-success">Men Power Pass Cleared</span>
                                @elseif (empty($data->manpower_submit_date) && $data->bmet_status == 'rejected')
                                    <span class="btn btn-danger">Men Power Rejected</span>
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

@endsection
