<?php 
include "header.php";
include "slider.php";
include "Class/product_class.php";
?>
<?php
$product = new product;
// if($_SERVER ['REQUEST_METHOD'] === 'POST'){
//   $cartegory_id = $_POST['cartegory_id'];
//   $brand_name = $_POST['brand_name'];
//   $insert_brand = $brand->insert_brand($cartegory_id, $brand_name);
// }
?>
<div class="content-product">
  <div class="product_add">
    <h2 class="search-header">Thêm sản phẩm</h2>
    <form class="form" action="" method="POST">
      <div class="prouct-list">
        <p class="title">Nhập tên sản phẩm</p>
        <input required class="product_input" type="text" placeholder="Nhập tên sản phẩm">
      </div>
      <div class="prouct-list">
        <div class="product_item">
          <p class="title">Chọn loại danh mục</p>
          <select class="product_option" name="" id="">
            <option value="#">--Chọn--</option>
            <?php
                $show_cartegory = $product->show_cartegory();
                if($show_cartegory ){
                    while ($result = $show_cartegory -> fetch_assoc()){
?>
<option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>
            <?php
                }
              }
                  ?>
            ?>
          </select>
        </div>
        <div class="product_item">
          <p class="title">Chọn loại sản phẩm</p>
          <select class="product_option" name="" id="">
            <option value="#">--Chọn--</option>
            <?php
                $show_brand = $product->show_brand();
                if($show_brand ){
                    while ($result = $show_brand -> fetch_assoc()){
?>
<option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?></option>
            <?php
                }
              }
                  ?>
            ?>
          </select>
        </div>
      </div>
      <div class="prouct-list">
        <input required class="product_input" type="text" placeholder="Gía sản phẩm">
        <input required class="product_input" type="text" placeholder="Khuyến mãi">
      </div>
      <textarea required name="" id="" cols="30" rows="10" class="text">

            </textarea>
      <div class="prouct-list">
        <input type="file">
        <input type="file">
      </div>
      <div class="product_btn"><button>Thêm</button></div>

    </form>
  </div>
</div>
</section>

</body>

</html>