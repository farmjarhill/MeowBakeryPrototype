document.addEventListener("DOMContentLoaded", function () {
  const cartDrawer = document.querySelector(".cart-drawer-items-list");

  // Function to update the cart item count display
  function updateCartItemCount() {
    // Example: update the cart icon number, implement as needed
  }

  // Function to save cart to local storage
  function saveCartToLocalStorage() {
    const cartItems = document.querySelectorAll(".cart-drawer-item");
    let cartData = [];
    cartItems.forEach((item) => {
      const productName = item.querySelector(".cart-drawer-item__title").dataset
        .productName;
      const quantity = item.querySelector(".qty-control__number").value;
      const price = item.querySelector(".cart-drawer-item__price").dataset
        .price;
      const imgSrc = item.querySelector(".cart-drawer-item__img").src;
      cartData.push({ productName, quantity, price, imgSrc });
    });
    localStorage.setItem("cart", JSON.stringify(cartData));
  }

  // Function to load cart from local storage
  function loadCartFromLocalStorage() {
    const cartData = JSON.parse(localStorage.getItem("cart")) || [];
    cartData.forEach((item) => {
      addToCart(null, item);
    });
    updateSubtotal();
    updateCartItemCount();
  }

  // Function to add product to cart
  function addToCart(event, itemData = null) {
    event && event.preventDefault();

    // Determine if we're adding a new item or loading from localStorage
    let productName, price, imgSrc, quantity;
    if (itemData) {
      ({ productName, price, imgSrc, quantity } = itemData);
      price = parseFloat(price);
      quantity = parseInt(quantity);
    } else {
      const productCard = event.target.closest(".product-card");
      productName = productCard.querySelector(".pc__title a").textContent;
      price = parseFloat(
        productCard.querySelector(".price").textContent.replace("$", "").trim()
      );
      imgSrc = productCard.querySelector(".pc__img").getAttribute("src");
      quantity = 1;
    }

    // Check if the product already exists in the cart
    const existingCartItem = document.querySelector(
      `.cart-drawer-item .cart-drawer-item__title[data-product-name="${productName}"]`
    );
    if (existingCartItem) {
      const quantityInput = existingCartItem.parentElement.querySelector(
        ".qty-control__number"
      );
      const currentQuantity = parseInt(quantityInput.value);
      quantityInput.value = currentQuantity + quantity;
      updatePrice(quantityInput, quantity);
      updateSubtotal();
      updateCartItemCount();
      saveCartToLocalStorage();
      return;
    }

    // Create new cart item
    const cartItem = document.createElement("div");
    cartItem.classList.add("cart-drawer-item", "d-flex", "position-relative");
    cartItem.innerHTML = `
            <div class="position-relative">
                <img loading="lazy" class="cart-drawer-item__img" src="${imgSrc}" />
            </div>
            <div class="cart-drawer-item__info flex-grow-1">
                <h6 class="cart-drawer-item__title fw-normal" data-product-name="${productName}">${productName}</h6>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <div class="qty-control position-relative">
                        <input type="number" name="quantity" value="${quantity}" min="1" class="qty-control__number border-0 text-center">
                        <div class="qty-control__reduce text-start">-</div>
                        <div class="qty-control__increase text-end">+</div>
                    </div>
                    <span class="cart-drawer-item__price money price" data-price="${price.toFixed(
                      2
                    )}">$${price.toFixed(2)}</span>
                </div>
            </div>
            <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove"></button>
        `;

    cartDrawer.appendChild(cartItem);
    const divider = document.createElement("hr");
    divider.classList.add("cart-drawer-divider");
    cartDrawer.appendChild(divider);

    // Trong hàm addToCart, sau khi sản phẩm được thêm vào DOM
    updatePrice(cartItem.querySelector(".qty-control__number"));

    updateSubtotal();
    updateCartItemCount();
    saveCartToLocalStorage();
  }

  // Function to remove cart item
  function removeCartItem(event) {
    if (!event.target.classList.contains("js-cart-item-remove")) return;

    const cartItem = event.target.closest(".cart-drawer-item");
    const nextSibling = cartItem.nextElementSibling;
    if (nextSibling && nextSibling.classList.contains("cart-drawer-divider")) {
      cartDrawer.removeChild(nextSibling);
    }
    cartDrawer.removeChild(cartItem);

    updateSubtotal();
    updateCartItemCount();
    saveCartToLocalStorage();
  }

  // Function to update quantity of a cart item
  function updateQuantity(event, change) {
    event.stopPropagation(); // Ngăn sự kiện nổi bọt
    const quantityInput = event.target
      .closest(".qty-control")
      .querySelector(".qty-control__number");
    const cartItem = quantityInput.closest(".cart-drawer-item");
    const productName = cartItem.querySelector(".cart-drawer-item__title")
      .dataset.productName;

    // Kiểm tra xem sản phẩm này có được tải từ localStorage hay không
    const cartData = JSON.parse(localStorage.getItem("cart")) || [];
    const existingCartItem = cartData.find(
      (item) => item.productName === productName
    );

    let quantity;
    if (existingCartItem) {
      // Nếu sản phẩm được tải từ localStorage, cập nhật số lượng dựa trên số lượng hiện tại trong localStorage
      quantity = parseInt(existingCartItem.quantity) + change;
    } else {
      // Nếu sản phẩm không được tải từ localStorage, cập nhật số lượng dựa trên giá trị hiện tại của input
      quantity = parseInt(quantityInput.value) + change;
    }

    if (quantity < 1) quantity = 1;
    quantityInput.value = quantity;

    updatePrice(quantityInput, quantity);
    updateSubtotal();
    updateCartItemCount();
    saveCartToLocalStorage();
  }

  // Function to update price of a cart item based on its quantity
  function updatePrice(quantityInput) {
    const cartItem = quantityInput.closest(".cart-drawer-item");
    const priceElement = cartItem.querySelector(".cart-drawer-item__price");
    const pricePerUnit = parseFloat(priceElement.dataset.price);
    const quantity = parseInt(quantityInput.value);
    const totalPrice = pricePerUnit * quantity;
    priceElement.textContent = `$${totalPrice.toFixed(2)}`;
  }

  // Function to update subtotal of all cart items
  function updateSubtotal() {
    const cartItems = document.querySelectorAll(".cart-drawer-item");
    let subtotal = 0;
    cartItems.forEach((item) => {
      const priceElement = item.querySelector(".cart-drawer-item__price");
      const price = parseFloat(
        priceElement.textContent.replace("$", "").trim()
      );
      subtotal += price;
    });

    const subtotalElement = document.querySelector(".cart-subtotal");
    if (subtotalElement) {
      subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
    }
  }

  // Add event listener to "Add to Cart" buttons
  const addToCartButtons = document.querySelectorAll(".js-add-cart");
  addToCartButtons.forEach((button) => {
    button.addEventListener("click", addToCart);
  });

  // Add event listener to the cart drawer for item removal and quantity updates
  cartDrawer.addEventListener("click", function (event) {
    if (event.target.classList.contains("js-cart-item-remove")) {
      removeCartItem(event);
    } else if (event.target.classList.contains("qty-control__reduce")) {
      updateQuantity(event, -1);
    } else if (event.target.classList.contains("qty-control__increase")) {
      updateQuantity(event, 1);
    }
  });

  // Load cart from local storage on page load
  loadCartFromLocalStorage();
});

