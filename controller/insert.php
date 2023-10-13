<?php

class Insert extends Main_controller
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
    if (isset($_SESSION['users'])) {
      $this->load_views('insert');
    } else {
      header("Location: " . $this->base_url('halaman'));
      exit;
    }
  }

  public function store()
  {
    if (!empty($_POST)) {
      $nama = $_POST['name'];
      $harga = $_POST['harga'];
      $deskripsi = $_POST['deskripsi'];
      if (isset($_FILES["file_gambar"])) {
        $file = $_FILES["file_gambar"];
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
          mkdir($targetDir, 0755, true);
        }
        $ext = explode('.', $_FILES["file_gambar"]['name']);
        $newName = uniqid() . '.' . $ext[count($ext) - 1];
        $targetFile = $targetDir . $newName;

        // Move the file to the specified directory
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
          $sql = "INSERT INTO product (nama, harga, deskripsi, file)
                VALUES ('$nama', '$harga', '$deskripsi', '$newName')";
          if ($this->conn->query($sql) === true) {
            header("Location: " . $this->base_url('halaman'));
            exit;
          } else {
            header("Location: " . $this->base_url('insert'));
            exit;
          }
        } else {
          echo "Error uploading the file.";
        }
      }
    }
  }
}
