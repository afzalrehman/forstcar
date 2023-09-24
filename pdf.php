<?php
include './config/config.php';
require './function/function.inc.php';
session_start();


include "./includes/header.php";


if (isset($_GET['model'])) {
    $model_num = $_GET['model'];
    $select_modal =  modal_chack("unit_details", "$model_num");
    if(mysqli_num_rows($select_modal)> 0){
        $fach = mysqli_fetch_array($select_modal);

     $year = $fach['year'] ;
     $model = $fach['model'] ;
     $wheelbase = $fach['wheelbase'] ;
     $vin = $fach['vin'] ;
     $contact_Name = $fach['contact_Name'] ;
     $contact_Num = $fach['contact_Num'] ;
     $fc_Unit_Cost = $fach['fc_Unit_Cost'] ;
     $fc_Body = $fach['fc_Body'] ;
     $body_Weight = $fach['body_Weight'] ;
     $fc_Model = $fach['fc_Model'] ;
     $exterior_Dimension = $fach['exterior_Dimension'] ;
     $compressor = $fach['compressor'] ;
     $comp_Serial = $fach['comp_Serial'] ;
     $voltage = $fach['voltage'] ;
     $sound_Decibel = $fach['sound_Decibel'] ;
     $current_FLA = $fach['current_FLA'] ;
     $refrigerant = $fach['refrigerant'] ;
     $condenser = $fach['condenser'] ;
     $solenoid = $fach['solenoid'] ;
     $condenser_Fan = $fach['condenser_Fan'] ;
     $interior_Lights = $fach['interior_Lights'] ;
     $control_Panel = $fach['control_Panel'] ;
     $circuit_Breaker = $fach['circuit_Breaker'] ;
     $electric_Contactor = $fach['electric_Contactor'] ;
     $part = $fach['part'] ;
     $eutectic_Plate = $fach['eutectic_Plate'] ;
     $expansion_Valve = $fach['expansion_Valve'] ;
     $recovery_Tank = $fach['recovery_Tank'] ;
     $pressure_Control = $fach['pressure_Control'] ;
     $sight_Glass = $fach['sight_Glass'] ;
     $filter_Drier = $fach['filter_Drier'] ;
     $thermostat = $fach['thermostat'] ;
     $misc = $fach['misc'] ;
    $fron_image = $fach['front_S_Image'] ;
    $back_S_Image = $fach['back_S_Image'] ;
    $left_S_Image = $fach['left_S_Image'] ;
    $right_S_Image = $fach['right_S_Image'] ;
 

 
    }
} else {
    echo "Something Went Wrong";
}

