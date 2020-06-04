<?php require 'header.php' ;?>
<div class="detailPage">
  <div class="container">
    <h2>90s-camera</h2>
    <div class="itemContent">
      <img src="img/90s-camera.jpg" width="300px" alt="">
      <div class="itemDetail">
      
        <form action="cart-show.php">
          <p>90s-camera</p>
          <p>price：2,000yen</p>
          <p>個数：<select>
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
          </select></p>
          <input type="hidden">
          <input type="hidden">
          <input type="hidden">
          <div  class="btn">
            <input type="submit" value="カートに追加">
          </div>
        </form>
        <div class="btn">
          <a href="favorite-show.php">お気に入りに追加</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require 'footer.php' ;?>