function displayCartItems() {
  const cartData = JSON.parse(localStorage.getItem("cart")) || [];
  const cartTableBody = document.querySelector(".cart-table tbody");
  cartTableBody.innerHTML = ""; // Xóa các sản phẩm hiện có để không hiển thị trùng lặp

  let total = 0;
  cartData.forEach((item, index) => {
    const subtotal = item.price * item.quantity;
    total += subtotal;
    const row = document.createElement("tr");
    row.innerHTML = `
            <td>
              <div class="shopping-cart__product-item">
                <img loading="lazy" src="${
                  item.imgSrc
                }" width="120" height="120" alt="" />
              </div>
            </td>
            <td>
              <div class="shopping-cart__product-item__detail">
                <h4>${item.productName}</h4>
              </div>
            </td>
            <td>
              <span class="shopping-cart__product-price">$${item.price}</span>
            </td>
            <td>
              <input type="number" name="quantity" value="${
                item.quantity
              }" min="1" class="qty-control__number text-center" data-index="${index}">
            </td>
            <td>
              <span class="shopping-cart__subtotal">$${subtotal.toFixed(
                2
              )}</span>
            </td>
            <td>
              <button class="remove-cart" data-index="${index}">
                Remove
              </button>
            </td>
        `;
    cartTableBody.appendChild(row);
  });

  // Cập nhật tổng cộng
  const totalElement = document.querySelector(".cart-totals tbody");
  if (totalElement) {
    totalElement.innerHTML = `
            <tr>
                <th>Subtotal</th>
                <td>$${total.toFixed(2)}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>$${total.toFixed(2)}</td>
            </tr>
        `;
  }
}

// Xóa sản phẩm khỏi giỏ hàng
function removeFromCart(index) {
  const cartData = JSON.parse(localStorage.getItem("cart")) || [];
  cartData.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cartData));
  displayCartItems(); // Làm mới danh sách sản phẩm
}

// Cập nhật số lượng
function updateQuantity(index, quantity) {
  const cartData = JSON.parse(localStorage.getItem("cart")) || [];
  if (cartData[index]) {
    cartData[index].quantity = quantity;
    localStorage.setItem("cart", JSON.stringify(cartData));
    displayCartItems(); // Làm mới danh sách sản phẩm
  }
}

