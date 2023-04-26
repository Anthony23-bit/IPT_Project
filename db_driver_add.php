<?php include "db_conn.php"?>
<?php
extract($_POST);

if(isset($_POST['fnameSend']) && isset($_POST['mnameSend'])&& isset($_POST['lnameSend'])&& isset($_POST['snameSend'])
&& isset($_POST['birthdaySend']) && isset($_POST['driverIdSend'])&& isset($_POST['provinceSend'])&& isset($_POST['citySend'])
&& isset($_POST['barangaySend'])&& isset($_POST['phoneSend'])&& isset($_POST['emailSend'])){

    $sql = "INSERT INTO `driver`(driver_id,first_name,middle_name,last_name,suffix,birthday,barangay,city,province,phone_number,email_address)
    VALUES ('$driverIdSend','$fnameSend','$mnameSend','$lnameSend','$snameSend','$birthdaySend','$barangaySend','$citySend','$provinceSend',
    '$phoneSend','$emailSend');";

    mysqli_query($conn, $sql);

}
// ADD DATABASE INPUTS
?>