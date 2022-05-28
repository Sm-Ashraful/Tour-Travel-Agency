<?php
  class Customer {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addCustomer($data) {
      // Prepare Query
      $this->db->query('INSERT INTO customers (id, first_name, last_name, email, destination, no_of_member, arrival_date, leaving_date) VALUES(:id, :first_name, :last_name, :email, :destination, :no_of_member, :arrival_date, :leaving_date)');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':destination', $data['destination']);
      $this->db->bind(':no_of_member', $data['no_of_member']);
      $this->db->bind(':arrival_date', $data['arrival_date']);
      $this->db->bind(':leaving_date', $data['leaving_date']);

      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getCustomers() {
      $this->db->query('SELECT * FROM customers ORDER BY created_at DESC');

      $results = $this->db->resultset();

      return $results;
    }
  }