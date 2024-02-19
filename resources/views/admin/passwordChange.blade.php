@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Passports  Data</li>
    </ol>
</nav>

<main>
    <div class="container d-flex justify-content-center">
        <div class="row card">
            <div class="card-body">
                <form method="POST" action={{ route('users.passwordChange') }}>
                    @csrf
                    @method('PUT')
                    @include('validation.validate')
                    <div class="row">
                        <div class="m-1 p-1">
                            <label class="form-label" for="oldPassword">Old Password</label>
                            <input type="password" name="oldPassword" id="oldPassword" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="m-1 p-1">
                            <label class="form-label" for="newPassword">New Password</label>
                            <input type="password" name="newPassword" id="newPassword" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="m-1 p-1">
                            <label class="form-label" for="confirmPassword">Confirm Password</label>
                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="m-1 p-1">
                            <button type="submit" class="btn btn-info" onclick="return validatePasswords()">Update Password</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</main>

@endsection
