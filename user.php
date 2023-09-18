<?php
include 'config/config.php';
$error = array();
$succses = array();
$warning = array();
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email =  mysqli_real_escape_string($conn, $_POST['email']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    $user_type =  mysqli_real_escape_string($conn, $_POST['user_type']);
    $contact =  mysqli_real_escape_string($conn, $_POST['contact']);
    // $image = $_POST['image'];
    $pass_hach = password_hash($password, PASSWORD_DEFAULT);

    if (empty($name)) {
        $error['$name'] = "Please Fill Name";
    }
    if (empty($email)) {
        $error['$email'] = "Please Fill Email";
    }
    if (empty($password)) {
        $error['$password'] = "Please Fill Passwrod";
    }
    if (empty($user_type)) {
        $error['$user_type'] = "Please Fill User Type";
    }
    if (empty($contact)) {
        $error['$contact'] = "Please Fill Contact";
    } else {

        $select = "SELECT * FROM admin_users WHERE user_email='$email' ";
        $sql = mysqli_query($conn, $select);
        $sql_num = mysqli_num_rows($sql);
        if ($sql_num > 0) {
            $warning['warning'] = 'user already exists';
        } else {

            $insert = "INSERT INTO admin_users(`userfullname` , `user_email` ,`user_password` ,`user_type` ,`user_contact` ,`registered_on`)
            VALUES('$name' , '$email', '$pass_hach', '$user_type', '$contact', NOW())";

            $in_sql = mysqli_query($conn, $insert);
            if ($in_sql) {
                $succses['succses'] = 'insert your data';
            } else {
                echo "not insert data";
            }
        }
    }
}


?>

<?php
include "./includes/header.php";
include "./includes/navbar.php";
include "./includes/sidebar.php";
?>
<div class="container-fluid">
    <?php if (isset($succses['succses'])) echo $succses['succses']; ?>
    <?php if (isset($warning['warning'])) echo $warning['warning']; ?>
    <div class="card  my-5 mein-card mb-5">
        <h3 class=" font-inter text-center">Add New User</h3>
        <div class="container-fluid course-card">
            <div class="row my-5 ">
                <div class="col-lg-6">
                    <form action="" method="post">
                        <!-- <div class="in py-3">
                                            <input type="date" class=" input w-100 py-2 mt-3" placeholder="Date">
                                        </div> -->

                        <div class="in">
                            <input type="text" name="name" class=" input w-100 py-2 mt-3" placeholder="User Name">
                            <span class='fw-bold text-danger '><?php if (isset($error['$name'])) {
                                                                    echo $error['$name'];
                                                                } ?></span>
                        </div>

                        <div class="in">
                            <input type="email" name="email" class=" input w-100 py-2 mt-3" placeholder="User Email">
                            <span class='fw-bold text-danger '><?php if (isset($error['$email'])) {
                                                                    echo $error['$email'];
                                                                } ?></span>
                        </div>
                        <div class="in">
                            <input type="password" name="password" class=" input w-100 py-2 mt-3" placeholder="Passwrod ">
                            <span class='fw-bold text-danger '><?php if (isset($error['$password'])) {
                                                                    echo $error['$password'];
                                                                } ?></span>
                        </div>
                </div>
                <div class="col-lg-6">
                    <select name="user_type" class="input  py-2 mt-3 w-100">
                        <option value="" selected> User Type</option>
                        <option value="Admin"> Admin</option>
                        <!-- <option value="Course type w-100 ">Admin</option>
                                        <option value="Course type w-100 "> Admin</option> -->
                        <span class='fw-bold text-danger '><?php if (isset($error['$user_type'])) {
                                                                echo $error['$user_type'];
                                                            } ?></span>
                    </select>

                    <div class="in">
                        <input type="text" name="contact" class=" input w-100 py-2 mt-3" placeholder="Contact ">
                        <span class='fw-bold text-danger '><?php if (isset($error['$contact'])) {
                                                                echo $error['$contact'];
                                                            } ?></span>
                    </div>
                    <!-- <div class="in">
                                        <input type="file" name="image" class=" input w-100 py-2 mt-3" placeholder="Image ">
                                        
                                    </div> -->
                </div>


                <button type="submit" name="submit" class="save py-2">Save</button>
                </form>

            </div>
        </div>



    </div>
</div>

<?php
include "./includes/footer.php";

?>