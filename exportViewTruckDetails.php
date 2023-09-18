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
    require './config/config.php';
    $sql = "SELECT * FROM `body_details`
        INNER JOIN `eutectic_details` ON body_details.model_no = eutectic_details.model_no";
    $res = $conn->query($sql);
    $html = '<table class="table table-striped table-hover table-bordered border-dark text-center"> 
    <tr>
        <th style="width:200px">body_id</th>
        <th style="width:200px">model_no</th>
        <th style="width:200px">year</th>
        <th style="width:200px">fc_body</th>
        <th style="width:200px">body_length</th>
        <th style="width:200px">body_dimension</th>
        <th style="width:200px">body_side_door</th>
        <th style="width:200px">body_rear_door</th>
        <th style="width:200px">body_weight</th>
        <th style="width:200px">body_volume</th>
        <th style="width:200px">body_temp</th>
        <th style="width:200px">floor</th>
        <th style="width:200px">e_track</th>
        <th style="width:200px">e_plate</th>
        <th style="width:200px">body_accessories</th>
        <th style="width:200px">gvwr</th>
        <th style="width:200px">wbl</th>
        <th style="width:200px">cal</th>
        <th style="width:200px">no_of_units</th>
        <th style="width:200px">manufactured_on</th>
        <th style="width:200px">chassis_frame</th>
        <th style="width:200px">cost_quoted</th>
        <th style="width:200px">misc</th>
        <th style="width:200px">eutectic_plates</th>
        <th style="width:200px">refrigeration</th>
        <th style="width:200px">additional_details</th>
        <th style="width:200px">special_requirements</th>
        <th style="width:200px">fuel_Type</th>
        <th style="width:200px">unit_Custom</th>
        <th style="width:200px">added_on</th>
        <th style="width:200px">added_by</th>
        <th style="width:200px">updated_on</th>
        <th style="width:200px">updated_by</th>
        <th style="width:200px">condensor</th>
        <th style="width:200px">condensor_unit</th>
        <th style="width:200px">power</th>
        <th style="width:200px">refrigerant</th>
        <th style="width:200px">compressor</th>
        <th style="width:200px">volt</th>
        <th style="width:200px">co2_eq</th>
        <th style="width:200px">press_max</th>
        <th style="width:200px">decible</th>
        <th style="width:200px">production_date</th>
        <th style="width:200px">model_no</th>
        <th style="width:200px">GWP</th>
        <th style="width:200px">KG/LB</th>
        <th style="width:200px">oil</th>
        <th style="width:200px">pressmen</th>
        <th style="width:200px">export</th>
        <th style="width:200px">disp_m3/h</th>
        <th style="width:200px">moA/Amp</th>
        <th style="width:200px">Mcc/Amp</th>
        <th style="width:200px">LRA/Amp</th>
        <th style="width:200px">MRA/Amp</th>
        <th style="width:200px">RLAA/Amp</th>
        
    </tr>';
    $no = 1;
    while ($data = mysqli_fetch_assoc($res)) {
        $html .= '<tr style="height:100px">
                    <td>' . $no . '</td>
                    <td>' . $data['model_no'] . '</td>
                    <td>' . $data['year'] . '</td>
                    <td>' . $data['fc_body'] . '</td>
                    <td>' . $data['body_length'] . '</td>
                    <td>' . $data['body_dimension'] . '</td>
                    <td>' . $data['body_side_door'] . '</td>
                    <td>' . $data['body_rear_door'] . '</td>
                    <td>' . $data['body_weight'] . '</td>
                    <td>' . $data['body_volume'] . '</td>
                    <td>' . $data['body_temp'] . '</td>
                    <td>' . $data['floor'] . '</td>
                    <td>' . $data['e_track'] . '</td>
                    <td>' . $data['e_plate'] . '</td>
                    <td>' . $data['body_accessories'] . '</td>
                    <td>' . $data['gvwr'] . '</td>
                    <td>' . $data['wbl'] . '</td>
                    <td>' . $data['cal'] . '</td>
                    <td>' . $data['no_of_units'] . '</td>
                    <td>' . $data['manufactured_on'] . '</td>
                    <td>' . $data['chassis_frame'] . '</td>
                    <td>' . $data['cost_quoted'] . '</td>
                    <td>' . $data['misc'] . '</td>
                    <td>' . $data['eutectic_plates'] . '</td>
                    <td>' . $data['refrigeration'] . '</td>
                    <td>' . $data['additional_details'] . '</td>
                    <td>' . $data['special_requirements'] . '</td>
                    <td>' . $data['fuel_Type'] . '</td>
                    <td>' . $data['unit_Custom'] . '</td>
                    <td>' . $data['added_on'] . '</td>
                    <td>' . $data['added_by'] . '</td>
                    <td>' . $data['updated_on'] . '</td>
                    <td>' . $data['updated_by'] . '</td>
                    <td>' . $data['condensor'] . '</td>
                    <td>' . $data['condensor_unit'] . '</td>
                    <td>' . $data['power'] . '</td>
                    <td>' . $data['refrigerant'] . '</td>
                    <td>' . $data['compressor'] . '</td>
                    <td>' . $data['volt'] . '</td>
                    <td>' . $data['co2_eq'] . '</td>
                    <td>' . $data['press_max'] . '</td>
                    <td>' . $data['decible'] . '</td>
                    <td>' . $data['production_date'] . '</td>
                    <td>' . $data['model_no'] . '</td>
                    <td>' . $data['GWP'] . '</td>
                    <td>' . $data['KG/LB'] . '</td>
                    <td>' . $data['oil'] . '</td>
                    <td>' . $data['pressmen'] . '</td>
                    <td>' . $data['export'] . '</td>
                    <td>' . $data['disp_m3/h'] . '</td>
                    <td>' . $data['moA/Amp'] . '</td>
                    <td>' . $data['Mcc/Amp'] . '</td>
                    <td>' . $data['LRA/Amp'] . '</td>
                    <td>' . $data['MRA/Amp'] . '</td>
                    <td>' . $data['RLAA/Amp'] . '</td>
                </tr>';
        $no = $no + 1;
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