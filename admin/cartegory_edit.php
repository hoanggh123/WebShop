<?php 
include "header.php";
include "slider.php";
include "Class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if (!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] ==null) {
  echo "<script>window.location = 'cartegory_list.php'</script>";
}
else{
  $cartegory_id = $_GET['cartegory_id'];

}
$get_cartegory = $cartegory -> get_cartegory($cartegory_id);
if($get_cartegory){
  $result = $get_cartegory->fetch_assoc();
}
?>
<?php

if($_SERVER ['REQUEST_METHOD'] === 'POST'){
  $cartegory_name = $_POST['cartegory_name'];
  $update_cartegory = $cartegory->update_cartegory($cartegory_name,$cartegory_id);
}
?>
<div class="content-row2">
  <div class="admin-search">
    <h2 class="search-header">Thêm danh mục</h2>
    <form action="" method="POST">
      <input name="cartegory_name" type="text" placeholder="Nhập tên danh mục"
        value="<?php echo $result['cartegory_name'] ?>">
      <button type="submit">Thêm</button>
    </form>
  </div>
</div>
</section>

</body>

</html>