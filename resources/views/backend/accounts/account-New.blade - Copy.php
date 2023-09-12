@extends('backend.layouts.app')

@section('main-content')
<!-- form start -->

<div class="container-fluid pt-4">
    <div class="container">
        <form method="POST" action="">
            @csrf
            @method('post')
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">New Agent Add</h4>
                <div class="input-group mb-3 row">
                    <input type="text" name="name" class="form-control col-md-10" value="<?php echo old('name');?>" placeholder="AGENT NAME*">
                </div>
                <div class="input-group mb-3 row">
                    <input type="tel" name="phone" class="form-control col-md-10" value="<?php echo old('phone');?>" placeholder="Phone Number" id="phone">
                </div>
                <div class="input-group mb-3 row">
                    <input type="email" name="email" class="form-control col-md-10" value="<?php echo old('email');?>" id="email" placeholder="Email address">
                </div>
                <div class="input-group mb-3 row">
                    <input type="text" name="nid" class="form-control col-md-10" placeholder="1234567890" value="<?php echo old('nid');?>" id="nid" placeholder="NID Number">
                </div>
                <div class="input-group mb-3 row">
                    <textarea type="Text" name="address" class="form-control col-md-10" id="address" value="<?php echo old('address');?>" placeholder="Address"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Add Agent</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- form End -->
@endsection
