<?php

class Auth extends Main_controller
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
    }

    public function login()
    {
        $username = $_POST['nomor_induk'];
        $password = $_POST['tanggal_lahir'];
        $sql = "SELECT * FROM tabel_admin WHERE nomor_induk = '$username'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        // var_dump($row);
        // exit;
        if ($row) {
            // if ($row['password'] == ($password)) {
            //     $_SESSION['users']['username'] = $row['username'];
            //     $_SESSION['users']['email'] = $row['email'];
            //     $_SESSION['users']['location'] = $row['location'];
            //     $_SESSION['users']['phone'] = $row['phone'];


            //     header("Location: " . $this->base_url('halaman'));
            //     exit;
            // } else {
            //     header("Location: " . $this->base_url('login'));
            //     exit;
            // }
            if ($row['tanggal_lahir'] == md5($password)) {
                $_SESSION['users']['username'] = $row['nomor_induk'];
                $_SESSION['users']['email'] = $row['nama_lengkap'];
                // $_SESSION['users']['location'] = $row['location'];
                // $_SESSION['users']['phone'] = $row['phone'];


                header("Location: " . $this->base_url('halaman'));
                exit;
            } else {
                header("Location: " . $this->base_url('login'));
                exit;
            }
        } else {
            header("Location: " . $this->base_url('login'));
            exit;
        }
    }
    public function register()
    {
        $username = $_POST['nomor_induk'];
        $password = md5($_POST['tanggal_lahir']);
        $nama_lengkap = $_POST['nama_lengkap'];
        $sql = "INSERT INTO tabel_admin (nomor_induk, tanggal_lahir, nama_lengkap)
                VALUES ('$username', '$password', '$nama_lengkap')";
        if ($this->conn->query($sql) === true) {
            header("Location: " . $this->base_url('login'));
            exit;
        } else {
            header("Location: " . $this->base_url('register'));
            exit;
        }
    }
    public function logout()
    {
        session_destroy();
        header("Location: " . $this->base_url('login'));
        exit;
    }
}
