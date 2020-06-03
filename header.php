<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
  <title>VintageHouse</title>
</head>
<body>
<header>
  <div class="container">
    <h1><a href="index.php">VintageHouse</a></h1>
    <form action="">
      <input type="text">
      <input type="submit" name="" id="" value="検索" class="submitBtn">
    </form>
    <ul>
      <li class="logIn"><a href="login-input.php">ログイン</a></li>
      <!-- <li class="logOut"><a href="">ログアウト</a></li> -->
      <li><a href="user-input.php"><img src="img/user.png" alt="ユーザー"></a></li>
      <li><a href=""><img src="img/hart.png" alt="ハート"></a></li>
      <li><a href=""><img src="img/cart.png" alt="カート"></a></li>
    </ul>
  </div>
</header>