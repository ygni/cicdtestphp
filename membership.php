<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        p {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>회원가입</h1>
    <?php
        if(isset($_SESSION['error'])){
            echo "<p>".$_SESSION['error']."</p>";
            unset($_SESSION['error']);
        }
    ?>
    <form method="POST" action="membership_process.php">
        <label>사용자 이름:</label>
        <input type="text" name="username">
        <label>비밀번호:</label>
        <input type="password" name="password">
        <input type="submit" value="회원가입">
    </form>
</body>
</html>
