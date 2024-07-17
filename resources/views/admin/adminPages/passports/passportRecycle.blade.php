@extends('admin.layout.app')

@section('main-content')

<!--**********************************
                Content body start
            ***********************************-->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Passports</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Recycle</a></li>
    </ol>
</nav>

<section class="container">
    <div class="table-rasponsive">
        <table id="example" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Passport Number</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Trash By</th>
                    <th class="text-center">Trash at</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $trashPassports as $data )
                <tr>
                    <td class="text-center">{{ $loop-> index+1 }}</td>
                    <td>{{ $data->passport }}</td>
                    <td>{{ $data->name }}</td>
                    <td class="text-center">{{ optional($data->trashBy)->username}}</td>
                    <td  class="text-center">{{ $data->updated_at->format('d-m-Y') }}</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center">
                            <form method="POST" action="{{ route('passports.restore',$data->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-info m-1"><i class="fa fa-recycle"></i></button>
                            </form>
                            <form method="POST" action="{{ route('passports.destroy',$data->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-danger m-1"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</section>

@endsection