?>
<div class="container-fluid ">
    <div class="card border-0 shadow mt-5 py-5">
        <div class="row px-5">
            <div class="col-9">
                <h3 class="mb-5">COMPANY DETAILS</h3>
            </div>
            <div class="col-3 text-end">

                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="">Company Name:</label>
                    <div class="card py-3">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow mt-5 py-5">
        <div class="row px-5">
            <div class="col-9">
                <h3 class="mb-5">TRUCK DETAILS</h3>
            </div>
            <div class="col-3 text-end">
                <button class="btn btn-primary">Edit</button>
            </div>
        </div>
        <div class="row px-5">
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Year:</label>
                    <div class=" pt-2">
                        <p><?=$year ?><?php if (empty($year)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Modal:</label>
                    <div class="pt-2">
                        <p><?=$model ?><?php if (empty($model)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Wheelbase:</label>
                    <div class="pt-2">
                        <p><?=$wheelbase ?><?php if (empty($wheelbase)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Vin #:</label>
                    <div class="pt-2">
                        <p><?=$vin ?><?php if (empty($vin)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Contact Name:</label>
                    <div class="pt-2">
                        <p><?=$contact_Name ?><?php if (empty($contact_Name)){echo "------";}?></p>
                    </div>
                </div>
               <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Contact #:</label>
                    <div class="pt-2">
                        <p><?=$contact_Num ?><?php if (empty($contact_Num)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Frost Car unit Cost:</label>
                    <div class="pt-2">
                        <p><?=$fc_Unit_Cost ?><?php if (empty($fc_Unit_Cost)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">FC Body:</label>
                    <div class="pt-2">
                        <p><?=$fc_Body ?><?php if (empty($fc_Body)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Body Weight:</label>
                    <div class="pt-2">
                        <p><?=$body_Weight ?><?php if (empty($body_Weight)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">FC Model:</label>
                    <div class="pt-2">
                        <p><?=$fc_Model ?><?php if (empty($fc_Model)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Exterior Dimension:</label>
                    <div class="pt-2">
                        <p><?=$exterior_Dimension ?><?php if (empty($exterior_Dimension)){echo "------";}?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Compressor:</label>
                    <div class="pt-2">
                        <p><?=$compressor ?><?php if (empty($compressor)){echo "------";}?></p>
                    </div>
                </div>
               <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Comp.Serial:</label>
                    <div class="pt-2">
                        <p><?=$comp_Serial ?><?php if (empty($comp_Serial)){echo "------";}?></p>
                    </div>
                </div>
               <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Voltage:</label>
                    <div class="pt-2">
                        <p><?=$voltage ?><?php if (empty($voltage)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Sound Decibel:</label>
                    <div class="pt-2">
                        <p><?=$sound_Decibel ?><?php if (empty($sound_Decibel)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Current FLA:</label>
                    <div class="pt-2">
                        <p><?=$current_FLA ?><?php if (empty($current_FLA)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Refrigerant:</label>
                    <div class="pt-2">
                        <p><?=$refrigerant ?><?php if (empty($refrigerant)){echo "------";}?></p>
                    </div>
                </div>
               <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Condenser:</label>
                    <div class="pt-2">
                        <p><?=$condenser ?><?php if (empty($condenser)){echo "------";}?></p>
                    </div>
                </div>
               <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Solenoid:</label>
                    <div class="pt-2">
                        <p><?=$solenoid ?><?php if (empty($solenoid)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Condenser Fan:</label>
                    <div class="pt-2">
                        <p><?=$condenser_Fan ?><?php if (empty($condenser_Fan)){echo "------";}?></p>
                    </div>
                </div>
               <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Interior Lights:</label>
                    <div class="pt-2">
                        <p><?=$interior_Lights ?><?php if (empty($interior_Lights)){echo "------";}?></p>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Control Panel:</label>
                    <div class="pt-2">
                        <p><?=$control_Panel ?><?php if (empty($control_Panel)){echo "------";}?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
               
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Circuit Breaker:</label>
                    <div class="pt-2">
                        <p><?=$circuit_Breaker ?><?php if (empty($circuit_Breaker)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Electric Contactor:</label>
                    <div class="pt-2">
                        <p><?=$electric_Contactor ?><?php if (empty($electric_Contactor)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Part #:</label>
                    <div class="pt-2">
                        <p><?=$part?><?php if (empty($part)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Eutectic Plate:</label>
                    <div class="pt-2">
                        <p><?=$eutectic_Plate ?><?php if (empty($eutectic_Plate)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Expansion Valve:</label>
                    <div class="pt-2">
                        <p><?=$expansion_Valve ?><?php if (empty($expansion_Valve)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Recovery Tank:</label>
                    <div class="pt-2">
                        <p><?=$recovery_Tank ?><?php if (empty($recovery_Tank)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Pressure Control:</label>
                    <div class="pt-2">
                        <p><?=$pressure_Control ?><?php if (empty($pressure_Control)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Sight Glass:</label>
                    <div class="pt-2">
                        <p><?=$sight_Glass ?><?php if (empty($sight_Glass)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Filter Drier:</label>
                    <div class="pt-2">
                        <p><?=$filter_Drier ?><?php if (empty($filter_Drier)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="" class="fw-bold text-muted">Thermostat:</label>
                    <div class="pt-2">
                        <p><?=$thermostat?><?php if (empty($thermostat)){echo "------";}?></p>
                    </div>
                </div>
                <div class="mb-4 ">
                    <label for="" class="fw-bold text-muted">Misc:</label>
                    <div class="pt-2">
                        <p><?=$misc ?><?php if (empty($misc)){echo "------";}?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow mt-5 py-5">
        <div class="row px-5 ">
            <h3 class="mb-3">IMAGE TRUCK</h3>
            <div class="row">
                <div class="col-lg-3 my-3 ">
                    <div class="card">
                        <img src="./media/car_images/<?=  $fron_image?>" class="" height="200px" alt="<?php if(empty($fron_image)){echo "Image not Upload";} else{echo "Truck Front Side Image";}?>">
                        <div class="card-footer bg-primary text-center ">
                            <p class="text-light fw-bold">Truck Front Side Image</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 ">
                    <div class="card">
                        <img src="./media/car_images/<?=  $back_S_Image ?>" height="200px" class="" alt="<?php if(empty($back_S_Image)){echo "Image not Upload";} else{echo "Truck Back Side Image";}?>">
                        <div class="card-footer bg-primary text-center ">
                            <p class="text-light fw-bold">Truck Back Side Image</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 ">
                    <div class="card">
                        <img src="./media/car_images/<?=$left_S_Image ?>"height="200px" class="" alt="<?php if(empty($left_S_Image)){echo "Image not Upload";} else{echo "Truck Left Side Image";}?>">
                        <div class="card-footer bg-primary text-center ">
                            <p class="text-light fw-bold"> Truck Left Side Image</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 ">
                    <div class="card">
                        <img src="./media/car_images/<?=$right_S_Image ?>"height="200px" class="" alt="<?php if(empty($right_S_Image)){echo "Image not Upload";} else{echo "Truck Right Side Image";}?>">
                        <div class="card-footer bg-primary text-center ">
                            <p class="text-light fw-bold">Truck Right Side Image</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "./includes/footer.php";
?>