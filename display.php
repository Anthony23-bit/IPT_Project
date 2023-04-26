<?php
include 'db_conn.php';

if(isset($_POST['displaySend'])){
    $table = '
    <div class="container-fluid">
        div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                        <h3 class="box-title">Driver</h3>
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Driver ID</th>
                                            <th class="border-top-0">Firstname</th>
                                            <th class="border-top-0">Middlename</th>
                                            <th class="border-top-0">Lastname</th>
                                            <th class="border-top-0">Suffix</th>
                                            <th class="border-top-0">Brithday</th>
                                            <th class="border-top-0">Province</th>
                                            <th class="border-top-0">City</th>
                                            <th class="border-top-0">Barangay</th>
                                            <th class="border-top-0">Phone Number</th>
                                            <th class="border-top-0">Email Address</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>';
        $sql = "SELECT * FROM `driver`";
        $result = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['driver_id'];
            $first_name=$row['first_name'];
            $middle_name=$row['middle_name'];
            $last_name=$row['last_name'];
            $suffix=$row['suffix'];
            $birthday=$row['birthday'];
            $barangay=$row['barangay'];
            $city=$row['city'];
            $province=$row['province'];
            $phone_number=$row['phone_number'];
            $email_address=$row['email_address'];
            $table.='<tr>
                <td>'.$driver_id.'</td>
                <td>'.$first_name.'</td>
                <td>'.$middle_name.'</td>
                <td>'.$last_name.'</td>
                <td>'.$suffix.'</td>
                <td>'.$birthday.'</td>
                <td>'.$barangay.'</td>
                <td>'.$city.'</td>
                <td>'.$province.'</td>
                <td>'.$phone_number.'</td>
                <td>'.$email_address.'</td>
            </tr>';
        }

        $table.='</table>';
        echo $table;
}

?>