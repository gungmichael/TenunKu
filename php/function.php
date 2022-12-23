<?php
include "config.php";

function login(){
    global $conn;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            header("Location: index.php");
            exit;
        }
    }
    return false;
}

function adminLogin(){
    global $conn;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['adminLogin'] = true;
            header("Location: index.php");
            exit;
        }
    }
    return false;
}

function register(){
    global $conn;

    $username = $_POST['username'];
    $nama = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES (null, '$username', '$password', '$email', '$nama')";
    $resultUser = mysqli_query($conn, $query);

    if ($resultUser) {
        header("Location: login.php");
    } else {
        echo "Gagal menambahkan data";
    }
}

function getItems(){
    global $conn;

    $query = "SELECT * FROM barang";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    if($result){
        return $rows;
    } else {
        return false;
    }
}

function getItemsbyID($id_barang){
    global $conn;

    $query = "SELECT * FROM barang WHERE id_barang = $id_barang";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($result) {
        return $row;
    } else {
        return false;
    }
}

function addItems()
{
    if (isset($_SESSION['adminLogin'])) {
        if ($_SESSION['adminLogin'] == false) {
            header("Location: admin_login.php");
            return false;
        }
    } else {
        header("Location: admin_login.php");
        return false;
    }

    global $conn;

    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $qty_barang = $_POST['qty_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $keterangan = $_POST['keterangan'];
    $query = "INSERT INTO barang (id_barang, nama_barang, qty_barang, jenis_barang, keterangan) VALUES ('$id_barang', '$nama_barang', '$qty_barang', '$jenis_barang', '$keterangan')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: dashboard.php");
    } else {
        echo "Gagal menambahkan data";
    }
}
?>