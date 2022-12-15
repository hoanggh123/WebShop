//Like product
const likeButtons = document.querySelectorAll(".fa-heart");
if (likeButtons) {
  for (let i = 0; i < likeButtons.length; i++) {
    likeButtons[i].addEventListener("click", function () {
      likeButtons[i].classList.toggle("like");
    });
  }
}
const addBtn = document.querySelectorAll(".btn-add");
addBtn.forEach(function (button, index) {
  button.addEventListener("click", function (event) {
    {
      var btnItem = event.target;
      var product = btnItem.parentElement;
      var imgProduct = product.querySelector(".img-cart").src;
      var nameProduct = product.querySelector(".name").innerText;
      var priceProduct = product.querySelector(".price").innerText;
      console.log(imgProduct, nameProduct, priceProduct);
      addCart(imgProduct, nameProduct, priceProduct);
    }
  });
});
function addCart(imgProduct, nameProduct, priceProduct) {
  var addTr = document.createElement("tr");
  var cartItem = document.querySelectorAll("tbody tr");
  for (var i = 0; i < cartItem.length; i++) {
    var checkName = document.querySelectorAll(".cart-name");
    if (checkName[i].innerHTML == nameProduct) {
      alert("Sản phẩm đã có trong giỏ hàng");
      return;
    }
  }
  var trContent =
    '<tr><td class="container-name"><img src="' +
    imgProduct +
    '" class="cart-img" alt="" /><p class="cart-name">' +
    nameProduct +
    '</p></td><td class="container-item"><p><span class="price">' +
    priceProduct +
    '</span><sup>đ</sup></p></td><td class="container-item"><input class="input-cart" type="number"  value="1" min="0"></td><td class="cart-remove"><p class="delete">Xóa</p></td></tr>';
  addTr.innerHTML = trContent;
  var cartTable = document.querySelector("tbody");
  cartTable.append(addTr);
  alert("Thêm sản phẩm thành công");
  deleteCart();
}
function totalCart() {
  var cartItems = document.querySelectorAll("tbody tr");
  var totalCartC = 0;
  for (var i = 0; i < cartItems.length; i++) {
    var inputValue = cartItems[i].querySelector("input").value;
    console.log(inputValue);
    var priceValue = cartItems[i].querySelector("span").innerHTML;
    console.log(priceValue);
    totalCartA = inputValue * priceValue * 1000;
    totalCartC = totalCartC + totalCartA;
    var totalCartD = totalCartC.toLocaleString("de-DE");
  }
  var totalCartA = document.querySelector(".price-total");
  totalCartA.innerHTML = totalCartD;
  console.log(totalCartA);
}
function deleteCart() {
  var cartItem = document.querySelectorAll("tbody tr");
  for (var i = 0; i < cartItem.length; i++) {
    var deleteProduct = document.querySelectorAll(".delete");
    deleteProduct[i].addEventListener("click", function (event) {
      var deleteItem = event.target;
      var deleteShow = deleteItem.parentElement.parentElement;
      deleteShow.remove();
      alert("Xóa sản phẩm thành công");
    });
  }
}
