<?php
    session_start();

    $host = "localhost";
    $username = "root";
    $password = ""; // 실제 패스워드로 대체해야 합니다.
    $dbname = "idp";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM blogin WHERE login_id='$username' AND login_pw='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["username"] = $username;
        header("location: welcome.php");
    } else {
        $_SESSION['error'] = "사용자 이름 또는 비밀번호가 잘못되었습니다.";
        header("location: login.php");
    }

    $conn->close();
?>
