<?php require 'header.php' ;?>
<div class="loginInputPage">
  <div class="container">
    <h2>ログイン</h2>
    <div class="forms">
      <div class="loginForm">
        <h3>ログイン</h3>
        <form action="login-output.php">
          <input type="text" placeholder="メールアドレス">
          <input type="passsword" placeholder="パスワード">
          <div class="btnHover btnBefore">
            <input type="submit" value="ログイン" class="btn">
          </div>
        </form>
      </div>
      <div class="registerForm">
        <h3>新規会員登録</h3>
        <form action="">
          <input type="text" placeholder="お名前">
          <input type="text" placeholder="住所">
          <input type="text" placeholder="メールアドレス">
          <input type="password" placeholder="パスワード(英数字8文字以上)">
          <div class="btnHover btnBefore btnAfter">
            <input type="submit" value="会員登録" class="btn">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require 'footer.php' ;?>