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
    if (isset($_SESSION['login'])) {
        if ($_SESSION['login'] == false) {
            header("Location: login.php");
            return false;
        }
    } else {
        header("Location: login.php");
        return false;
    }

    global $conn;

    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $qty_barang = $_POST['qty_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $id_supplier = $_POST['id_supplier'];
    $keterangan = $_POST['keterangan'];
    $query = "INSERT INTO barang (id_barang, nama_barang, qty_barang, harga_barang, jenis_barang, id_supplier, keterangan) VALUES ('$id_barang', '$nama_barang', '$qty_barang', '$harga_barang', '$jenis_barang', '$id_supplier', '$keterangan')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: dashboard.php");
    } else {
        echo "Gagal menambahkan data";
    }
}

function updateBarang()
{
    if (isset($_SESSION['login'])) {
        if ($_SESSION['login'] == false) {
            header("Location: login.php");
            return false;
        }
    } else {
        header("Location: login.php");
        return false;
    }

    global $conn;

    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $qty_barang = $_POST['qty_barang'];
    $harga_barang = $_POST['harga_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $id_supplier = $_POST['id_supplier'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE barang SET nama_barang = '$nama_barang', qty_barang = '$qty_barang', harga_barang = '$harga_barang', jenis_barang = '$jenis_barang', id_supplier = '$id_supplier', keterangan = '$keterangan' WHERE id_barang = $id_barang";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: dashboard.php");
    } else {
        echo "Gagal menambahkan data";
    }

}

function login()
{
    global $conn;

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['passwords'];

        $result = mysqli_query($conn, "SELECT * from pengguna WHERE email='$email' and passwords ='$password'");
        $check = mysqli_num_rows($result);

        if ($check > 0) {
            $data = mysqli_fetch_array($result);
            $role = $data['role'];

            if ($role == 'admin') {
                $_SESSION['log'] = 'Logged';
                $_SESSION['role'] = 'admin';
                echo "<script>
                    alert('login admin berhasil );
                     document.location='dash.php';
                    </script>";

            } else {
                $_SESSION['log'] = 'Logged';
                $_SESSION['role'] = 'user';

                echo "<script>
                    alert('login user berhasil );
                     document.location='index.php';
                    </script>";
            }
        } else {

            echo "<script>
            alert('login gagal : username dan password salah');
            document.location='login.php';
            </script>";
        }
        return false;
    }
}
?>