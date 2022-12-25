<?php
include "config.php";

function logout()
{
    session_destroy();
    header("Location: login.php");
    exit;
}

function register()
{
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

    $query = "INSERT INTO user VALUES (null, '2', '$username', '$password', '$email', '$nama')";
    $resultUser = mysqli_query($conn, $query);

    if ($resultUser) {
        header("Location: login.php");
    } else {
        echo "Gagal menambahkan data";
    }
}

function getItems()
{
    global $conn;

    $query = "SELECT * FROM barang";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    if ($result) {
        return $rows;
    } else {
        return false;
    }
}

function getItemsbyID($id_barang)
{
    global $conn;

    $id_barang = $_GET['id'];
    $query = "SELECT * FROM barang WHERE id_barang = '$id_barang'";
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

    global $conn;

    if (isset($_POST['nama_barang'])) {
        $nama_barang = $_POST['nama_barang'];
        $qty_barang = $_POST['qty_barang'];
        $harga_barang = $_POST['harga_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $id_supplier = $_POST['id_supplier'];
        $keterangan = $_POST['keterangan'];
        $query = mysqli_query($conn, "INSERT INTO barang (nama_barang, qty_barang, harga_barang, jenis_barang, id_supplier, keterangan) VALUES ('$nama_barang', '$qty_barang', '$harga_barang', '$jenis_barang', '$id_supplier', '$keterangan')");

        if ($query) {
            header("Location: dash.php");
        } else {
            echo "Gagal menambahkan data";
        }
    }
}

function updateBarang()
{

    global $conn;

    $id_barang = $_GET['id'];
    $query = "SELECT * from 'barang' WHERE id_barang = '$id_barang'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $nama_barang = $row['nama_barang'];
    $qty_barang = $row['qty_barang'];
    $harga_barang = $row['harga_barang'];
    $jenis_barang = $row['jenis_barang'];
    $id_supplier = $row['id_supplier'];
    $keterangan = $row['keterangan'];

    if (isset($_POST['submit'])) {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $qty_barang = $_POST['qty_barang'];
        $harga_barang = $_POST['harga_barang'];
        $jenis_barang = $_POST['jenis_barang'];
        $id_supplier = $_POST['id_supplier'];
        $keterangan = $_POST['keterangan'];

        $query = "UPDATE 'barang' SET 'nama_barang' = '$nama_barang', 'qty_barang' = '$qty_barang', 'harga_barang' = '$harga_barang', 'jenis_barang' = '$jenis_barang', 'id_supplier' = '$id_supplier', 'keterangan' = '$keterangan' WHERE 'id_barang' = '$id_barang'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: dash.php");
        } else {
            echo "Gagal memperbarui data";
        }
    }
}

function login()
{
    global $conn;


    $email = $_POST['email'];
    $password = $_POST['passwords'];

    $result = mysqli_query($conn, "SELECT * from pengguna WHERE email='$email'");
    $check = mysqli_num_rows($result);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['passwords'])) {
            $_SESSION['login'] = true;
            header("Location: dash.php");
            exit;
        }
    }
    return false;
}

function deleteData()
{
    global $conn;
    if (isset($_GET['id']))
        $id_barang = $_GET['id'];
    $query = "DELETE FROM barang WHERE id_barang = '$id_barang'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: dash.php");
    } else {
        echo "Gagal menghapus data";
    }
}
?>