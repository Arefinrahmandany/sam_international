<?php @include('header');

if(isset( $_POST['signUp'] )){
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email' ?? ''];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $photo=$_FILE['photo'];
    $agree = $_POST['agree'];

    /**
     * file info collect
     */

     $file_name = $_FILES['photo']['name'];
     $file_tmp_name = $_FILES['photo']['tmp_name'];

    //alert messege

    if(empty($name) || empty($user_name) || empty($email) || empty($password) || empty($confirmPassword) || empty($agree)){
        $msg = validetion ("All fileds are requird!" , "danger");
    }elseif($password == $confirmPassword){

        connection()-> query("INSERT INTO users ( name, user_name, email, password, photos ) VALUES ('$name', '$user_name','$email','$password','$file_name')");

        //file upload feature

        move_uploaded_file($file_tmp_name, 'image/users/' . $file_name);
        $msg = validetion ("Data Add Successfully!","success") ;

    }else{
        $msg = validetion("You are entering the wrong password! " , "danger");
        formClear();
    }
}



?>
<!-- Sign Up Start -->
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form method="POST" action="sign_up.php" enctype="multipart/form-data">
                        <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <?php echo $msg ?? '' ;?>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <a href="index.php" class="navbar-brand mx-4 mb-3">
                                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Nahian Corp.</h3>
                                </a>
                                <h3>Sign Up</h3>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingName" name="name">
                                <label for="floatingText">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingUsername" name="user_name">
                                <label for="floatingText">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingEmail" name="email">
                                <label for="floatingText">email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="confirmPassword">
                                <label for="confirmPassword">Confirm Password</label>
                            </div>
                            <div class="input-group mb-2">
                                <img id="preload" style="max-width: 100%;" src="<?php ?>"  alt="">
                                <br>
                                <br>
                                <input style="display:none;" name="photo" id="photo" class="btn btn-info" type="file">
                                <label for="photo"><img src="image/document_favcon.png" alt="" style="height: 100px; width:100px;"></label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="agree" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">agree</label>
                                </div>
                            </div>
                            <button type="submit" name="signUp" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>

                            <p class="text-center mb-0">Already have an Account? <a href="login.php">Sign In</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->

        <!-- users id start -->



        <!-- users id End -->

        <?php @include('footer');?>
