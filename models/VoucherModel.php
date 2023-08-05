<?php
// models/VoucherModel.php

require_once 'config/Database.php';


class VoucherModel
{
    // ... (existing functions)

    // Function to update a voucher
    public function updateVoucher($voucherId, $code, $discount, $startDate, $endDate)
    {
        // ... (add code to update the voucher in the database)
    }

    // Function to delete a voucher
    public function deleteVoucher($voucherId)
    {
        // ... (add code to delete the voucher from the database)
    }

    // Function to get all vouchers
    public function getAllVouchers()
    {
        // ... (add code to fetch all vouchers from the database)
    }

    public function insertVoucher($code, $discount, $startDate, $endDate)
    {
        // ... (add code to update the voucher in the database)
    }

    public function getVoucherById($voucherId)
    {
        // ... (add code to fetch all vouchers from the database)
    }
}
