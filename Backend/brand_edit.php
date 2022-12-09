<?php 
include "header.php";
include "slider.php";
include "Class/brand_class.php";
?>
<?php
$brand = new brand;
$brand_id = $_GET['brand_id'];
$get_brand = $brand -> get_brand($brand_id);
if($get_brand){
  $resultBrand = $get_brand->fetch_assoc();
}
if($_SERVER ['REQUEST_METHOD'] === 'POST'){
  $cartegory_id = $_POST['cartegory_id'];
  $brand_name = $_POST['brand_name'];
  $update_brand = $brand->update_brand($cartegory_id,$brand_id, $brand_name);
}
?>
<div class="content-row2">
  <div class="admin-search">
    <h2 class="search-header">Thêm loại sản phẩm</h2>
    <form class="form-cartegory" action="" method="POST">
      <select name="cartegory_id" id="">
        <option value="#">--Chọn danh mục</option>
        <?php 
        $show_cartegory = $brand -> show_cartegory();
        if($show_cartegory){
          while($result = $show_cartegory -> fetch_assoc()){   
        ?>
        <option <?php if($resultBrand['cartegory_id']== $result['cartegory_id']){
          echo "Selected";
        } ?> value="<?php echo $result ['cartegory_id'] ?>"><?php echo $result ['cartegory_name'] ?></option>
        <?php
         }
        }
        ?>
      </select>
      <input style="margin-left: 12px;" required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm"
        value="<?php echo $resultBrand['brand_name'] ?>">
      <button class="btn"   type="submit">Sửa</button>
    </form>
  </div>
</div>
</section>

</body>

</html>