<?php
include "Class/cartegory_class.php";

$cartegory = new cartegory;
if (!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] ==null) {
  echo "<script>window.location = 'cartegory_list.php'</script>";
}
else{
  $cartegory_id = $_GET['cartegory_id'];

}
$delete_cartegory = $cartegory -> delete_cartegory($cartegory_id);
?>