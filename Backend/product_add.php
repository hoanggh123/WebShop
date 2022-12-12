<?php 
include "header.php";
include "slider.php";
include "Class/product_class.php";
?>
<?php
$product = new product;
if($_SERVER ['REQUEST_METHOD'] === 'POST'){
  // $cartegory_id = $_POST['cartegory_id'];
  // $brand_name = $_POST['brand_name'];
  $insert_product = $product->insert_product($_POST,$_FILES);
}
?>
<div class="content-product">
  <div class="product_add">
    <h2 class="search-header">Thêm sản phẩm</h2>
    <form class="form" action="product_add.php" enctype="multipart/form-data" method="POST">
      <div class="prouct-list">
        <p class="title">Nhập tên sản phẩm</p>
        <input name="product_name" required class="product_input" type="text" placeholder="Nhập tên sản phẩm">
      </div>
      <div class="prouct-list">
        <div class="product_item">
          <p class="title">Chọn loại danh mục</p>
          <select class="product_option" name="cartegory_id" id="cartegory_id">
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

          </select>
        </div>
        <div class="product_item">
          <p class="title">Chọn loại sản phẩm</p>
          <select class="product_option" name="brand_id" id="brand_id">
            <option value="#">--Chọn--</option>

          </select>
        </div>
      </div>
      <div class="prouct-list">
        <input name="product_price" required class="product_input" type="text" placeholder="Gía sản phẩm">
        <input name="product_price_new" required class="product_input" type="text" placeholder="Khuyến mãi">
      </div>
      <textarea name="product_def" required name="" id="editor1" cols="30" rows="10" class="text">

            </textarea>
      <div class="prouct-list">
        <p class="title">Ảnh sản phẩm</p>
        <span style="color: red;"><?php if (isset($insert_product)) {
        echo ($insert_product);
      }?></span>
        <input multiple required name="product_img" type="file">
        <input multiple required name="product_img_desc[]" type="file">
      </div>
      <div class="product_btn"><button>Thêm</button></div>
    </form>
  </div>
</div>
</section>

</body>
<script>
CKEDITOR.replace('editor1', {
  filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
  filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
});
</script>
<script>
$(document).ready(function() {
  $("#cartegory_id").change(function() {
    var x = $(this).val()
    $.get("product_ajax.php", {
      cartegory_id: x
    }, function(data) {
      $("#brand_id").html(data);
    })
  })
})
</script>

</html>