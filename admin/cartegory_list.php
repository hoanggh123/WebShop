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
      <?php
            if($show_cartegory){
              $i=0;
              while($result = $show_cartegory->fetch_assoc()){
                $i++;
            ?>
      <tbody>
        <tr>
          <td> <?php echo $i 
            ?></td>
          <td> <?php echo $result['cartegory_id'] 
            ?></td>
          <td><?php echo $result['cartegory_name'] 
            ?></td>
          <td><a href="">Sữa</a>|<a href="">Xóa</a></td>
        </tr>
      </tbody>
      <?php  }}
            ?>
    </table>
  </div>
</div>
</section>

</body>

</html>