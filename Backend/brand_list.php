<?php 
include "header.php";
include "slider.php";
include "Class/brand_class.php";

?>
<?php
$brand = new brand;
$show_brand = $brand->show_brand();
?>
<div class="content-row2">
  <div class="cartegory_list">
    <h2 class="search-header">Danh sách loại sản phẩm</h2>
    <table class="content-table">
      <thead>
        <tr>
          <th>STT</th>
          <th>Id sản phẩm</th>
          <th>Id danh muc</th>
          <th>Tên danh mục</th>
          <th>Tên sản phẩm</th>
          <th>Hành đông</th>
        </tr>
      </thead>
      <tbody>
        <?php
            if($show_brand){
              $i=0;
              while($result = $show_brand->fetch_assoc()){
                $i++;
            ?>
        <tr>
          <td> <?php echo $i 
            ?></td>
          <td> <?php echo $result['brand_id'] ?></td>
          <td> <?php echo $result['cartegory_id'] ?></td>
          <td> <?php echo $result['cartegory_name'] ?></td>
          <td><?php echo  $result['brand_name'] ?></td>
          <td><a href="brand_edit.php?brand_id=<?php echo $result['brand_id']?>">Sữa</a>|
            <a href="brand_delete.php?brand_id=<?php echo $result['brand_id']?>">Xóa</a>
          </td>
        </tr>
        <?php  }}
            ?>
      </tbody>
    </table>
  </div>
</div>
</section>
</body>

</html>