@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Man Power</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-decoration-none">KSA Process</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#" class="text-decoration-none text-danger">Home</a></li>
    </ol>
</nav>

<main>
    <div class="container pt-4 px-4">
        <div class="row g-4 mb-3">
            <h5>KSA Visa Proccess</h5>
            <div class="card">
                <div class="card-body">
                    <input type="text" class="form-control" name="search" list="search_for" id="search">
                    <datalist id="search_for">
                        <option value="Passport in Embassy"></option>
                        <option value="Passport in Mofa"></option>
                        <option value=""></option>
                    </datalist>
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</main>
@endsection
