<?php include_once"header.php";
//User Data Delet 

$delete_id = $_GET['delete_id'] ?? false ;

if( $delete_id ){
    connection() -> query("DELETE FROM users WHERE sl='$delete_id'");
    header('location:users.php');
}


?>

<!-- form start -->
<div class="container-fluid pt-4 px-4">
        <div class="container">
            <a class="btn btn-primary" href="sign_up.php" role="button">Sign Up</a>
        </div>
    </div>
    <!-- form End -->
    <!-- Tabel -->
    <div class="container">
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Select</th>
            <th scope="col">Serial</th>
            <th scope="col">Name</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Account Type</th>
            <th scope="col">Photo</th>
            <th scope="col">Status</th>
            <th scope="col">Registerd Date</th>
            <th scope="col">Confirmed By</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php

            $data = connection() -> query("SELECT * FROM users");
            $sn =1;
            while( $users = $data -> fetch_object())  :

        ?>
        <tr>
            <td> <input class="form-check-input" type="checkbox" value="<?php echo $users -> sl; ?>" id="flexCheckDefault"></td>
            <td><?php echo $sn; $sn++ ;?></td>
            <td><?php echo $users -> name; ?></td>
            <td><?php echo $users -> user_name; ?></td>
            <td><?php echo $users -> email; ?></td>
            <td><?php echo $users -> password; ?></td>
            <td><?php echo $users -> account_type; ?></td>
            <td><img src="image/users/<?php echo $users -> photos; ?>" style="height:80px; width: auto;"></td>
            <td><?php echo $users -> status; ?></td>
            <td><?php echo $users -> registeredDate; ?></td>
            <td><?php echo $users -> confirmed_by; ?></td>
            <td>
                <a class="btn btn-primary" href="single_view.php?edit_id=<?php echo $users -> sl; ?>" name="view_id" role="button">View</a>
                <a class="btn btn-primary" href="edit_form.php?edit_id=<?php echo $users -> sl; ?>" name="edit_id" role="button">Edit</a>
                <a class="btn btn-primary" href="?delete_id=<?php echo $users -> sl; ?>" name="delete_id" role="button">Delete</a>
            </td>
        </tr>

        <?php endwhile; ?>
    </tbody>
    </table>
    <div>
        <a class="btn btn-primary" href="users.php" role="button">Print</a>
    </div>

</div>

<?php include_once"footer.php";?>