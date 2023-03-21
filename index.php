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
        .btn {
            background-color: #3366cc;
            color: #ffffff;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }
        .btn:hover {
            background-color: #004e99;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Test Homepage</h1>
        <p class="lead">This is a simple and stylish homepage created for testing purposes.</p>
        <hr class="my-4">
        <p>Please login or sign up to continue.</p>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Log In</h5>
                        <p class="card-text">Already have an account?</p>
                        <a href="login.php" class="btn btn-lg btn-block">Log In</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sign Up</h5>
                        <p class="card-text">Don't have an account yet?</p>
                        <a href="membership.php" class="btn btn-lg btn-block btn-success">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS links (jQuery and Popper.js are required for Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5Kk" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFP
