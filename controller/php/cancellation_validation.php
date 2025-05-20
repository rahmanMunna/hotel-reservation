<?php
if (isset($_POST['submit'])) {
    $cancellationDate = $_POST['cancellation-date'];
    $reason = $_POST['reason-for-cancellation'];

    $isValid = true;
    if(empty($cancellationDate) || empty($reason)){
        $isValid = false;
    }

    if($isValid){
        header("Location: ../../View/successful_alert.php");
    }else{
        echo "Fill all the  field";
    }
}
