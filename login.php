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
    <title>로그인</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            color: #333333;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px #c2c2c2;
            margin: auto;
            margin-top: 50px;
            width: 350px;
            padding: 20px;
        }
        .login-form {
            display: flex;
            flex-direction: column;
        }
        .form-label {
            margin-bottom: 5px;
            color: #666666;
        }
        .form-input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #c2c2c2;
            border-radius: 3px;
            font-size: 16px;
        }
        .form-submit {
            background-color: #333333;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-submit:hover {
            background-color: #444444;
        }
        .form-link {
            text-align: center;
            margin-top: 20px;
        }
        .form-link a {
            color: #333333;
            text-decoration: none;
        }
        .form-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>로그인</h1>
    <div class="login-container">
        <?php
            if(isset($_SESSION['error'])){
                echo "<p style='color:red;'>".$_SESSION['error']."</p>";
                unset($_SESSION['error']);
            }
        ?>
        <form class="login-form" method="POST" action="login_process.php">
            <label class="form-label">사용자 이름:</label>
            <input class="form-input" type="text" name="username">
            <label class="form-label">비밀번호:</label>
            <input class="form-input" type="password" name="password">
            <input class="form-submit" type="submit" value="로그인">
        </form>
        <div class="form-link">
            <a href="membership.php">회원가입</a>
        </div>
    </div>
</body>
</html>
