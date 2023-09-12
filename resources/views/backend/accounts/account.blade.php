@include('backend.header')
<!-- form start -->
<div class="container-fluid pt-4 px-4">
    <div class="container">
        <a class="btn btn-primary" href="agents.php" role="button">Back</a>
        <form method="POST" action="agents.php">
            <div class="bg-light rounded h-100 p-4">
            <h4 class="mb-4">New Agent Add</h4>
            <?php echo $msg  ?? '';?>
                <div class="input-group mb-3 row">
                    <span class="input-group-text col-md-2" id="name">AGENT NAME*</span>
                    <input type="text" name="name" class="form-control col-md-10" value="<?php echo old('name');?>" placeholder="Name">
                </div>
                <div class="input-group mb-3 row">
                    <span for="phone" class="input-group-text col-md-2">Phone Number</span>
                    <input type="tel" name="phone" class="form-control col-md-10" value="<?php echo old('phone');?>" placeholder="+880 1234 567890" id="phone">
                </div>
                <div class="input-group mb-3 row">
                    <label for="email" class="input-group-text col-md-2">Email address</label>
                    <input type="email" name="email" class="form-control col-md-10" value="<?php echo old('email');?>" id="email">
                </div>
                <div class="input-group mb-3 row">
                    <label for="nid" class="input-group-text col-md-2">NID Number</label>
                    <input type="text" name="nid" class="form-control col-md-10" placeholder="1234567890" value="<?php echo old('nid');?>" id="nid">
                </div>
                <div class="input-group mb-3 row">
                    <label for="address" class="input-group-text col-md-2">Address</label>
                    <textarea type="Text" name="address" class="form-control col-md-10" id="address" value="<?php echo old('address');?>" placeholder="Address"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>
    <!-- form End -->

@include('backend.footer')
