<?php
include './config/config.php';
require './function/function.inc.php';
session_start();
global $conn;




include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>
<div class="container-fluid ">
    <div class="card mt-3 py-5">
        <h3 class=" font-inter text-center">Edit Profile</h3>
        <div class="row px-5 ">
            <div class="text-center my-3">
                <img class="rounded-circle" height="150" width="150" src="media/user_images/<?php echo $_SESSION['user_image']; ?>" alt="">
            </div>
            <div class="col-lg-6">
                <label for="name" class="form-label fw-semibold">Name:</label>
                <input disabled class="w-100 inputDesign" placeholder="<?php echo $_SESSION['user_fullname']; ?>">

                <label for="user_contact" class="form-label fw-semibold mt-3">Contact Number</label>
                <input type="text" class="w-100 inputDesign" id="user_contact" name="user_contact" placeholder="Contact Number">

            </div>
            <div class="col-lg-6">
                <label for="email" class="form-label fw-semibold ">Email</label>
                <input disabled class="w-100 inputDesign" id="email" placeholder="<?php echo $_SESSION['user_email']; ?>">

                <label for="user_image" class="form-label fw-semibold mt-3">Image</label>
                <input type="file" class="w-100 inputDesign" id="user_image" name="user_image">



            </div>
            <div>
                <button type="submit" name="profile_update" class="save py-2 mt-5">Update</button>
            </div>
        </div>
    </div>
</div>
<?php
include "./includes/footer.php";
?>