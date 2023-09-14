@extends('backend.layouts.app')

@section('main-content')

<!-- card Start-->

<div class="container py-5">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-md-9 col-lg-7 col-xl-5">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <div class="d-flex text-black">
                        <div class="flex-shrink-0">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" class="img-fluid" style="width: 180px; border-radius: 10px;">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="mb-1">Danny McLoan</h5>
                            <p class="mb-2 pb-1" style="color: #2b2a2a;">Senior Journalist</p>
                            <div class="d-flex justify-content-start rounded-3 p-2 mb-2" style="background-color: #efefef;">
                                <div>
                                    <p class="small text-muted mb-1">Phone</p>
                                    <p class="mb-0">41</p>
                                </div>
                                <div class="px-3">
                                    <p class="small text-muted mb-1">Email</p>
                                    <p class="mb-0">976</p>
                                </div>
                                <div>
                                    <p class="small text-muted mb-1">Total Due</p>
                                    <p class="mb-0">8.5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- card end-->
<!-- Table Start-->

<table>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID.</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">NID</th>
                <th scope="col">Address</th>
                <th scope="col">Balance Amount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-warning" href="" >Edit</a>
                    <a class="btn btn-danger" href="">Delet</a>
                </td>
            </tr>

</table>

<!-- Table End-->




@endsection
