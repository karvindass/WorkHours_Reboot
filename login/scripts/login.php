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

        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);

        $query = "SELECT * FROM accounts WHERE username='" . $username
                . "' AND password='" . $password . "'";
        $result = mysqli_query($link, $query);
        // check if result exists
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['login_user'] = $username;
            while ($row = mysqli_fetch_array($result)) {
                $_SESSION['login_firstname'] = $row['firstname'];
                $_SESSION['login_lastname'] = $row['lastname'];
            }
             header("Location: ../../Dashboard");
        } else {
            $error = 'Username or Password is invalid';
        }
    }
}
echo $error;
?>