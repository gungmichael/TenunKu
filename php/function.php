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
function getUsers()
{
    global $conn;

    $query = "SELECT * FROM login";
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

function getSupplier()
{
    global $conn;

    $query = "SELECT * FROM supplier";
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
function getTenun()
{
    global $conn;

    $query = "SELECT * FROM jenis_barang";
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

function addTenun()
{
    global $conn;

    if (isset($_POST['addPict'])) {
        $pict_tenun = $_POST['pict_tenun'];
        $nama_jenis = $_POST['nama_jenis'];
        $keterangan = $_POST['keterangan'];

        $filename = $_FILES['pictupload']['names'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $rand = crypt($filename, time());
        $filesize = $_FILES['pictupload']['size'];
        $filetype = $_FILES['pictupload']['type'];
        $filetmp = $_FILES['pictupload']['tmp_name'];
        $path = "../img/product/" . $rand . '.' . $ext;
        $pathdb = "product/" . $rand . '.' . $ext;

        if ($filetype == "image/jpg" || $filetype == "image/jpeg" || $filetype == "image/png") {
            if ($filesize <= 10000000) {
                if (move_uploaded_file($filetmp, $path)) {
                    $query = "INSERT INTO jenis_barang (pict_tenun, nama_jenis, keterangan) VALUES ('$pict_tenun', '$nama_jenis', '$keterangan')";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        echo "<br> <meta http-equiv='refresh' content='5; URL=tenundata.php'> Anda akan kembali ke form dalam beberapa detik";
                    } else {
                        echo "Maaf, terdapat masalah dalam memproses data.";
                        echo "<br> <meta http-equiv='refresh' content='5; URL=tenundata.php'> Anda akan kembali ke form dalam beberapa detik";
                    }
                } else {
                    echo "Maaf, terdapat masalah pada pengunggahan gambar.";
                    echo "<br> <meta http-equiv='refresh' content='5; URL=tenundata.php'> Anda akan kembali ke form dalam beberapa detik";
                }
            } else {
                echo "Maaf, ukuran file yang diunggah tidak lebih dari 10 MB.";
                echo "<br> <meta http-equiv='refresh' content='5; URL=tenundata.php'> Anda akan kembali ke form dalam beberapa detik";
            }
        } else {
            echo "Maaf, format gambar seharusnya adalah JPG, JPEG atau PNG.";
            echo "<br> <meta http-equiv='refresh' content='5; URL=tenundata.php'> Anda akan kembali ke form dalam beberapa detik";
        }
    }
}

function getItemsbyID($id_barang)
{
    global $conn;

    $id_barang = $_GET['id_barang'];
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
        $kode_jenis = $_POST['kode_jenis'];
        $id_supplier = $_POST['id_supplier'];
        $keterangan = $_POST['keterangan'];
        $query = mysqli_query($conn, "INSERT INTO barang (nama_barang, qty_barang, harga_barang, kode_jenis, id_supplier, keterangan) VALUES ('$nama_barang', '$qty_barang', '$harga_barang', '$kode_jenis', '$id_supplier', '$keterangan')");

        if ($query) {
            header("Location: itemsdata.php");
        } else {
            echo "Gagal menambahkan data";
        }
    }
}
function addSuppliers()
{

    global $conn;

    if (isset($_POST['nama_supplier'])) {
        $kode_jenis = $_POST['kode_jenis'];
        $nama_supplier = $_POST['nama_supplier'];
        $no_hp = $_POST['no_hp'];
        $alamat_supplier = $_POST['alamat_supplier'];
        $keterangan = $_POST['keterangan'];
        $query = mysqli_query($conn, "INSERT INTO supplier (kode_jenis, nama_supplier, no_hp, alamat_supplier, keterangan) VALUES ('$kode_jenis', '$nama_supplier', '$no_hp', '$alamat_supplier', '$keterangan')");

        if ($query) {
            header("Location: suppliersdata.php");
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
    $kode_jenis = $row['kode_jenis'];
    $id_supplier = $row['id_supplier'];
    $keterangan = $row['keterangan'];

    if (isset($_POST['submit'])) {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $qty_barang = $_POST['qty_barang'];
        $harga_barang = $_POST['harga_barang'];
        $kode_jenis = $_POST['kode_jenis'];
        $id_supplier = $_POST['id_supplier'];
        $keterangan = $_POST['keterangan'];

        $query = "UPDATE 'barang' SET 'nama_barang' = '$nama_barang', 'qty_barang' = '$qty_barang', 'harga_barang' = '$harga_barang', 'kode_jenis' = '$kode_jenis', 'id_supplier' = '$id_supplier', 'keterangan' = '$keterangan' WHERE 'id_barang' = '$id_barang'";
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
        header("Location: ../admin/itemsdata.php");
    } else {
        echo "Gagal menghapus data";
    }
}
function deleteDataOnSuppliers()
{
    global $conn;
    if (isset($_GET['id']))
        $id_supplier = $_GET['id'];
    $query = "DELETE FROM supplier WHERE id_supplier = '$id_supplier'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../admin/suppliersdata.php");
    } else {
        echo "Gagal menghapus data";
    }
}
function deleteDataOnUser()
{
    global $conn;
    if (isset($_GET['id']))
        $iduser = $_GET['id'];
    $query = "DELETE FROM login WHERE iduser = '$iduser'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../admin/usersdata.php");
    } else {
        echo "Gagal menghapus data";
    }
}
?>