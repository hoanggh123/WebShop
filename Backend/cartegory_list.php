<?php 
include "header.php";
include "slider.php";
include "Class/cartegory_class.php";

?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory->show_cartegory();
?>
<div class="content-row2">
  <div class="cartegory_list">
    <h2 class="search-header">Thêm danh mục</h2>
    <table class="content-table">
      <thead>
        <tr>
          <th>STT</th>
          <th>ID</th>
          <th>Danh mục</th>
          <th>Hành đông</th>
        </tr>
      </thead>
      <tbody>
      <?php
            if($show_cartegory){
              $i=0;
              while($result = $show_cartegory->fetch_assoc()){
                $i++;
            ?>
      
        <tr>
          <td> <?php echo $i 
            ?></td>
          <td> <?php echo $result['cartegory_id'] 
            ?></td>
          <td><?php echo  $result['cartegory_name'] 
            ?></td>
          <td><a href="cartegory_edit.php?cartegory_id=<?php echo $result['cartegory_id']?>">Sữa</a>|
            <a href="cartegory_delete.php?cartegory_id=<?php echo $result['cartegory_id']?>">Xóa</a>
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