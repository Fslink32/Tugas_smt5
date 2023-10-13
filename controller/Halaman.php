<?php

class Halaman extends Main_controller
{
  private $conn;
  public function __construct()
  {
    parent::__construct();
    $db = new Database_conn();
    $this->conn = $db->getConnection();
  }
  public function index()
  {
    $sql = "SELECT * FROM product";
    $result = $this->conn->query($sql);
    $data = [];
    if ($result) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      $result->free();
    }
    $data['data'] = $data;
    $this->load_views('halaman', $data);
  }
}
