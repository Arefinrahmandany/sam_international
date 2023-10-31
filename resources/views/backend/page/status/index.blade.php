@extends('backend.layouts.app')

@section('main-content')


<!------------------------
----------------------- 
    body start 
-----------------------
    ------------------------>
<div class="container pt-4">



    <div class="col-lg-12">
        <div class="row">
            <div class="col-5">
                
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Permission Information</h4>
                            <a href="">Back</a>
                        </div>
                        <div class="basic-form">

                            <form method="post" action="">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NAME</label>
                                        <input type="text" value="" name="name" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                            </form>

                        </div>

                    </div>
                </div>
                

                

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Edit Permission</h4>
                            <a href="">Back</a>
                        </div>

                        <div class="basic-form">

                            <form method="post" action="">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>NAME</label>
                                        <input type="text" value="" name="name" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-dark m-3">Submit</button>

                            </form>

                        </div>

                    </div>
                </div>
                
            </div>

            <div class="card col-7">
                <div class="table-responsive">

                    <table class="table table-striped text-center table-hover mb-0">
                        
                        <thead>
                            <tr class="text-dark">
                                <tr>
                                    <th>Sl.</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>CreatedAt</th>
                                    <th>Action</th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>

                            

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-sm btn-warning"  href=""><i class="fa fa-edit"></i></a>
                                    <form method="post" action="" class="d-inline">
                                        
                                        <button class="btn btn-sm btn-danger delete-btn" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>

                            

                            <tr>
                                <td colspan="5" class="text-danger">No Data found.</td>
                            </tr>
                        </tbody>

                        

                    </table>
                </div>
            </div>

        </div>


        </div>
    </div>


<!-- form End -->







@endsection
