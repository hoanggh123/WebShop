<?php
require_once ('../Backend/Class/cartegory_class.php');
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory->show_cartegory();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IVY Moda</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
  <link href="https://fonts.googleleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamses"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.0.0/css/all.min.css">
  <!-- <link rel="stylesheet" href="/assets/fonts/fontawesome-free-6.0.0/css/all.min.css"/> -->
  <script src="https://kit.fontawesome.com/1147679ae7.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
  <section>
    <div class="header">
      <ul class="nav-item">
        <li class="item-link">
          <?php
        if ($show_cartegory) {
          $i = 0;
          while ($result = $show_cartegory->fetch_assoc()) {
            $i++;
        ?>
          <a class="link-label" href=""><?php echo  $result['cartegory_name'] 
            ?></a>
          <?php
          }
        }
         ?>
        </li>
      </ul>
      <div class="img">
        <a href=""></a>
      </div>
      <div class="header-icons">
        <div class="search">
          <input type="text" placeholder="Tìm kiếm" class="input" />
          <i class="icons-list fa-solid fa-magnifying-glass"></i>
        </div>
        <i class="icons-item fa-solid fa-headphones"></i>
        <i class="icons-item fa-regular fa-user"></i>
        <label for="check">
          <i for="check" class="icons-item fa-solid fa-bag-shopping"></i></label>
      </div>
      <input type="checkbox" hidden class="check" id="check" />
      <div id="check" class="nav-mobile">
        <div class="hearder-cart">
          <h2 class="cart-heading">Giỏ hàng</h2>
          <label for="check">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-x">
              <line x1="18" y1="6" x2="6" y2="18" />
              <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
          </label>
        </div>
        <section class="cart">
          <form action="" class="table-cart">
            <table class="table-list">
              <th ead class="">
                <tr class="table-header">
                  <th class="header-product">Sản phẩm</th>
                  <th class="header-item">Giá</th>
                  <th class="header-item">Số lượng</th>

                </tr>
              </th>
              <tbody>
                <tr>

                </tr>
              </tbody>
            </table>
          </form>
        </section>
        <div class="footer-cart">
          <p class="footer-total">
            Tổng cộng:<span class="price-total">0đ</span>
          </p>
          <a href="cartshop.html"><button class="shopping">Xem giỏ hàng</button></a>
        </div>
      </div>
    </div>