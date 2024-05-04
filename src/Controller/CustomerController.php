<?php
require_once __DIR__ . '/../Model/Customers.php';

class CustomerController {
    private $customerModel;

    public function __construct() {
        $this->customerModel = new Customers();
    }

    // Method untuk mendapatkan semua data pelanggan
    public function getAllCustomers() {
        $customers = $this->customerModel->getAllCustomers();
        return $customers;
    }

     // Method untuk mendapatkan data pelanggan berdasarkan ID
    public function getCustomerById($customerId) {
        $customer = $this->customerModel->getCustomerById($customerId);
        return $customer;
    }

     // Method untuk menambahkan data pelanggan

    public function addCustomer($data) {
        $this->customerModel->addCustomer($data);
        return "Customer berhasil ditambahkan";
    }

    // Method untuk memperbarui data pelanggan berdasarkan ID
    public function updateCustomer($customerId, $data) {
        $this->customerModel->updateCustomer($customerId, $data);
        return "Customer berhasil diperbarui";
    }

    // Method untuk menghapus data pelanggan berdasarkan ID
    public function deleteCustomer($customerId) {
        $this->customerModel->deleteCustomer($customerId);
        return "Customer berhasil dihapus";
    }
}
?>
