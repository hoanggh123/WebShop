<?php 
include "header.php";
include "slider.php";
include "Class/brand_class.php";
?>
<?php
$brand = new brand;
if($_SERVER ['REQUEST_METHOD'] === 'POST'){
  $cartegory_id = $_POST['cartegory_id'];
  $brand_name = $_POST['brand_name'];
  $insert_brand = $brand->insert_brand($cartegory_id, $brand_name);
}
?>
<div class="content-row2">
  <div class="admin-search">
    <h2 class="search-header">Quản lí loại sản phẩm</h2>
    <form class="form-cartegory" action="" method="POST">
      <select name="cartegory_id" id="">
        <option value="#">--Chọn danh mục</option>
        <?php 
        $show_cartegory = $brand -> show_cartegory();
        if($show_cartegory){
          while($result = $show_cartegory -> fetch_assoc()){   
        ?>
        <option value="<?php echo $result ['cartegory_id'] ?>" ><?php echo $result ['cartegory_name'] ?></option>
        <?php
         }
        }
        ?>
      </select>
      <input required style="margin-left: 12px;" name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm">
      <button  class="btn"  type="submit">Thêm</button>
    </form>
  </div>
</div>
</section>

</body>

</html>