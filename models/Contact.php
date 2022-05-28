<?php
  class Contact {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addContact($data) {
      // Prepare Query
      $this->db->query('INSERT INTO contacts (name, email, phone, subject, message) VALUES(:name, :email, :phone, :subject, :message)');

      // Bind Values
      // $this->db->bind(':id', $data['id']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':subject', $data['subject']);
      $this->db->bind(':message', $data['message']);

      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getContacts() {
      $this->db->query('SELECT * FROM contacts ORDER BY created_at DESC');

      $results = $this->db->resultset();

      return $results;
    }
  }