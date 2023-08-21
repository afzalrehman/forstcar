<?php

session_start();

require 'db.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "SELECT * FROM registration WHERE email='$email' ";
    $query = mysqli_query($conn, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        ?>
        <script>
            alert("Email already exists");
        </script>
        <?php
    } else {
        if ($password === $cpassword) {

            $insertquery = "INSERT INTO `registration`(`username`, `email`, `mobile`, `password`, `cpassword`) 
            VALUES ('$username','$email','$mobile','$pass','$cpass')";

            $iquery = mysqli_query($conn, $insertquery);
            if ($iquery) {
                ?>
                <script>
                    alert("Inserted Successfully");

                    location.replace("login.php");
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("No Inserted");
                </script>
                <?php
            }


        } else {
            ?>
        <script>
            alert("Password are not matching");
        </script>
        <?php
        }
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- costume css -->
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>

<body>

    <div class="container my-5">
        <h1 class="text-center">Create Acount</h1>
        <h5 class="text-center">Get started with your free acount</h5>

        <div class="row">
            <div class="col-lg-4">

                

                

                <!-- registration -->
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" id="username" name="username" class="form-control" placeholder="User Name"
                            required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address"
                            required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <input type="number" id="mobile" name="mobile" class="form-control" placeholder="Phune Number"
                            required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                            required>
                    </div>

                    <div class="input-group flex-nowrap mb-3">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" id="cpassword" name="cpassword" class="form-control"
                            placeholder="Confirm Password" required>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary btn-lg w-100" value="Create Acount">

                    <p class="text-center my-3">Have an acount? <a href="./login.php" style="text-decoration: none;">Login In</a>
                    </p>

                </form>
            </div>
        </div>

    </div>











    <!-- Bootstrap SJ -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>


</body>

</html>