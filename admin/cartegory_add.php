<?php 
include "header.php";
include "slider.php";
include "Class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if($_SERVER ['REQUEST_METHOD'] === 'POST'){
  $cartegory_name = $_POST['cartegory_name'];
  $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
}
?>
<div class="content-row2">
  <div class="admin-search">
    <h2 class="search-header">Thêm danh mục</h2>
    <form action="" method="POST">
      <input name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
      <button type="submit">Thêm</button>
    </form>
  </div>
</div>
</section>

</body>

</html>