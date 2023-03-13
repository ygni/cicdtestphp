<?php
// 현재 세션 시작
session_start();

// 로그인이 되어있지 않으면 로그인 페이지로 이동
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}

// 로그아웃 버튼 클릭 시 세션 삭제 후 로그인 페이지로 이동
if(isset($_POST["logout"])){
    // 현재 세션 삭제
    session_unset();
    session_destroy();
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-size: 3rem;
            text-align: center;
            margin-top: 50px;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            font-size: 1rem;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>
</html>
