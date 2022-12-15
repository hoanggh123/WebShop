//Like product
const likeButtons = document.querySelectorAll(".fa-heart");
if (likeButtons) {
  for (let i = 0; i < likeButtons.length; i++) {
    likeButtons[i].addEventListener("click", function () {
      likeButtons[i].classList.toggle("like");
    });
  }
}
const addbtn = document.querySelectorAll(".btn-add");
addbtn.forEach(function (button, index) {
  button.addEventListener("click", function (event) {
    {
      var btnItem = event.target;
      var product = btnItem.parentElement;
      var imgProduct = product.querySelector(".img-cart").src;
      var nameProduct = product.querySelector(".name").innerText;
      var priceProduct = product.querySelector(".price").innerText;
      console.log(imgProduct, nameProduct, priceProduct);
      addCart(imgProduct, nameProduct, priceProduct);
      totalCart() 
    }
  });
});
function addCart(imgProduct, nameProduct, priceProduct) {
  var addTr = document.createElement("tr");
  var trContent =
    '<tr class="trCart"><td class="container-name"><img src="' +
    imgProduct +
    '" class="cart-img" alt="" /><p class="cart-name">' +
    nameProduct +
    '</p></td><td class="container-item"><p><span class="price">' +
    priceProduct +
    '</span><sup>đ</sup></p></td><td class="container-item"><input type="number" value="1" min="1" class="input-cart" /></td><td class="cart-remove"><span class="delete">Xóa</span></td></tr>';
  addTr.innerHTML = trContent;
  var cartTable = document.querySelector("tbody");
  cartTable.append(addTr);
}

function totalCart() {
  var cartItems = document.querySelectorAll(".trCart");
  for (let i = 0; i < i.length; i++) {
    var inputValue = cartItems[i].querySelector(".input-cart").value
    console.log(inputValue); 
    var priceValue = cartItems[i].querySelector(".price").value
  }
}