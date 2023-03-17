<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: welcome.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        h1 {
            color: #333333;
            margin-top: 50px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 10px;
            background-color: #3366cc;
            color: #ffffff;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }
        .btn:hover {
            background-color: #004e99;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>테스트 index 페이지입니다.</h1>
        <a class="btn" href="login.php">로그인</a>
        <a class="btn" href="membership.php">회원가입</a>
    </div>
</body>
</html>
