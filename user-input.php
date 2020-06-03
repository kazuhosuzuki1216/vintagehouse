<?php require 'header.php' ;?>
<div class="userInputPage">
  <div class="container">
    <h2>ユーザー情報</h2>
    <form action="user-output.php">
      <div class="textArea">
        <p>お名前</p>
        <input type="text">
      </div>    
      <div class="textArea">
        <p>住所</p>
        <input type="text">
      </div>    
      <div class="textArea">
        <p>メールアドレス</p>
        <input type="text">
      </div>    
      <div class="textArea">
        <p>パスワード</p>
        <input type="text">
      </div>    
      <div class="btnHover btnBefore">
        <input type="submit" value="ユーザー情報を変更する" class="btn">
      </div>
    </form>
  </div>
</div>
<?php require 'footer.php' ;?>