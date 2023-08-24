<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <?php
    require 'config.php';
    $sql = "SELECT * FROM `admin_users`";
    $res = mysqli_query($conn, $sql);
    $html = '<table class="table table-striped table-hover table-bordered border-dark text-center"> 
    <tr>
        <th style="width:200px">User Id</th>
        <th style="width:200px">User Fullname</th>
        <th style="width:200px">User Email</th>
        <th style="width:200px">User Password</th>
        <th style="width:200px">User Type</th>
        <th style="width:200px">User Contact</th>
        <th style="width:200px">User Image</th>
        <th style="width:200px">Registered</th>
        <th style="width:200px">Updated</th>
        <th style="width:200px">Email</th>
        <th style="width:200px">Token</th>
        <th style="width:200px">Reset</th>
        <th style="width:200px">Reset Token</th>
        <th style="width:200px">Is Verified</th>
    </tr>';
    while ($data = mysqli_fetch_assoc($res)) {
        $html .= '<tr style="height:100px">
                    <td>' . $data['user_id'] . '</td>
                    <td>' . $data['user_fullname'] . '</td>
                    <td>' . $data['user_email'] . '</td>
                    <td>' . $data['user_password'] . '</td>
                    <td>' . $data['user_type'] . '</td>
                    <td>' . $data['user_contact'] . '</td>
                    <td>' . $data['user_image'] . '</td>
                    <td>' . $data['registered_on'] . '</td>
                    <td>' . $data['updated_on'] . '</td>
                    <td>' . $data['email_verfied_at'] . '</td>
                    <td>' . $data['token'] . '</td>
                    <td>' . $data['reset_expiration'] . '</td>
                    <td>' . $data['reset_token'] . '</td>
                    <td>' . $data['is_verified'] . '</td>
                </tr>';
    }

    $html .= '</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attatchment;filename=student.xls');
    echo $html;



    // echo $html;
    ?>

    </table>


</body>

</html>