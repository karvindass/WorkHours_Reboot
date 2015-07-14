<?php

session_start();

$error = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = 'Username or Password is invalid';
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        include 'connectdb.php';

        $query = "SELECT username, authvalue, firstname, lastname FROM accounts WHERE username=? AND password=?";
        $stmt = $link->prepare($query);
        $stmt->bind_param("ss", $val1, $val2);

        $val1 = $username;
        $val2 = $password;

        $stmt->execute();
        $stmt->store_result();

//        $stmt->bind_result($uname, $aval);
//        $result = $stmt->get_result();
        $rows = $stmt->num_rows;

//        check if result exists
//        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['login_user'] = $username;
//            while ($row = mysqli_fetch_array($result)) {
//                $_SESSION['login_firstname'] = $row['firstname'];
//                $_SESSION['login_lastname'] = $row['lastname'];
//            }
            header("Location: ../../Dashboard");
        } else {
            $error = 'Username or Password is invalid';
        }
    }
}
echo $error;
?>