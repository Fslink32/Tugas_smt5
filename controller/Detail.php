<?php

class Detail extends Main_controller
{
  private $conn;
  public function __construct()
  {
    parent::__construct();
    $db = new Database_conn();
    $this->conn = $db->getConnection();
  }
  public function product($id)
  {
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $result = $this->conn->query($sql);
    $row = $result->fetch_assoc();
    if ($row) {
      $data['data'] = $row;
      $this->load_views('detail', $data);
    } else {
      header("Location: " . $this->base_url('halaman'));
      exit;
    }
  }
}
