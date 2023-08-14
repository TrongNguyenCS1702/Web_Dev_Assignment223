<?php
// models/VoucherModel.php

require_once 'config/Database.php';


class VoucherModel
{
    private $db;

    public function __construct()
    {
        // Create a new Database object to establish the connection
        $this->db = new Database();
    }

    public function addVoucher($code, $discount, $startDate, $endDate)
    {
        $query = "INSERT INTO Vouchers (code, discount, start_date, end_date) VALUES (?, ?, ?, ?)";
        $params = [$code, $discount, $startDate, $endDate];
        return $this->db->execute($query, $params);
    }

    // Function to update a voucher
    public function editVoucher($voucher_id, $newCode, $newDiscount, $newStartDate, $newEndDate)
    {
        $query = "UPDATE Vouchers SET code = ?, discount = ?, start_date = ?, end_date = ? WHERE id = ?";
        $params = [$newCode, $newDiscount, $newStartDate, $newEndDate, $voucher_id];
        return $this->db->execute($query, $params);
    }

    // Function to delete a voucher
    public function deleteVoucher($voucher_id)
    {
        $query = "DELETE FROM Vouchers WHERE id = ?";
        $params = [$voucher_id];
        return $this->db->execute($query, $params);
    }

    // Function to get all vouchers
    public function getAllVouchers()
    {

        $query = "SELECT * FROM Vouchers";
        $vouchers = $this->db->fetchAll($query);

        return $vouchers;
    }

    public function updateVoucher($voucher_id, $newCode, $newDiscount, $newStartDate, $newEndDate)
    {
        $query = "UPDATE Vouchers SET code = ?, discount = ?, start_date = ?, end_date = ? WHERE id = ?";
        $params = [$newCode, $newDiscount, $newStartDate, $newEndDate, $voucher_id];
        return $this->db->execute($query, $params);
    }

    public function getVoucherById($voucher_id)
    {
        $query = "SELECT * FROM Vouchers WHERE id = ?";
        $params = [$voucher_id];
        return $this->db->fetchSingle($query, $params);
    }
    public function getVoucherBycode($voucher_code)
    {
        $query = "SELECT * FROM Vouchers WHERE code = ? AND start_date <= ? AND end_date >= ? " ;
        $params = [$voucher_code,date('Y-m-d'),date('Y-m-d')];
        return $this->db->fetchSingle($query, $params);
    }
}
