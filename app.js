//Like product
const likeButtons = document.querySelectorAll(".fa-heart");
if (likeButtons) {
  for (let i = 0; i < likeButtons.length; i++) {
    likeButtons[i].addEventListener("click", function () {
      likeButtons[i].classList.toggle("like");
      alert("Bạn đã thích sản phẩm này");
    });
  }
}
//ShopingCart
const btn = document.querySelectorAll(".btn-add");

btn.forEach(function (btn, likeButton, index) {
  btn.addEventListener("click", function (event) {
    {
      var btnItem = event.target;
      var product = btnItem.parentElement;
      var productImg = product.querySelector(".img-cart").src;
      var productName = product.querySelector(".name").innerText;
      var productPrice = product.querySelector(".price").innerText;
      console.log(productImg, productName, productPrice);
      addCart(productImg, productName, productPrice);
    }
  });
});


//Add product

function addCart(productImg, productName, productPrice) {
  var addTr = document.createElement("tr");
  var cartItem = document.querySelectorAll("tbody tr");
  // for (var i = 0; i < cartItem.length; i++) {
  //   var productT = document.querySelectorAll(".cart-name");
  //   if (productT[i].innerHTML == productName) {
  //     alert("Sản phẩm đã có sẳn trong giỏ hàng");
  //     return;
  //   }
  // }
  var trContent =
    '<tr><td class="container-name"><img src="' +
    productImg +
    '" class="cart-img" alt="" /><p class="cart-name">' +
    productName +
    '</p></td><td class="container-item"><p><span class="price">' +
    productPrice +
    '</span><sup>đ</sup></p></td><td class="container-item"><input type="number" value="1" min="0" class="input-cart" /></td><td class="cart-remove"><span class="delete">Xóa</span></td></tr>';
  addTr.innerHTML = trContent;
  var cartTable = document.querySelector("tbody");
  console.log(cartTable);
  cartTable.append(addTr);
  alert("Thêm sản phẩm thành công");
  cartTotal();
}
//Total price product

