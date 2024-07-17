@extends('admin.layout.app')

@section('main-content')

@php
    if ($form_type == 'create') {
        $page_title = 'Add New Agent';
    } elseif ($form_type == 'edit') {
        $page_title = $agent->name;
    } elseif($form_type == 'show') {
        $page_title = $agent->name;
    }
@endphp

<!--**********************************
    Content body start
***********************************-->
    <div class="row page-titles mb-3  mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('agentsBd.index') }}">Agents</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('agentsBd.index') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $page_title }}</a></li>
            </ol>
        </div>
    </div>

<main>
    <section class="container d-flex justify-content-center">
        <div class="col-lg-8">
            @if($form_type == 'create')
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Agent Information</h4>
                    </div>
                    <div class="basic-form">

                        <form method="post" action="{{ route('agentsBd.store') }}">

                            @csrf
                            @include('validation.validate')

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label>NAME</label>
                                    <input type="text" value="" name="name" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="tel" value="" name="cell" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" value="" name="email" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Address</label>
                                    <input type="text" value="" name="address" class="form-control">
                                </div>
                                <div class="row d-flex justify-content-around">
                                    <div class="col-md-3 form-group mt-3">
                                        <label for="socialNetwork" class="form-label">Select Social Network</label>
                                        <select id="socialNetwork" class="form-control" name="social_network">
                                            <option value="" disabled selected> --> Select <-- </option>
                                            <option value="whatsApp">WhatsApp</option>
                                            <option value="vibar">Vibar</option>
                                            <option value="imo">Imo</option>
                                            <option value="massanger">Massanger</option>
                                            <option value="wechat">WeChat</option>
                                        </select>
                                    </div>

                                    <div class="col-md-9 form-group mt-3">
                                        <label for="socialCredential" class="form-label">Enter Credential</label>
                                        <input type="text" id="socialCredential" class="form-control" name="social_credential" placeholder="Enter your credential">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

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

                        <form method="post" action="{{ route('agentsBd.update', $agent -> id) }}">

                            @csrf
                            @method('PUT')
                            @include('validation.validate')

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <label>NAME</label>
                                    <input type="text" value="{{ $agent -> name }}" name="name" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="tel" value="{{ $agent -> cell }}" name="cell" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" value="{{ $agent -> email }}" name="email" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Adress</label>
                                    <input type="text" value="{{ $agent -> address }}" name="address" class="form-control">
                                </div>

                            </div>

                            <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                        </form>

                    </div>

                </div>
            </div>

            @endif


        </div>
    </section>
    @if ($form_type == 'show' )


    <div class="container">
        <div class="row d-flex justify-content-center card">
            <div class="col-md-12 card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered border border-black">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Date</th>
                                <th scope="col" class="text-center">Detail</th>
                                <th scope="col" class="text-center">Debit</th>
                                <th scope="col" class="text-center">Credit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $agent_data as $data )
                            <tr>
                                <th scope="row" class="text-center">{{ $loop -> index+1 }}</th>
                                <td>{{ $data -> created_at->format('d.m.Y') }}</td>
                                <td>{{ $data -> detail }}</td>
                                <td class="text-end">
                                    @if ($data -> credit == null)
                                    @else
                                    {{ number_format($data -> credit, 2, '.', ',') }}
                                    @endif
                                </td>
                                <td class="text-end">
                                    @if ($data -> debit == null)
                                    @else
                                    {{ number_format($data -> debit, 2, '.', ',') }}
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
    </div>

    @endif

</main>

<!--**********************************
    Content body END
***********************************-->



@endsection
