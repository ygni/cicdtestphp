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

    // 아이디 중복 검사
    $sql = "SELECT * FROM blogin WHERE login_id='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "이미 사용 중인 아이디입니다.";
        header("location: membership.php");
        exit();
    }

    // 데이터베이스에 회원 정보 저장
    $sql = "INSERT INTO blogin (login_id, login_pw) VALUES ('$username', '$password')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        $_SESSION["username"] = $username;
        header("location: welcome.php");
        exit();
    } else {
        $_SESSION['error'] = "회원가입에 실패했습니다." . mysqli_error($conn);
        header("location: membership.php");
        exit();
    }

    $conn->close();
?>
