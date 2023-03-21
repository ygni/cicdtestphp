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
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .jumbotron {
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 100px;
            padding-bottom: 100px;
        }
        h1 {
            font-size: 3rem;
            text-align: center;
            margin-top: 50px;
        }
        .btn {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            font-size: 1rem;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }
        .btn:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <h1 class="display-4">Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
        <hr class="my-4">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <button type="submit" class="btn btn-lg">Logout</button>
        </form>
    </div>
    <!-- Bootstrap JS links (jQuery and Popper.js are required for Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5Kk" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare
