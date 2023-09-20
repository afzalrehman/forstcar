<?php
include './config/config.php';
require './function/function.inc.php';
session_start();
if (!isset($_SESSION['user_fullname'])) {
    echo "You are logged out";
    header('location:login.php');
}




include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>
<div class="container-fluid ">
    <div class="card mt-5 py-5">
        <div class="row px-5 ">
            <div class="col-lg-6">
                <label for="name" class="form-label fw-semibold">Name:</label>
                <input disabled class="w-100 inputDesign"  placeholder="<?php echo $_SESSION['user_fullname']; ?>">

                <label for="contact" class="form-label fw-semibold mt-3">Contact</label>
                <input   class="w-100 inputDesign" id="contact" name="make" placeholder="make">
                
                <label for="contact" class="form-label fw-semibold mt-3">Contact</label>
                <input   class="w-100 inputDesign" id="contact" name="make" placeholder="make">
            </div>
            <div class="col-lg-6">
                <label for="email" class="form-label fw-semibold ">Email</label>
                <input  disabled class="w-100 inputDesign" id="email"  placeholder="<?php echo $_SESSION['user_email']; ?>">

                <label for="contact" class="form-label fw-semibold mt-3">Contact</label>
                <input   class="w-100 inputDesign" id="contact" name="make" placeholder="make">
            
                <button name="profile_update" class="save py-2 mt-5">Update</button>

                
            </div>
        </div>
    </div>
</div>
<?php
include "./includes/footer.php";
?>