@extends('backend.layouts.app')

@section('main-content')


<!-- form start -->
<div class="container-fluid pt-4 px-4">
    <div class="container">
        @if ($errors -> any())
        <p class="alert alert-danger">{{$errors -> first()}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif
        @if( Session::has('success'))
        <p class="alert alert-success">{{Session::get('success')}}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
        @endif
        <form method="POST" action="{{ route('VisaApplication.store') }}">
            @csrf
            <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4">Visa Submission</h4>
                <div class="input-group mb-3 row">
                    <input type="text" name="passportnumber" class="form-control col-md-10"  id="passportnumber" placeholder="Passport Number" >
                </div>
                <div class="input-group mb-3 row">
                    <select name="applyingcountry" class="form-select">
                        <option selected>Select the Country</option>
                        @forelse ( $all_countries as $countrys)
                        <option value="{{$countrys -> code }}">{{$countrys -> name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="input-group mb-3 row">
                    <select name="agencies" class="form-select">
                        <option selected>Select the Agency</option>
                        @forelse ( $all_visaOffices as $visaOffices)
                        <option value="{{$visaOffices -> id }}">{{$visaOffices -> name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="input-group mb-3 row">
                    <span for="date" class="form-label">Submission Date</span>
                    <input type="date" name="applyingdate" class="form-control col-md-10"  id="date" >
                </div>
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Add Visa Submission</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- form End -->


@endsection