// Sự kiện xóa sản phẩm
document
  .querySelector(".cart-table tbody")
  .addEventListener("click", function (e) {
    if (e.target.classList.contains("remove-cart")) {
      const index = e.target.getAttribute("data-index");
      removeFromCart(index);
    }
  });

// Sự kiện thay đổi số lượng
document
  .querySelector(".cart-table tbody")
  .addEventListener("change", function (e) {
    if (e.target.classList.contains("qty-control__number")) {
      const index = e.target.getAttribute("data-index");
      const quantity = parseInt(e.target.value);
      updateQuantity(index, quantity);
    }
  });
displayCartItems();

document.addEventListener("DOMContentLoaded", function () {
    displayCartItems();
  
    document.querySelector('.cart-table tbody').addEventListener('click', function(e) {
      if (e.target.matches('.remove-cart, .remove-cart *')) { // Select the remove button and any children inside it
        const itemRow = e.target.closest('tr'); // Get the closest tr ancestor to the remove button
        const productName = itemRow.querySelector('.shopping-cart__product-item__detail h4').textContent;
        removeFromCart(productName);
      }
    });
  
    document.querySelector('.cart-table tbody').addEventListener('click', function(e) {
      if (e.target.matches('.qty-control__reduce, .qty-control__reduce *')) { // Matches the reduce button and any children
        const quantityInput = e.target.closest('.qty-control').querySelector('.qty-control__number');
        updateQuantity(quantityInput, -1);
      } else if (e.target.matches('.qty-control__increase, .qty-control__increase *')) { // Matches the increase button and any children
        const quantityInput = e.target.closest('.qty-control').querySelector('.qty-control__number');
        updateQuantity(quantityInput, 1);
      }
    });
  });
  
  function displayCartItems() {
    const cartData = JSON.parse(localStorage.getItem("cart")) || [];
    const cartTableBody = document.querySelector('.cart-table tbody');
    cartTableBody.innerHTML = ''; // Clear any existing rows
  
    cartData.forEach((item, index) => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>
          <div class="shopping-cart__product-item">
            <img loading="lazy" src="${item.imgSrc}" width="120" height="120" alt="" />
          </div>
        </td>
        <td>
          <div class="shopping-cart__product-item__detail">
            <h4>${item.productName}</h4>
          </div>
        </td>
        <td>
          <span class="shopping-cart__product-price">$${item.price}</span>
        </td>
        <td>
          <div class="qty-control position-relative">
            <input type="number" name="quantity" value="${item.quantity}" min="1" class="qty-control__number text-center">
            <div class="qty-control__reduce">-</div>
            <div class="qty-control__increase">+</div>
          </div>
        </td>
        <td>
          <span class="shopping-cart__subtotal">$${(item.price * item.quantity).toFixed(2)}</span>
        </td>
        <td>
          <a href="#" class="remove-cart">
            X
          </a>
        </td>
      `;
      cartTableBody.appendChild(row);
    });
  
    // Update the subtotal at the bottom of the cart
    updateCartSubtotal();
  }
  
  function removeFromCart(productName) {
    let cartData = JSON.parse(localStorage.getItem("cart")) || [];
    cartData = cartData.filter(item => item.productName !== productName);
    localStorage.setItem("cart", JSON.stringify(cartData));
    displayCartItems(); // Refresh the list
  }
  
  function updateQuantity(input, change) {
    const productName = input.closest('tr').querySelector('.shopping-cart__product-item__detail h4').textContent;
    let cartData = JSON.parse(localStorage.getItem("cart")) || [];
    const product = cartData.find(item => item.productName === productName);
  
    if (product) {
      const newQuantity = parseInt(product.quantity) + change; // Ensure we're working with numbers
      product.quantity = Math.max(1, newQuantity); // Prevent quantity from going below 1
      input.value = product.quantity; // Update the input value on the page
      localStorage.setItem("cart", JSON.stringify(cartData)); // Save the new cart data to local storage
  
      console.log(`Updated quantity for ${productName} to ${product.quantity}`); // Debugging
  
      displayCartItems(); // Refresh the list
    }
  }
  
  function updateCartSubtotal() {
    const cartData = JSON.parse(localStorage.getItem("cart")) || [];
    const subtotal = cartData.reduce((total, item) => total + item.price * item.quantity, 0);
    
    const subtotalElement = document.querySelector('.cart-totals tbody');
    subtotalElement.innerHTML = `
      <tr>
        <th>Subtotal</th>
        <td>$${subtotal.toFixed(2)}</td>
      </tr>
      <tr>
        <th>Total</th>
        <td>$${subtotal.toFixed(2)}</td>
      </tr>
    `;
  }
  