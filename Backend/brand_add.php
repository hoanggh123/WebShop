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
    <h2 class="search-header">Thêm loại sản phẩm</h2>
    <form action="" method="POST">
      <select name="" id="">
        <option value="#">--Chọn danh mục</option>
        <option value="">Nam</option>
        <option value="">Nam</option>
        <option value="">Nam</option>
        <option value="">Nam</option>
        <option value="">Nam</option>
      </select>
      <input required name="brand_name" type="text" placeholder="Thêm loại sản phẩm ">
      <button type="submit">Thêm</button>
    </form>
  </div>
</div>
</section>

</body>

</html>