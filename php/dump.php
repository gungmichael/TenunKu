<?php
function login()
{
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

function adminLogin()
{
    global $conn;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM admins WHERE email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['adminLogin'] = true;
            header("Location: dash.php");
            exit;
        }
    }
    return false;
}

function logoutAdmin()
{
    session_destroy();
    header("Location: admin_login.php");
    exit;
}

if ($_SESSION['login'] == false && isset($_SESSION['login'])) {
    header("Location: login.php");
}

if (isset($_GET['id'])) {
    header("Location: index.php");
}

if ($check > 0) {
    $data = mysqli_fetch_assoc($result);
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
}

if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == false) {
        header("Location: login.php");
    }
} else {
    header("Location: login.php");
}

if (isset($_POST['logout'])) {
    logout();
}

?>