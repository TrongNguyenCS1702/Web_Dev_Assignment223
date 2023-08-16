<?php

if (isset($_POST['voucher'])) {
  $voucher = $_POST['voucher'];
  $voucherMode = new VoucherModel();
  $result = $voucherMode->getVoucherBycode($voucher);
  if(isset($result)){
    $_SESSION['voucher'] = $result;
    echo true;
  }else{
    unset($_SESSION['voucher']);
    echo false;
  }

}
?>