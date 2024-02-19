@extends('admin.layout.app')
@section('main-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Passports  Data</li>
    </ol>
</nav>

<main>
    <div class="container row justify-content-center">
        <div class="col-md-6 card">
            <div class="card-body">
                @if( $form_type == 'edit' )
                <form method="POST" action="{{ route('users.userupdate',$user->id) }}">
                    @csrf
                    @method('PUT')
                    @include('validation.validate')

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="email ">Email Address</label>
                            <input type="email " name="email" value="{{ $user->email }}" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="username">User Name</label>
                            <input type="text" name="userName" value="{{ $user->username }}" id="username" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="cell">Phone number</label>
                            <input type="tell" name="cell" value="{{ $user->cell }}" id="cell" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="location">Address</label>
                            <input type="text" name="location" value="{{ $user->location  }}" id="location" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="dob">Date Of Birth</label>
                            <input type="text" name="dob" value="{{ $user->dob }}" id="dob" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="bio">Bio-Data</label>
                            <input type="text" name="bio" value="{{ $user->bio }}" id="bio" class="form-control">
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-end">
                        <div class="m-1 p-1">
                            <button type="submit" class="btn btn-info">Update Profile</button>
                        </div>
                    </div>


                </form>
                @endif
                @if( $form_type == 'show' )
                <div class="p-2 m-2 text-end">
                    <a href="{{ route('users.EditForm',$user->id) }}" class="btn btn-info">Edit</a>
                </div>
                <form method="" action="">

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="name">Full Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="email ">Email Address</label>
                            <input type="email " name="email" value="{{ $user->email }}" id="email" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="username">User Name</label>
                            <input type="text" name="userName" value="{{ $user->username }}" id="username" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="cell">Phone number</label>
                            <input type="tell" name="cell" value="{{ $user->cell }}" id="cell" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="location">Address</label>
                            <input type="text" name="location" value="{{ $user->location  }}" id="location" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="dob">Date Of Birth</label>
                            <input type="text" name="dob" value="{{ $user->dob }}" id="dob" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="m-1 p-1">
                            <label class="form-label" for="bio">Bio-Data</label>
                            <input type="text" name="bio" value="{{ $user->bio }}" id="bio" class="form-control" readonly>
                        </div>
                    </div>

                </form>
                @endif
            </div>
        </div>
    </div>
</main>

@endsection
