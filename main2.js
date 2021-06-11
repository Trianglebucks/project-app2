let carts = document.querySelectorAll(".add-cart");

let products = [
  {
    name: "Clark",
    tag: "Clark",
    price: 5500,
    inCart: 0,
  },
  {
    name: "Madden",
    tag: "Madden",
    price: 2880,
    inCart: 0,
  },
  {
    name: "Eastrock",
    tag: "Eastrock",
    price: 1800,
    inCart: 0,
  },
  {
    name: "H2Ocean",
    tag: "H2Ocean",
    price: 999,
    inCart: 0,
  },
  {
    name: "Knight",
    tag: "Knight",
    price: 3599,
    inCart: 0,
  },
  {
    name: "Preview",
    tag: "Preview",
    price: 1799,
    inCart: 0,
  },
  {
    name: "Acuto",
    tag: "Acuto",
    price: 3189,
    inCart: 0,
  },
  {
    name: "ECCO",
    tag: "Ecco",
    price: 9450,
    inCart: 0,
  },
  {
    name: "Bata",
    tag: "Bata",
    price: 1500,
    inCart: 0,
  },
];

for (let i = 0; i < carts.length; i++) {
  carts[i].addEventListener("click", () => {
    cartNumbers(products[i]);
    totalCost(products[i]);
  });
}

function onLoadCartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");
  if (productNumbers) {
    document.querySelector(".cart span").textContent = productNumbers;
  }
}

function cartNumbers(product, action) {
  let productNumbers = localStorage.getItem("cartNumbers");
  productNumbers = parseInt(productNumbers);

  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);

  if (action) {
    localStorage.setItem("cartNumbers", productNumbers - 1);
    document.querySelector(".cart span").textContent = productNumbers - 1;
    console.log("action running");
  } else if (productNumbers) {
    localStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector(".cart span").textContent = productNumbers + 1;
  } else {
    localStorage.setItem("cartNumbers", 1);
    document.querySelector(".cart span").textContent = 1;
  }
  setItems(product);
}

function setItems(product) {
  // let productNumbers = localStorage.getItem('cartNumbers');
  // productNumbers = parseInt(productNumbers);
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);

  if (cartItems != null) {
    let currentProduct = product.tag;

    if (cartItems[currentProduct] == undefined) {
      cartItems = {
        ...cartItems,
        [currentProduct]: product,
      };
    }
    cartItems[currentProduct].inCart += 1;
  } else {
    product.inCart = 1;
    cartItems = {
      [product.tag]: product,
    };
  }

  localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product, action) {
  let cart = localStorage.getItem("totalCost");

  if (action) {
    cart = parseInt(cart);

    localStorage.setItem("totalCost", cart - product.price);
  } else if (cart != null) {
    cart = parseInt(cart);
    localStorage.setItem("totalCost", cart + product.price);
  } else {
    localStorage.setItem("totalCost", product.price);
  }
}

function displayCart() {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);

  let cart = localStorage.getItem("totalCost");
  cart = parseInt(cart);

  let productContainer = document.querySelector(".products");

  if (cartItems && productContainer) {
    productContainer.innerHTML = "";
    Object.values(cartItems).map(item => {
      productContainer.innerHTML += `
      <div class="product">
      <div class="forimage"><img src="./images/${item.tag}.jpg"></div>        
      <div class="forname"><h3>${item.name}</h3></div>
      <div class="forprice"><h3>₱${item.price}</h3></div>
      <div class="forquantity"><h3>${item.inCart}</h3></div>
      <div class="fortotalcost"><h3>₱${item.inCart * item.price},00</div> 
      <div class="reoveItem"><button>Remove</button></div>
      </div>
      `;
    });

    productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="basketTotalTitle">Basket Total</h4>
                <h4 class="basketTotal">$${cart},00</h4>
            </div>`;

    deleteButtons();
  }
}

function deleteButtons() {
  const removeItem = document.getElementsByClassName("reoveItem");
  let productNumbers = localStorage.getItem("cartNumbers");
  let cartCost = localStorage.getItem("totalCost");
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productName;
  console.log(cartItems);

  for (var i = 0; i < removeItem.length; i++) {
    let removeBtn = removeItem[i];
    removeBtn.addEventListener("click", () => {
      console.log(
        event.target.parentElement.parentElement.children[1].children[0]
          .textContent
      );
      productName =
        event.target.parentElement.parentElement.children[1].children[0]
          .textContent;
      localStorage.setItem(
        "cartNumbers",
        productNumbers - cartItems[productName].inCart
      );
      localStorage.setItem(
        "totalCost",
        cartCost - cartItems[productName].price * cartItems[productName].inCart
      );
      delete cartItems[productName];
      localStorage.setItem("productsInCart", JSON.stringify(cartItems));
      window.location.reload();
    });
  }
}

onLoadCartNumbers();
displayCart();
