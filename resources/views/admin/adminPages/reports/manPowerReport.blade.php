@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('transection.index') }}" class="text-decoration-none">Reports</a></li>
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Man-Power Reports</a></li>
    </ol>
</nav>
<main>
    <div class="container">
        <div>
            <h4>Man-Power Reports</h4>
        </div>
    </div>
    <div class="container card">
        <div class="card-body row d-flex justify-content-center">
            <div class="col-md-12">
                <form>
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="">From</label>
                            <input type="" class="form-control" name="" id="">
                        </div>
                        <div class="col">
                            <label class="form-label" for="">To</label>
                            <input type="" class="form-control" name="" id="">
                        </div>
                        <div class="col">
                            <label class="form-label" for="">Agent Name</label>
                            <input type="" class="form-control" name="" id="">
                        </div>
                        <div class="col">
                            <label class="form-label" for="">Visa Process</label>
                            <input type="" class="form-control" name="" id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container card mt-5 p-5">
        <div class="card-body row d-flex justify-content-center">
            <div class="col-md-12 table-responsive">
                <table id="table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Passport Number</th>
                            <th class="text-center">Country</th>
                            <th class="text-center">Visa Process</th>
                            <th class="text-center">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center">01.</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</main>
@endsection
